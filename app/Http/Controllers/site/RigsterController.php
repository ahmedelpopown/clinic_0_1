<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\site\RigsterRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
 

class RigsterController extends Controller
{
   public function show()
   {
      return view('web.site.auth.register');
   }

   public function register(RigsterRequest $request): RedirectResponse
   {
      $data = $request->validated();
      // dd($data);
      if ($request->input('type') == 'doctor')
         $data['is_doctor'] = true;
      if ($request->input('type') == 'Patient')
         $data['is_Patient'] = true;
      $data['password'] = Hash::make($request->input('password'));
      $user = User::create($data);


      Auth::login($user);
      return redirect()->route('home');
   }
}
