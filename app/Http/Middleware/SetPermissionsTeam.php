<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetPermissionsTeam
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('permission.teams') && ($team = (auth()->user()?->currentTeam))) {
            setPermissionsTeamId($team->id);
        }

        return $next($request);
    }
}
