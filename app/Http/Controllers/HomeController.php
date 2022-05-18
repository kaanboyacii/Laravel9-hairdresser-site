<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Comment;
use App\Models\service;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $sliderdata = Service::limit(4)->get();
        $servicelist1 = Service::limit(9)->get();
        $setting = Setting::first();
        return view('home.index', [
            'sliderdata' => $sliderdata,
            'servicelist1' => $servicelist1,
            'setting'=>$setting
        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting'=>$setting
        ]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting'=>$setting
        ]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting'=>$setting
        ]);
    }
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }
    public function storemessage(Request $request)
    {
        $data = New Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('contact')->with('success','Your message has been sent, Thank You');
    }
    public function storecomment(Request $request)
    {
        $data = New Comment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your comment has been sent, Thank You');
    }
    public function service($id)
    {
        $data = Service::find($id);
        $images = DB::table('images')->where('service_id',$id)->get();
        $reviews = Comment::where('service_id',$id)->get();
        return view('home.service', [
            'data' => $data,
            'images' => $images,
            'reviews' => $reviews
        ]);
    }
    public function categoryservices($id)
    {

        $category = Category::find($id);
       // $servicesx = DB::table('services')->where('category_id',$id)->get();
        $services = Service::where('category_id',$id)->get();
       // dd($services);
        return view('home.categoryservices', [

            'category' => $category,
            'services' => $services
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
                'error' => 'The provided credentials do not match our'
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

        return redirect('/');
    }
}
