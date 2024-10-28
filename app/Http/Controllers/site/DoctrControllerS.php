<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\doctors;
 use App\Models\Majors;
use Illuminate\Http\Request;
use Route;

class DoctrControllerS extends Controller
{
    /** 
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      $doctors = doctors::orderBy('id', 'desc')->get();
  
      $majors = Majors::get();
 
         
               return view('web.site.pages.doctors.index',compact('doctors'));
 

    }
}
