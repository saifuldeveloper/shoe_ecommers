<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\EmailTemplate,
    Http\Controllers\Controller,
};
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Helpers\SmsHelper;

class SMSSettingController extends Controller
{

    /**
     * Constructor Method.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }

    /**
     * Show the form for updating resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sms()
    {
        return view('back.settings.sms');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailTemplate $template)
    {
        return view('back.email_template.edit', compact('template'));
    }


    public function smsUpdate(Request $request)
    {


        //  Update .env safely
        SmsHelper::overWriteEnvFile('SMS_PROVIDER_URL', $request->sms_provider);
        SmsHelper::overWriteEnvFile('SMS_API_KEY', $request->sms_key);

        //  Prepare data (checkbox fix)
        $data = $request->all();
        $data['sms_active'] = $request->has('sms_active') ? 1 : 0;

        $data['sms_section'] = json_encode($request->sms_section);


        //  Update DB
        Setting::first()->update($data);

        return redirect()->back()->withSuccess('Data Updated Successfully.');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailTemplate $template)
    {
        $template->update($request->all());
        return redirect()->route('back.setting.email')->withSuccess(__('Email Template Updated Successfully.'));
    }


}
