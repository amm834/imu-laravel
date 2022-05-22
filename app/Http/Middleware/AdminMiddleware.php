<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('admin')) {
            if (session()->get('admin.role') === 'admin') {
                redirect()->route('admin.dashboard');
                return $next($request);
            }

            if (session()->get('admin.role') === 'student') {
                redirect()->route('student.dashboard');
                return $next($request);
            }
        } else {
            abort(403);
        }
    }
}
