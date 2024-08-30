<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('resources/views/gallery', function () {
    return view('gallery');
});

Route::get('resources/views/review', function () {
    return view('review');
});

Route::get('/user', function () {
    $username = request('username');

    // If the username is provided, check if it contains only alphabetic characters
    if ($username && !preg_match('/^[A-Za-z]+$/', $username)) {
        return redirect('/')->with('error', 'Username must contain only alphabetic characters.');
    }

    return view('welcome', ['username' => $username]);
});

