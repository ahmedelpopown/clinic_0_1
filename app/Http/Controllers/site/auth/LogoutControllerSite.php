<?php

namespace App\Http\Controllers\site\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;

class LogoutControllerSite extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login.show');
    }
}












/*******************
 * 
 * 
 * 
 * 
 * 
***************** 
10:48

/////////////////

 */