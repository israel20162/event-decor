<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FeedbackController;

use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/feedback', [FeedbackController::class, 'storeFeedback'])->name('feedback.store');


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/packages', 'packages')->name('packages');



});

Route::middleware(['auth',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
    Route::get('/admin/settings', 'settings')->name('admin.settings');
    Route::get('/admin/images', 'images')->name('admin.images');
    Route::get('/admin/blog', 'blog')->name('admin.blog');
    Route::get('/admin/packages', 'packages')->name('admin.packages');


    Route::delete('/admin/image/delete/{image_id?}','imageDelete')->name('admin.images.destroy');
    Route::post('/admin/image/upload','imageUpload')->name('admin.images.store');
    Route::post('/admin/image/update','imageUpload')->name('admin.images.update');





});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{slug}', 'show')->name('blog.single');
    Route::post('post/{postId?}/comment', 'addComment')->name('post.comment');

});

 Route::controller(BookingController::class)->group(function(){
     Route::get('/booking/confirmation', 'confirmation')->name('booking.thankyou');
    // Route::patch('/booking/accept/{booking_id}', 'accept')->name('booking.accept');
    Route::get('/booking/{booking_id?}', 'show')->name('booking.show');
     Route::patch('/booking/{booking}', 'delete')->name('booking.destroy');
    // routes/web.php
    Route::get('/get-accepted-bookings', 'getAcceptedBookings');

    Route::post('/bookings','store')->name('booking.create');
 });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });


Route::get('send-mail', function () {



    $details = [

        'title' => 'Mail from test',

        'body' => 'This is for testing email using smtp'

    ];



    Mail::to('israelpadonu13@gmail.com')->send(new \App\Mail\MyTestMail($details));




    dd("Email is Sent.");

});
