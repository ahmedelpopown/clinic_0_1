<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // dd($request->is('dashboard/*'));
        $rout= $request->is('dashboard/*') ? route('admin.auth.login.show'):route('login.show');
        return $request->expectsJson() ? null :$rout;
    }
}
