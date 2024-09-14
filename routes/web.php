<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    $username = request()->input('username', 'Guest');
    
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    return view('user', ['username' => $username]);
});

Route::post('/user', function () {
    $username = request()->input('username', 'Guest');
    
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    return view('user', ['username' => $username]);
});
