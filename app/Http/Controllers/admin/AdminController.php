<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // عرض نموذج تسجيل مستخدم جديد
    public function showRegistrationForm()
    {
        return view('admin.userss');
    }

    // التحقق من صحة البيانات
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'number' => ['required', 'string', 'max:20', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // إنشاء مستخدم جديد
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'role_id' => 1, // تأكد من صحة قيمة role_id حسب متطلباتك
        ]);
    }

    // معالجة تقديم نموذج تسجيل مستخدم جديد
    public function store(Request $request)
    {
        // التحقق من صحة البيانات
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|string|max:20|unique:users,number',
            'address' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // إنشاء المستخدم
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'role_id' => 1, // تأكد من صحة قيمة role_id حسب متطلباتك
        ]);

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'User created successfully!');
    }

    // عرض نموذج تعديل مستخدم
    public function edit($id)
    {
        $user = User::findOrFail($id); // Retrieve the user or fail if not found
        return view('admin.edituser', compact('user')); // Pass the user data to the view
    }
    
    // معالجة تقديم نموذج تعديل مستخدم
    public function update(Request $request, $id)
    {
        // Validate the data
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'number' => 'required|string|max:20|unique:users,number,' . $id,
            'address' => 'required|string|max:255',
            'password' => 'nullable|string|confirmed|min:8',
        ]);
    
        $user = User::findOrFail($id);
    
        // Update user data
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'number' => $data['number'],
            'address' => $data['address'],
            'password' => $data['password'] ? Hash::make($data['password']) : $user->password,
        ]);

        // Redirect with success message
        return redirect()->route('admin.edituser', $id)->with('success', 'User updated successfully!');
    }

    // عرض قائمة المستخدمين
    public function showUsers()
    {
        // جلب جميع المستخدمين
        $users = User::all();
        

        // عرض البيانات في العرض showuser.blade.php
        return view('admin.showuser', compact('users'));
    }
}
