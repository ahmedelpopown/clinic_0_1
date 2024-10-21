<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Session;

class LogoutControllerAdmin extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         Session::flush();
         Auth::logout();
         return redirect()->route('admin.auth.login.show');
    }
}
