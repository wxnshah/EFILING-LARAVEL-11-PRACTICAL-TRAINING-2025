<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\StaffServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class Staff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $userLevel = Auth::user()->id_level;

            // dd(Auth::user());
            if (in_array($userLevel, [2, 3, 4, 5])) {
                app()->register(StaffServiceProvider::class);
                return $next($request);
            } else {
                // Redirect unauthorized authenticated users
                return redirect()->route('AdminDashboard')->with('unauthorized', 'No Access!');
            } 

        }

        // Redirect guests to the login page
        return redirect()->route('login');
    }
}
