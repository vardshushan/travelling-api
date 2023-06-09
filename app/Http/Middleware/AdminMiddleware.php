<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->user() || $request->user() && $request->user()->role !== 'admin') {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }
        return $next($request);
    }

}
