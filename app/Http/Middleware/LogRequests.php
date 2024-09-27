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
        $logData = sprintf(
            "[%s] %s %s\n",
            now()->toDateTimeString(), //for time
            $request->method(), //form method (get, post, etc)
            $request->fullUrl() //url
        );

        // Log the request details in the log.txt file
        file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);

        return $next($request);
    }
}
