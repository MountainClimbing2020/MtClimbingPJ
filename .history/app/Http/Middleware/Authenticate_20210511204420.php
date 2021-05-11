<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

public function handle($request, Closure $next, $guard = null)
    {
    if (Auth::guard($guard)->guest()) {
        if ($request->ajax() || $request->wantsJson()) {
            return response('Unauthorized.', 401);
    } else {
  return redirect()->route('user.signin'); // ←修正
  }
  }

  return $next($request);
  }
