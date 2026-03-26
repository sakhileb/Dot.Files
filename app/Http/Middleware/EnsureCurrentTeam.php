<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureCurrentTeam
{
    /**
     * Ensure the authenticated user has a current team set.
     * Users registered before the switchTeam fix may have current_team_id = null.
     * This middleware auto-recovers by switching to their personal team.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && is_null($user->current_team_id)) {
            $personalTeam = $user->personalTeam();

            if ($personalTeam) {
                $user->switchTeam($personalTeam);
            }
        }

        return $next($request);
    }
}
