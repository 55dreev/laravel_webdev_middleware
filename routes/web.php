<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route to display the login page
Route::get('/', function () {
    if (Session::has('username') && Session::get('username') !== 'Guest') {
        return redirect('/user');
    }
    return view('login');
});

// Route to display the registration page
Route::get('/register', function () {
    return view('register');
});

// Route to display the gallery page
Route::get('/gallery', function () {
    return view('gallery');
});

// Route to display the review page
Route::get('/review', function () {
    return view('review');
});

// Route to display the contact page
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/access-denied', function () {
    return view('access-denied');
});

// Route to handle user login or continue as guest
Route::get('/user', function () {
    // Get the username from the request or default to 'Guest'
    $username = request()->input('username', 'Guest');
    
    // Validate username to ensure it only contains alphabetic characters
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    // Store the username in session
    Session::put('username', $username);

    // Return the user view with the username
    return view('user', ['username' => $username]);
});

// Route to handle user login or registration submission
Route::post('/user', function () {
    // Get the username from the request or default to 'Guest'
    $username = request()->input('username', 'Guest');
    
    // Validate username to ensure it only contains alphabetic characters
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    // Store the username in session
    Session::put('username', $username);

    // Return the user view with the username
    return view('user', ['username' => $username]);
});

// Route to handle user logout
Route::get('/logout', function () {
    // Clear the username from session
    Session::forget('username');

    // Redirect to the homepage or login page
    return redirect('/');
});
