<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestGRequest;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginControllerSite extends Controller
{
 public function show(){
    return view('web.site.auth.login');
 }
 public function authenticate(TestGRequest $request): RedirectResponse
    {
         
 $credentials=$request->validated();
   Auth::guard('web')->attempt(['email' => $credentials->email, 'password' => $credentials->password]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/dashboard/admin');
        // }
        if (Auth::guard('web')->check()) {
            // المستخدم الإداري مسجل الدخول
            dd('true');
        } else {
         dd('false');
            // المستخدم الإداري ليس مسجلاً للدخول
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
