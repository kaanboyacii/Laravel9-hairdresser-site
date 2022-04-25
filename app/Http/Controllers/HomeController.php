<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\service;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $sliderdata = Service::limit(4)->get();
        $servicelist1 = Service::limit(6)->get();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'servicelist1' => $servicelist1
        ]);
    }
    public function service($id)
    {
        $data = Service::find($id);
        $images = DB::table('images')->where('service_id',$id)->get();
        return view('home.service', [
            'data' => $data,
            'images' => $images
        ]);
    }
    public function categoryservices($id)
    {
        $data = Service::find($id);
        $images = DB::table('images')->where('service_id',$id)->get();
        return view('home.service', [
            'data' => $data,
            'images' => $images
        ]);
    }
    public static function maincategorylist(){
        return Category::Where('parent_id','=',0)->with('children')->get();
    }


    public function aboutus()
    {
        return view(view: 'home.about');
    }
    public function login()
    {
        return view(view: 'admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();


                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our'
            ]);
        } else {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
