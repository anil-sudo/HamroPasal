<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleAppearance
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}