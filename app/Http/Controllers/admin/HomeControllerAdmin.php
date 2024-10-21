<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\majors;
use Illuminate\Http\Request;

class HomeControllerAdmin extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      $majors=  majors::orderBy('id','desc')->get();
        return view('web.admin.pages.dashboard');
    }
}
