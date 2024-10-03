<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username = $request->session()->get('username', 'Guest');
        $ipAddress = $request->ip();
        $age = $request->session()->get('age', 'Unknown'); 
        $verificationStatus = $request->session()->get('verificationStatus', 'Not Verified');

        // Prepare log data with timestamp, HTTP method, full URL, and username
        $logData = sprintf(
            "[%s] %s %s - Username: %s, IP: %s, Age: %s, Verification Status: %s\n",
            now()->toDateTimeString(), // Time
            $request->method(), // HTTP method (GET, POST, etc.)
            $request->fullUrl(), // Full URL of the request
            $username,
            $ipAddress, 
            $age, 
            $verificationStatus 
        );

        // Check if the user is accessing the login route
        if ($request->is('/user') && $request->method() === 'POST') {
            // Set verification status based on age
            $verificationStatus = ($age >= 21) ? 'Verified' : 'Not Verified';

            // Log entry for successful login
            $logData = sprintf(
                "[%s] Access Granted - IP: %s, Username: %s, Age: %s, Verification Status: %s\n",
                now()->toDateTimeString(), // Time
                $ipAddress, // User's IP address
                $username, // Username from the session
                $age, // Age from the session
                $verificationStatus // Correct verification status
            );
        }

        // Check if access is denied (you can adjust the condition based on your actual access denial logic)
        if ($request->is('/access-denied')) {
            // Log entry for access denied
            $logData = sprintf(
                "[%s] Access Denied - IP: %s, Username: %s, Age: %s\n",
                now()->toDateTimeString(), // Time
                $ipAddress, // User's IP address
                $username, // Username from the session
                $age // Age from the session
            );
        }

        // Attempt to log the request details in log.txt file
        if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
            // Log an error message if writing to the log file fails
            \Log::error('Failed to write to log.txt');
        }

        // Proceed with the next middleware/handler in the stack
        return $next($request);
    }
}
