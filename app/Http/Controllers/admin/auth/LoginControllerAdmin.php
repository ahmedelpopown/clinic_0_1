<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginControllerAdmin extends Controller
{
 public function show(){
    return view('web.admin.auth.login');
 }
 public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard/admin');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
