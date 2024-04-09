<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/', [\App\Http\Controllers\Front\WelcomeController::class,'index'])->name('front.welcome');

    Route::get('about-us', [\App\Http\Controllers\Front\AboutController::class,'index'])->name('front.about');


    Route::get('contact-us', [\App\Http\Controllers\Front\ContactController::class,'index'])->name('front.contact');
    Route::get('contact/create', [\App\Http\Controllers\Front\ContactController::class,'create'])->name('front.contact.create');
    Route::post('contact', [\App\Http\Controllers\Front\ContactController::class,'store'])->name('front.contact.store');



    Route::get('our-team', [\App\Http\Controllers\Front\TeamController::class,'index'])->name('front.team');

    Route::get('latest-news', [\App\Http\Controllers\Front\NewsController::class,'index'])->name('front.news');

    Route::get('our-blog', [\App\Http\Controllers\Front\BlogController::class,'index'])->name('front.blog');

    Route::get('/login', [\App\Http\Controllers\Front\LoginController::class,'index'])->name('front.login');

    Route::get('/register', [\App\Http\Controllers\Front\RegisterController::class,'index'])->name('front.register');

    Route::get('/matches', [\App\Http\Controllers\Front\MatchController::class,'index'])->name('front.match');
