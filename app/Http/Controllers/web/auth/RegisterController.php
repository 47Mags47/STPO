<?php

namespace App\Http\Controllers\web\auth;

use App\Models\Main\Main_City;
use App\Models\Main\Main_Division;
use App\Models\Main\Main_User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function create()
    {
        $cityes = Main_City::get();
        $divisions = Main_Division::get();
        return view('page.main.auth.register', compact('cityes', 'divisions'));
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'email' => ['required', 'email', 'unique:main__users'],
            'login' => ['required', 'string', 'unique:main__users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'division_id' => ['required', 'integer', 'not_in:0'],
        ]);

        if ($request->city_id != Main_Division::whereKey($validate['division_id'])->get()->first()->city_id) {
            return back()->withErrors('Неверная связка "город - подразделение"');
        }

        $data = array_merge($validate, [
            'password' => Hash::make($validate['password']),
            'nickname' => $validate['middle_name']
                ? ucfirst($validate['last_name']) . ' ' . mb_strtoupper(mb_substr($validate['first_name'], 0, 1)) . '. ' . mb_strtoupper(mb_substr($validate['middle_name'], 0, 1)) . '.'
                : ucfirst($validate['last_name']) . ' ' . mb_strtoupper(mb_substr($validate['first_name'], 0, 1)) . '. ',
        ]);

        Main_User::unguard();
        $user = Main_User::create($data);
        Main_User::reguard();
        Auth::login($user);
        event(new Registered($user));
        return redirect('dashboard')->with(['message' => 'На эл. почту высланно письмо для подтверждения']);
    }
}
