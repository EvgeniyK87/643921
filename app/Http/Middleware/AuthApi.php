<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthApi
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
        
        $token = $request->query('token');

        if (empty($token)) {
            $token = $request->input('api_token');
        }

        if (empty($token)) { 
            $token = $request->bearerToken();
        }

        $user = \App\Models\User::where('api_token', $token)->first();

        if (empty($user->id)) {
            return response()->json(["message" => "Token not found"], 403);
        }

        return $next($request);
    }
}
