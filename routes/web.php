<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/AudioTherapy', function () {
    return view('service.audioTherapy');
});

Route::get('/ReadTherapy', function () {
    return view('service.readingTherapy');
});

Route::get('/TalkTherapy', function () {
    return view('service.talkingTherapy');
});

Route::get('/SpiritualTherapy', function () {
    return view('service.spirituality');
});

Route::get('/ChildTherapy', function () {
    return view('service.childTherapy');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');

Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'hadleGoogleCallback'])->name('google.callback');
