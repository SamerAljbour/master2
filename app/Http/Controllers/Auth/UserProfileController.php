<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    // عرض صفحة ملف المستخدم
    public function show()
    {
        // جلب المستخدم المسجل حاليًا
        $user = Auth::user();

        // تمرير بيانات المستخدم إلى العرض
return view('frontend.profile.profile', ['user' => $user]);
    }
}
