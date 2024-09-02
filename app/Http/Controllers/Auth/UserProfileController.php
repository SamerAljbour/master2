<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    // عرض صفحة ملف المستخدم
    public function show()
    {
        
        // تمرير بيانات المستخدم إلى العرض
        return view('user.profile', ['user' => $user]);
    }
}
