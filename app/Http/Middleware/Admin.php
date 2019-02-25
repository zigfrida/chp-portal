<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

// this was made when I created the admin middleware
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->userRole() == 'admin') {
            return $next($request);
        }

        return redirect('/');
    }
}
