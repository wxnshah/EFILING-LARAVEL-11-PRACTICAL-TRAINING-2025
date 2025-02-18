<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\AdminServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class Admin
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

            if ($userLevel == 1) {
                app()->register(AdminServiceProvider::class);
                return $next($request);
            } else {
                // Redirect unauthorized authenticated users
                return redirect()->route('Dashboard')->with('unauthorized', 'No Access!');
            } 

        }

        // Redirect guests to the login page
        return redirect()->route('login');
    }
}
