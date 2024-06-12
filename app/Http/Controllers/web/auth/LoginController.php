<?php

namespace App\Http\Controllers\web\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function login()
    {
        return view('page.main.auth.login');
    }

    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            dd(true);
            $request->session()->regenerate();
            return auth()->user()->hasVerifiedEmail()
                ? redirect()->route('dashboard')
                : redirect()->route('dashboard')->withErrors(['email' => 'Пожалуйста, привяжите эл. почту']);
        }else{
            return back()->withErrors('Неверный логин или пароль');
        }
    }
}
