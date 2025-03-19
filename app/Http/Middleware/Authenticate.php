<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
/**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            // Check if the customer guard is being used
            $guard = $this->auth->guard('customer');
            $middleware = $request->route() ? $request->route()->middleware() : [];

            if ($guard->check() || in_array('auth:customer', $middleware)) {
                return '/account'; // Redirect to your customer login page
            }

            // Fallback for other guards (e.g., default 'web' guard)
            return route('login', [], false) ?: '/login';
        }

        return null;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string[]  ...$guards
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, \Closure $next, ...$guards): Response
    {
        $this->authenticate($request, $guards);

        return $next($request);
    }
}
