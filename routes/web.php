<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/packages', 'packages')->name('packages');



});

Route::middleware(['auth'])->controller(AdminController::class)->group(function () {
    Route::get('/admin', 'dashboard')->name('admin.dashboard');




});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{slug?}', 'show')->name('blog.single');
 });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


Route::get('send-mail', function () {



    $details = [

        'title' => 'Mail from test',

        'body' => 'This is for testing email using smtp'

    ];



    Mail::to('israelpadonu13@gmail.com')->send(new \App\Mail\MyTestMail($details));




    dd("Email is Sent.");

});
