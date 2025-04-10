<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Main\City;
use App\Models\Main\Division;
use App\Models\Main\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        $divisions = City::arrayCollapse('divisions');
        return view('pages.main.auth.registration', compact('divisions'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'last_name'     => ['nullable',     'string',               'max:255'],
            'first_name'    => ['required',     'string',               'max:255'],
            'middle_name'   => ['nullable',     'string',               'max:255'],
            'full_name'     => ['required',     'string',               'max:255'],
            'phone'         => ['nullable',     'string',   'min:10',   'max:255'],
            'email'         => ['required',     'email',    'min:4',    'max:255', 'unique:' . User::getTableName() . ',email'],
            'login'         => ['required',     'string',   'min:4',    'max:255'],
            'password'      => ['required',     'string',   'min:4',    'max:255', 'confirmed'],
            'division_id'   => ['required',     'integer',  'exists:' . Division::getTableName() . ',id'],
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);
        event(new Registered($user));

        return redirect()->route('dashboard');
    }
    public function login()
    {
        return view('pages.main.auth.login');
    }
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors('Неверный логин или пароль');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
