<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{

    public function courses()
    {
        return view('frontend.pages.courses.courses', ['title' => 'Courses']);
    }

  
}
