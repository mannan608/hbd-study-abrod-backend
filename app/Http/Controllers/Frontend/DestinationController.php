<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class DestinationController extends Controller
{

    public function destinations(){
        return view('frontend.pages.destinations.index');
    }
    public function destinationDetails(){
        return view('frontend.pages.destinations.details');
    }
}
