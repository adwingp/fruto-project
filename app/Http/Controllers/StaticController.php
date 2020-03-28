<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function aboutindex(){
        return view('about-us');
    }

    public function servicesindex(){
        return view('services');
    }

    public function galleryindex(){
        return view('gallery');
    }

    public function contactindex(){
        return view('contact-us');
    }

    
}
