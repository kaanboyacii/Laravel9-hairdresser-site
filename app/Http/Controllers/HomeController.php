<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function aboutus(){
        return view(view:'home.about');
    }
    public function contactus(){
        return view(view:'home._contact');
    }

    // public function test($id){
    //     echo "Id Number:",$id;
    // }
}
