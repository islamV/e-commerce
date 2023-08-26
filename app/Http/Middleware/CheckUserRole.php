<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {


        $user = auth()->user();
            if ($user->profile->role === $role) {
                return $next($request);
            }


        abort(403, 'Access denied.');
    }
}
