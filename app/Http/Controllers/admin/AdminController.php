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
            'role_id' => $data['role_id'] ?? 1, // استخدام قيمة افتراضية إذا لم يتم تقديمها
        ]);
    }

    // معالجة تقديم نموذج تسجيل مستخدم جديد
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'number' => 'required|string|max:20|unique:users,number',
            'address' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:8',
            'role_id' => 'nullable|exists:roles,id', // جعل role_id غير إجباري إذا لزم الأمر
        ]);

        $this->create($data);

        return redirect()->back()->with('success', 'User created successfully!');
    }

    // عرض نموذج تعديل مستخدم
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }
    
// معالجة تقديم نموذج تعديل مستخدم
public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'number' => 'required|string|max:20|unique:users,number,' . $id,
        'address' => 'required|string|max:255',
        'password' => 'nullable|string|confirmed|min:8',
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name' => $data['name'],
        'email' => $data['email'],
        'number' => $data['number'],
        'address' => $data['address'],
        'password' => isset($data['password']) ? Hash::make($data['password']) : $user->password,
    ]);

    return redirect()->route('admin.edituser', $id)->with('success', 'User updated successfully!');
}

    // عرض قائمة المستخدمين
    public function showUsers()
    {
        $users = User::all();
        return view('admin.showuser', compact('users'));
    }

    public function createUser()
    {
        return view('admin.createuser');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'number' => 'nullable|string|max:20', // إذا كنت تريد حقل الهاتف غير إجباري
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id', // افترض أن هناك جدولاً للأدوار
        ]);

        $this->create($request->all());

        return redirect()->route('admin.showusers')->with('success', 'User created successfully.');
    }

    // عرض قائمة المستخدمين المحذوفين
    public function showTrashedUsers()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.trashedusers', compact('users'));
    }

    // حذف ناعم لمستخدم
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->back()->with('success', 'User soft deleted successfully.');
    }

    // حذف نهائي لمستخدم
    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();
        
        return redirect()->back()->with('success', 'User permanently deleted successfully.');
    }

    // استعادة مستخدم محذوف
    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();
        
        return redirect()->route('admin.trashedusers')->with('success', 'User restored successfully.');
    }
}
