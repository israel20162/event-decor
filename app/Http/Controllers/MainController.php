<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     Displays main page
     */

    public function index()
    {
        return view('home');

    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');

    }
    public function contact()
    {
        return view('contact');

    }
    public function packages()
    {
      return view('packages')
;    }
}
