<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('level')) {
            redirect()->route('login');
            echo "chua dang nhap";
            exit();
        }
        return $next($request);
    }
}
