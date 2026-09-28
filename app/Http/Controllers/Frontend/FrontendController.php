<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counsellor;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Support\Facades\File;


class FrontendController extends Controller
{

    public function homePage()
    {
         $events = Event::latest()->paginate(12);
          $destinations = json_decode(
            File::get(resource_path('data/destinations.json')),
            true
        );
         $counsellors = Counsellor::query()
            ->with('user')
            ->where('is_active', true)
            ->latest()
            ->paginate(12);
      
// return $events;

        return view('frontend.pages.home.home', compact('events','destinations','counsellors'));
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
     public function howWeWork(){
        return view('frontend.pages.how-we-works.index');
    }
    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy');
    }
    public function termsConditions(){
        return view('frontend.pages.terms-conditions');
    }

    public function owner(){
        return view('frontend.pages.teams.owner');
    }
}
