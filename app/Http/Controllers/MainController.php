<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\SiteImage;
use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     Displays main page
     */

    public function index()
    {
        return view('home',[
            'image_paths'=>SiteImage::where('page','home')->pluck('file_path', 'name')->map(function ($file, $name) {
                return ['name' => $name, 'file_path' => $file];
            })->toArray(),
            'settings'=>Settings::first()
        ]);

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
        return view('contact',[ 'settings'=>Settings::first()]);

    }
    public function packages()
    {
      return view('packages')
;    }
}
