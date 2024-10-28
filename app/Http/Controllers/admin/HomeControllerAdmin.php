<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
 use App\Models\Majors;
 use Illuminate\Http\Request;

class HomeControllerAdmin extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      $majors=  Majors::orderBy('id','desc')->get();
        return view('web.admin.pages.dashboard');
    }
}
