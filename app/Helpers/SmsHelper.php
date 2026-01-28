<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Artisan;

class SmsHelper
{
    /* ===============================
     | ENV FILE OVERWRITE
     =============================== */
    public static function overWriteEnvFile($type, $val)
    {
        $path = base_path('.env');

        if (!file_exists($path)) {
            return false;
        }

        $val = '"' . trim($val) . '"';
        $envContents = file_get_contents($path);

        if (strpos($envContents, $type) !== false) {
            $envContents = preg_replace(
                "/^{$type}=.*/m",
                "{$type}={$val}",
                $envContents
            );
        } else {
            $envContents .= "\n{$type}={$val}";
        }

        file_put_contents($path, $envContents);
        Artisan::call('config:clear');

        return true;
    }

    /* ===============================
     | PLACEHOLDER REPLACER
     =============================== */
    public static function replaceMessagePlaceholders(
        $message,
        $name = null,
        $invoiceId = null,
        $totalAmount = null,
        $paidAmount = null,
        $dueAmount = null,
        $quantity = null,
        $orderStatus = null
    ) {
        if ($name !== null) {
            $message = str_replace('@N', $name, $message);
        }

        if ($invoiceId !== null) {
            $message = str_replace('@I', $invoiceId, $message);
        }

        if ($totalAmount !== null) {
            $message = str_replace('$T', $totalAmount, $message);
        }

        if ($paidAmount !== null) {
            $message = str_replace('$P', $paidAmount, $message);
        }

        if ($dueAmount !== null) {
            $message = str_replace('$D', $dueAmount, $message);
        }

        if ($quantity !== null) {
            $message = str_replace('@Q', $quantity, $message);
        }

        if ($orderStatus !== null) {
            $message = str_replace('@OS', ucfirst($orderStatus), $message);
        }

        return $message;
    }

    /* ===============================
     | FORMAT BD NUMBER
     =============================== */
    public static function formatBangladeshiNumber($number)
    {
        $number = preg_replace('/[^0-9+]/', '', $number);

        if (str_starts_with($number, '+880')) {
            $number = substr($number, 1);
        } elseif (str_starts_with($number, '0')) {
            $number = '88' . $number;
        }

        return $number;
    }

    /* ===============================
     | PURCHASE SMS
     =============================== */
    public static function sendPurchaseSms($order, $cart, $grandTotal, $paidAmount = 0)
    {
        $customerData = json_decode($order->billing_info);

        if (!$customerData) {
            return false;
        }

        $setting = Setting::select('sms_active', 'sms_section')->first();

        if (!$setting || $setting->sms_active != 1) {
            return false;
        }

        $smsSection  = json_decode($setting->sms_section ?? '{}', true);
        $template    = $smsSection['purchase'] ?? null;

        if (!$template) {
            return false;
        }

        $paidAmount = (float) $paidAmount;
        $dueAmount  = max(0, $grandTotal - $paidAmount);

        $message = self::replaceMessagePlaceholders(
            $template,
            $customerData->ship_name ?? '',
            $order->transaction_number ?? '',
            $grandTotal,
            $paidAmount,
            $dueAmount,
            $cart->sum('quantity'),
            null
        );

        $mobile = self::formatBangladeshiNumber($customerData->ship_phone ?? '');

        if (!$mobile) {
            return false;
        }

        Http::post(env('SMS_PROVIDER_URL'), [
            'api_key'   => env('SMS_API_KEY'),
            'sender_id'=> env('SMS_SENDER_ID'),
            'msg'       => $message,
            'to'        => $mobile,
        ]);

        return true;
    }

    /* ===============================
     | ORDER STATUS SMS
     =============================== */
    public static function sendOrderStatusSms($order, $status, $paidAmount = 0)
    {
        $customerData = json_decode($order->billing_info);

        if (!$customerData) {
            return false;
        }

        $setting = Setting::select('sms_active', 'sms_section')->first();

        if (!$setting || $setting->sms_active != 1) {
            return false;
        }

        $smsSection = json_decode($setting->sms_section ?? '{}', true);
    
        $template    = $smsSection['order_status'] ?? null;

        if (!$template) {
            return false;
        }

        $grandTotal = $order->grand_total ?? 0;
        $paidAmount = (float) $paidAmount;
        $dueAmount  = max(0, $grandTotal - $paidAmount);

        $message = self::replaceMessagePlaceholders(
            $template,
            $customerData->ship_name ?? '',
            $order->transaction_number ?? '',
            $grandTotal,
            $paidAmount,
            $dueAmount,
            $order->items_count ?? 0,
            $status
        );

        $mobile = self::formatBangladeshiNumber($customerData->ship_phone ?? '');

        if (!$mobile) {
            return false;
        }

        Http::post(env('SMS_PROVIDER_URL'), [
            'api_key'   => env('SMS_API_KEY'),
            'sender_id'=> env('SMS_SENDER_ID'),
            'msg'       => $message,
            'to'        => $mobile,
        ]);

        return true;
    }
}
