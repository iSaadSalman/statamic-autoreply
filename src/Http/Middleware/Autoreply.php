<?php

namespace ISaadSalman\StatamicAutoreply\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;

class Autoreply
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        return $response;
    }

}