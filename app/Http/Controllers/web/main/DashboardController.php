<?php

namespace App\Http\Controllers\web\main;

use App\Models\Main\Main_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function index(){
        $user = auth()->user();
        $respone = view('page.main.dashboard.index', compact('user'));
        if(!$user->email){
            $respone->withErrors(['email' => 'Пожалуйста, привяжите эл. почту']);
        }
        return $respone;
    }

    public function update(Request $request){
        $validated = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'email' => ['nullable', 'email', 'unique:main__users'],
            'phone' => ['nullable', 'regex:/8[0-9]{10}/'],
            'dop_phone' => ['nullable'],
        ]);
        // if (auth()->user()->email != $validated['email']) {

        // }

        Main_User::unguard();
        auth()->user()->update($validated);
        Main_User::reguard();
        return back();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
