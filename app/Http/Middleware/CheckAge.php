<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckAge
{
    public function handle($request, Closure $next)
{
    // Retrieve the age from the session
    $age = Session::get('age');

    // Check the age and set the verification status
    if ($age < 18) {
        return redirect('/access-denied');
    } elseif ($age >= 21) {
        Session::put('verificationStatus', 'Verified');
    } else {
        Session::put('verificationStatus', 'Unverified');
    }

    return $next($request);
}

}
