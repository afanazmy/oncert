<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Alert;

class IsAdmin
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
        if (Auth::user()->division_id == null) {
            return $next($request);
        } else {
            Alert::error('Unauthorized', 'Anda tidak memiliki akses');
            return redirect()->route('user.index');
        }

    }
}
