<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CounsellorController extends Controller
{

    public function counsellors()
    {
        return view('frontend.pages.counsellors.counsellors');
    }

  
}
