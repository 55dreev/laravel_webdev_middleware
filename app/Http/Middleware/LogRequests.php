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
        // Prepare log data with timestamp, HTTP method, and full URL
        $logData = sprintf(
            "[%s] %s %s\n",
            now()->toDateTimeString(), // Time
            $request->method(), // HTTP method (GET, POST, etc.)
            $request->fullUrl() // Full URL of the request
        );

        // Attempt to log the request details in log.txt file
        if (file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND) === false) {
            // Log an error message if writing to the log file fails
            \Log::error('Failed to write to log.txt');
        }

        // Proceed with the next middleware/handler in the stack
        return $next($request);
    }
}
