<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request, $guard)
    {
        if (! $request->expectsJson()) {
            //  if($guard == "web")
            //  return route('test');
            return route('login');
        }
    }
}
