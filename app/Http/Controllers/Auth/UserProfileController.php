<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\InventoryRequest; // استيراد نموذج الطلبات
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    // عرض صفحة ملف المستخدم
    public function show()
    {
        // جلب المستخدم المسجل حاليًا
        $user = Auth::user();

        // جلب الطلبات الخاصة بالمستخدم من نموذج InventoryRequest
        $inventoryRequests = InventoryRequest::where('user_id', $user->id)->get();

        // تمرير بيانات المستخدم والطلبات إلى العرض
        return view('frontend.profile.profile', [
            'user' => $user,
            'inventoryRequests' => $inventoryRequests,
        ]);
    }

    // تحديث معلومات المستخدم
    public function update(Request $request)
    {
        // التحقق من صحة البيانات
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'address' => 'nullable|string|max:255',
            'number' => 'required|string|max:20|unique:users,number,' . Auth::id(),            
        ]);

        // تحديث معلومات المستخدم
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->number = $request->input('number');
        $user->save();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
