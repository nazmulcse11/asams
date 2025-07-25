<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AnyAuth
{
    protected $guards = ['admin', 'employee', 'agent', 'buyer'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        foreach ($this->guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return $next($request);
            }
        }

        // If no user is logged in with any guard
        // Optional: Redirect based on URL prefix
        $prefix = $request->segment(1); // e.g., 'admin', 'agent', etc.

        if (in_array($prefix, $this->guards)) {
            return redirect()->route("{$prefix}.login");
        }

        // Default fallback if no valid prefix
        return abort(403, 'Unauthorized');
    }
}
