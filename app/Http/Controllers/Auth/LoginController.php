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
        return view('login.Log in.login'); // تأكد من صحة مسار ملف login.blade.php
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
            $user = Auth::user();
            
            // تحقق من دور المستخدم
            if ($user->role_id === 1) {
                // افترض أن الدور 1 هو للدور العادي
                return redirect()->intended('/home');
            } elseif ($user->role_id === 2 || $user->role_id === 3) {
                // افترض أن الأدوار 2 و 3 هي للأدمن والسوبر أدمن
                return redirect()->intended('/admin');
            }

            // التوجيه الافتراضي إذا لم يتطابق أي من الأدوار
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'بيانات تسجيل الدخول غير صحيحة',
        ]);
    }
}
