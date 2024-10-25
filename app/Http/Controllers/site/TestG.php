<?php

namespace App\Http\Controllers\site;

use App\Events\OrderCreatEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestGRequest;
use Auth;
 
class TestG extends Controller
{
 public function index(){
 
    return view('web.test');
     
 }
 
 
 public function show(TestGRequest $request){
 
   $data=$request->validated();
 
      if (Auth::guard('web')->attempt($data)) {
 
         return redirect()->intended('clinic/home');  
     }

     // إذا فشلت عملية تسجيل الدخول
     return back()->withErrors([
         'email' => 'invalid email or password',
     ]);
  
   //  return view('web.sit.auth.login');
   //  dd( $request);
   // Auth::guard('web')->logout();

 }

}
