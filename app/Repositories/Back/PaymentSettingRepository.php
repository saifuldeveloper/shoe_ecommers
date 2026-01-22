<?php

namespace App\Repositories\Back;

use App\{
    Helpers\ImageHelper,
    Models\PaymentSetting
};

class PaymentSettingRepository
{

    /**
     * Show the data for updating resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        $bank = PaymentSetting::whereUniqueKeyword('bank')->first();
        $data['bank'] = $bank;


        $sslcommerz = PaymentSetting::whereUniqueKeyword('sslcommerz')->first();
        $data['sslcommerzData'] = $sslcommerz->convertJsonData();
        $data['sslcommerz'] = $sslcommerz;

       
     
        $cod = PaymentSetting::whereUniqueKeyword('cod')->first();
        $data['cod'] = $cod;

        $rewordPayment = PaymentSetting::where('unique_keyword','reward_point')->first();
        $data['rewordPayment'] = $rewordPayment;
        return $data;
    }

    /**
     * Update setting.
     *
     * @param  \App\Http\Requests\PaymentSettingRequest  $request
     * @return void
     */

    public function update($request)
    {

        $input = $request->all();
        $pay_data = PaymentSetting::whereUniqueKeyword($input['unique_keyword'])->first();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'payments',$pay_data,'payments','photo');
        }
    
        if($request->has('status')){
            $input['status'] = 'active';
        }else{
            $input['status'] = 'inactive';
        }
        $pay_data->update($input);


        // if($pay_data->unique_keyword == 'sslcommerz'){
        //     $paydata = $pay_data->convertJsonData();
        //     $this->setEnv('SSLCZ_STORE_ID',$input['pkey']['store_id'],$paydata['store_id']);
        //     $this->setEnv('SSLCZ_STORE_PASSWORD',$input['pkey']['store_password'],$paydata['store_password']);
        // }
    }

    private function setEnv($key, $value,$prev)
    {

        file_put_contents(app()->environmentFilePath(), str_replace(
            $key . '=' . $prev,
            $key . '=' . $value,
            file_get_contents(app()->environmentFilePath())
        ));

    }

}
