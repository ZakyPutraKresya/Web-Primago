<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function services()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function testimoni()
    {
        return view('testimonial');
    }
}
