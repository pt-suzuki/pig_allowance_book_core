<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        
    }

    protected function authenticate($request, array $guards)
    {
        //$request->headers->set("Authorization",$request->headers->get("AuthorizationSub"));

        parent::authenticate($request, $guards);
    }
}
