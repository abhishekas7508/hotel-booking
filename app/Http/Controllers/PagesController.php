<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $para='this is home page';
        //return view('pages.index',compact('para'));
        return view('pages.index')->with('para',$para);
    }

    public function about(){
        return view('pages.about');
    }
    public function facilities(){
        return view('pages.facilities');
    }
    public function services(){
        $data=array(
            'services'=>['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with('data',$data);
    }
    public function ourrooms(){
        return view('pages.ourrooms');
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function success(){
        return view('pages.success');
    }
}


