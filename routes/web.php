<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckAge; // Import CheckAge middleware
use App\Http\Middleware\LogRequests; // Import LogRequests middleware

// Route to display the login page
Route::get('/', function () {
    if (Session::has('username') && Session::get('username') !== 'Guest') {
        return redirect('/user');
    }
    return view('register');
});

// Route to display the registration page
Route::get('/login', function () {
    return view('login');
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

    // Retrieve age and verification status
    $age = Session::get('age');
    $verificationStatus = Session::get('verificationStatus', 'Not Verified');

    // Return the user view with the username and verification status
    return view('user', ['username' => $username, 'age' => $age, 'verificationStatus' => $verificationStatus]);
});

// Route to handle user login or registration submission
Route::post('/user', function () {
    // Get the username and age from the request
    $username = request()->input('username', 'Guest');
    $age = request()->input('age'); // Retrieve the age input from the form

    // Validate username to ensure it only contains alphabetic characters
    if (!preg_match('/^[A-Za-z]+$/', $username)) {
        $username = 'Guest'; 
    }

    // Store the username and age in the session
    Session::put('username', $username);
    Session::put('age', $age);  // Store age in session

    // Set verification status based on age
    $verificationStatus = ($age >= 21) ? 'Verified' : 'Not Verified';
    Session::put('verificationStatus', $verificationStatus); // Store verification status in session

    // Redirect after login or registration
    return redirect('/user');
});

// Route to handle user logout
Route::get('/logout', function () {
    // Clear the username from session
    Session::forget('username');
    Session::forget('age'); // Clear age from session
    Session::forget('verificationStatus'); // Clear verification status

    // Redirect to the homepage or login page
    return redirect('/');
});

// Group routes that require age validation and logging
Route::middleware([LogRequests::class, CheckAge::class])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/user', function () {
        // Get the username from the session
        $username = Session::get('username', 'Guest');
    
        // Retrieve age and verification status
        $age = Session::get('age');
        $verificationStatus = Session::get('verificationStatus', 'Not Verified'); // Default value if not set
    
        // Return the user view with the username and verification status
        return view('user', ['username' => $username, 'age' => $age, 'verificationStatus' => $verificationStatus]);
    });
});

// Route to handle when access is denied
Route::get('/access-denied', function () {
    // Get the username from the session
    $username = Session::get('username', 'Guest');

    // Log the access denied request with the username only once
    $logData = sprintf(
        "[%s] Access Denied - Username: %s\n",
        now()->toDateTimeString(),
        $username // Include the username in the log
    );

    // Attempt to log the access denied details in log.txt file
    file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

    // Clear the username and age from the session
    Session::forget('username');
    Session::forget('age');

    return view('access-denied'); 
});

// Route to handle "Continue as Guest" link
Route::get('/guest', function () {
    // Store 'Guest' in session
    Session::put('username', 'Guest');

    // Redirect to user page
    return redirect('/user');
});
