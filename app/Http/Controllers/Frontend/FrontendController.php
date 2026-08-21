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
         $courses = Course::query()->select('id', 'name', 'slug', 'thumbnail', 'code', 'cricos')->get();
        return view('frontend.pages.about', ['title' => 'About Us'],compact('courses'));
    }

    public function contactPage()
    {
        return view('frontend.pages.contact', ['title' => 'Contact Us']);
    }
   
    public function registration()
    {
        return view('frontend.pages.register', ['title' => 'Register']);
    }

      public function login()
    {
        return view('frontend.pages.login', ['title' => 'Login']);
    }   
}
