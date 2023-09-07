<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Booking;
use App\Models\Feedback;
use App\Models\Settings;
use App\Models\SiteImage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $bookings = Booking::paginate(10);
        return view('admin.dashboard', [
            "bookings" => $bookings,
            'feedback' => Feedback::all()
        ]);
    }
    public function Blog()
    {
        // $bookings = BlogPost::paginate(10);
        return view('admin.blog', [

        ]);
    }
    public function packages()
    {
        return view('admin.packages', [

        ]);

    }

    public function images()
    {
        $images = SiteImage::all();
        return view('admin.images', [
            'images' => $images
        ]);
    }
    public function settings()
    {
        $settings = Settings::first();
        return view('admin.settings', [
            'settings' => $settings
        ]);
    }
}
