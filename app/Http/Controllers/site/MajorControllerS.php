<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\doctors;
use App\Models\majors;
use Illuminate\Http\Request;
use Route;

class MajorControllerS extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      // $doctors = doctors::orderBy('id', 'desc')->limit(2)->get();
      $majors = majors::orderBy('id', 'desc')->get();

   
               return view('web.site.pages.majors.index',compact('majors'));
 
     }
}

