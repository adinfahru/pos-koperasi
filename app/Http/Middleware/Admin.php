<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user's role is either 'admin' or 'manager'
        if (Auth::user()->role !== 'admin' && Auth::user()->role !== 'manager') {
            return redirect('dashboard');
        } 

        return $next($request);
    }
}

