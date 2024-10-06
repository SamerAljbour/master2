<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    // دالة تسجيل الخروج
    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('home'); // إعادة التوجيه إلى الصفحة الرئيسية بعد تسجيل الخروج
    }
}
