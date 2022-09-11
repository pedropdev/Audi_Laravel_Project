<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiPageController extends Controller
{


    public function home()
    {
        return view('pages.homepage');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contactus()
    {
        return view('pages.contact-us');
    }



}
