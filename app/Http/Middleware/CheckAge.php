<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        $age = Session::get('age');

        // Check if the age is present and below 18
        if ($age && $age < 18) {
            // Redirect to the access-denied page if age is below 18
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
