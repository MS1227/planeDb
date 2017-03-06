<?php

namespace App\Http\Middleware;

use Closure;

class mustBeAdmin
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
        $user = $request->user();


        if($user && $user->name == 'Matt Schnider') {

            return $next($request);
        }

        abort(404, 'no way');

    }
}
