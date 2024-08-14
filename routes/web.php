<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'img' => 'profile.png'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Me',
        'nama' => 'Syechan Mochsin Al-thubaiti',
        'img' => 'profile.png'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us'
    ]);
});

