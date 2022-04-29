<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function setting()
    {
        $data = Setting::first();
        if ($data === null) {
            $data = new Setting();
            $data->title = 'PROJECT TITLE';
            $data->save();
            $data = Setting::first();
        }

        return view("admin.setting", ['data' => $data]);
    }
    public function settingupdate(Request $request,Setting $setting)
    {
        $id = $request->input('id');

        $data = Setting::find($id);
        $data->title = $request->title;
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->adress = $request->input('adress');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.setting');
    }
}
