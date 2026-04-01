<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectUnverifiedUsers
{
    /**
     * Redirect authenticated but unverified users to the email verification screen.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && ! $user->hasVerifiedEmail() && ! $request->routeIs('verification.*')) {
            return redirect()->route('verification.notice');
        }

        return $next($request);
    }
}
