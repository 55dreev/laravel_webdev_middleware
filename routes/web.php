<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('resources/views/gallery.blade.php', function () {
    return view('gallery');
});

Route::get('resources/views/review.blade.php', function () {
    return view('review');
});

Route::get('resources/views/contact.blade.php', function () {
    return view('contact');
});

Route::get('/user', function () {
    $username = request()->input('username', 'Guest');
    
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    return view('user', ['username' => $username]);
});