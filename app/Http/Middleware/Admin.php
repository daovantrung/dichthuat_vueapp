<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Auth::user() == null) {
        //     return response()->json([
        //         'type' => 'not-logged',
        //         'msg' => 'Please log in to access this page'
        //     ]);
        // }
        // elseif(Auth::user()->role_type !== 'administrator') {
        //     return response()->json([
        //         'type' => 'user-logged',
        //         'msg' => 'Only administrative accounts are authorized. Go back & sign in as admin'
        //     ]);
        // }
        var_dump(Auth::user());
        return $next($request);
    }
}
