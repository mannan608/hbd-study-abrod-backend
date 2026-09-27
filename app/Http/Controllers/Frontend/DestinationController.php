<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class DestinationController extends Controller
{

    public function destinations(){
         $destinations = json_decode(
            File::get(resource_path('data/destinations.json')),
            true
        );

        return view('frontend.pages.destinations.index',compact('destinations'));
    }
   public function show($slug)
{
    $destinations = json_decode(
        File::get(resource_path('data/destinations.json')),
        true
    );

    $destination = collect($destinations)
        ->firstWhere('slug', $slug);

    if (!$destination) { abort(404); }

    return view(
        'frontend.pages.destinations.details',compact('destination')
    );
}
}
