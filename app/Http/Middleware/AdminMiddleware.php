<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->expectsJson()) {

            // kalau akses admin
            if (!auth()->guard('admins')->check()) {
                return redirect()->route('admin.login'); // ✅ benar
            }

            // default user
           return $next($request); // kalau nanti ada user login
        }
    }
}
