<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class FrontendController extends Controller
{

    public function homePage()
    {
        return view('frontend.pages.home.home');
    }

    public function aboutPage()
    {
        
        return view('frontend.pages.about.about');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
   
    public function registration()
    {
        return view('frontend.pages.register');
    }

      public function login()
    {
        return view('frontend.pages.login');
    }
    public function achieve(){
        return view('frontend.pages.achieve.achieve');
    }

    public function destinations(){
        return view('frontend.pages.destinations.index');
    }
     public function howWeWork(){
        return view('frontend.pages.how-we-works.index');
    }
}
