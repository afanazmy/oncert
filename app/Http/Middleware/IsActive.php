<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Alert;

class IsActive
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
        if (!Auth::user()->is_active) {
            Auth::logout();
            Alert::error('Error', 'Account Anda di NONAKTIFKAN, harap hubungi Sekertaris atau Sekjend');
            return redirect()->back();
        } else {
            return $next($request);
        }
    }
}
