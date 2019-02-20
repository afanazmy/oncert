<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class HasFilledForm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->has_filled_form) {
            return redirect()->route('user.index');
        } else {
            return $next($request);
        }
    }
}
