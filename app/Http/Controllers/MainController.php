<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Settings;
use App\Models\SiteImage;
use App\Models\BlogPost;
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
            'settings'=>Settings::first(),
             'blog_posts' => BlogPost::latest()->with('author')->paginate(3),
            'packages' => Package::all(),
        ]);

    }

    public function about()
    {
        return view('about', ['settings' => Settings::first()]);
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
      return view('packages',['packages' => Package::all()])
;    }
}
