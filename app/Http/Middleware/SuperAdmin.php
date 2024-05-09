<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || auth()->user()->role !== 'Super Admin') {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
