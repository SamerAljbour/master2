<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // عرض نموذج تسجيل الدخول
    public function showLoginForm()
    {
        return view('login\Log in\login'); // تعديل المسار لملف login.blade.php
    }

    // معالجة تسجيل الدخول
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home'); // إعادة التوجيه إلى الصفحة الرئيسية بعد تسجيل الدخول
        }

        return back()->withErrors([
            'email' => 'بيانات تسجيل الدخول غير صحيحة',
        ]);
    }
}
