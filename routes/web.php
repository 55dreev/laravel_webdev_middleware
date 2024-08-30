<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('resources/views/welcome', function () {
    $username = request('username');
    return view('welcome', ['username' => $username]);
});

Route::get('resources/views/gallery', function () {
    $username = request('username');
    return view('gallery', ['username' => $username]);
});

Route::get('resources/views/review', function () {
    $username = request('username');
    return view('review', ['username' => $username]);
});

Route::get('/user', function () {
    $username = request('username');

    // If the username is provided, check if it contains only alphabetic characters
    if ($username && !preg_match('/^[A-Za-z]+$/', $username)) {
        return redirect('/')->with('error', 'Username must contain only alphabetic characters.');
    }

    return view('welcome', ['username' => $username]);
});


