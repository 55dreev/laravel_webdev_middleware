<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckAge; // Import CheckAge middleware

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

    // If age is less than 18, log the access denied and redirect
    if ($age < 18) {
        // Log access denied with the username only once
        $logData = sprintf(
            "[%s] Access Denied - Username: %s\n",
            now()->toDateTimeString(),
            $username
        );

        // Log access denied details in log.txt file
        if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
            \Log::error('Failed to write to log.txt');
        }

        return redirect('/access-denied');
    }

    // Log successful username after validation
    $logData = sprintf(
        "[%s] Access Granted - Username: %s\n",
        now()->toDateTimeString(),
        $username // Log the username for successful access
    );

    // Attempt to log the user request details in log.txt file
    if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
        \Log::error('Failed to write to log.txt');
    }

    // Return the user view with the username and age
    return view('user', ['username' => $username, 'age' => $age]);
});



// Route to handle user logout
Route::get('/logout', function () {
    // Clear the username from session
    Session::forget('username');

    // Redirect to the homepage or login page
    return redirect('/');
});

// Group routes that require age validation
Route::middleware([CheckAge::class])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
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

    return view('access-denied'); // Ensure this view exists
});
