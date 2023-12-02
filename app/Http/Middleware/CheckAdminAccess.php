<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminAccess
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::utilisateur()->isAdmin()) {
            return redirect('/');
        }

        return $next($request);
    }
}
