<?php

namespace App\Http\Controllers\web\auth;

use App\Models\Main\Main_User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController
{
    public function notice(){
        return view('page.main.auth.verify-email');
    }

    public function send(Request $request){
        $request->validate([
            'email' => ['required', 'email', 'unique:main__users'],
        ]);
        auth()->user()->email = $request->email;
        auth()->user()->email_verified_at = null;
        auth()->user()->save();
        auth()->user()->sendEmailVerificationNotification();
        return redirect()->route('dashboard')->with(['message' => 'Сообщение отправлено на указанный email']);
    }

    public function verify(EmailVerificationRequest $request, Main_User $user){
        $request->fulfill();
        return redirect()->route('dashboard')->with(['message' => 'Email успешно подтвержден']);
    }
}
