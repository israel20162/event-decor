<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
