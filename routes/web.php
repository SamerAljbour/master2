<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController; // استيراد AdminController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// الصفحة الرئيسية
Route::get('home', function () {
    return view('frontend.home');
})->name('home');

// صفحات أخرى
Route::get('/single-blog', function () {
    return view('frontend.single-blog');
})->name('single-blog');

Route::get('/service', function () {
    return view('frontend.service');
})->name('service');

Route::get('/service-details', function () {
    return view('frontend.service_details');
})->name('service-details');

Route::get('/main', function () {
    return view('frontend.main');
})->name('main');

Route::get('/elements', function () {
    return view('frontend.elements');
})->name('elements');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// مسارات تسجيل الدخول والتسجيل
Route::get('/login', function () {
    return view('login.Log in.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('login.Register.register');
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'register'])->name('register.post');

// لوحة تحكم المدير
Route::prefix('admin')->name('admin.')->group(function () {
    // الصفحة الرئيسية للمدير
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    // مسارات إدارة المستخدمين
    Route::get('/users', [AdminController::class, 'showUsers'])->name('showUsers');
    Route::get('/users/{id}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('users.register');
    Route::post('/register', [AdminController::class, 'store'])->name('users.store');
});




// Route for handling the user registration form submission
Route::post('/admin/userss', [AdminController::class, 'store'])->name('admin.userss.store');

// Route to show the edit user form
// Route::get('/admin/userss/{id}/edit', [AdminController::class, 'edit'])->name('admin.userss.edit');

// Route to handle the update user form submission
// Route::put('/admin/userss/{id}', [AdminController::class, 'update'])->name('admin.userss.update');

// Route to show the registered users list
// Route::get('/admin/showuser', [AdminController::class, 'showUsers'])->name('admin.showuser');

Route::get('/showuser', function () {
    return view('admin.showuser');
})->name('showuser');

Route::post('/showuser', [AdminController::class, 'showUsers'])->name('admin.showuser');




// // صفحة استعادة كلمة المرور
// Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// // لوحة القيادة للمستخدم (تأكد من أن المستخدم مسجل دخول)
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
// });




// صفحة الملف الشخصي للمستخدم
use App\Http\Controllers\Auth\UserProfileController;
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');

// مسار صفحة إدارة المستخدمين
Route::get('/admin/userss', function () {
    return view('admin.userss');
})->name('userss');

// مسار صفحة تحرير المستخدم
Route::get('/edituser', function () {
    return view('admin.edituser');
})->name('edituser');

// // مسار صفحة عرض المستخدمين
// Route::get('/showuser', function () {
//     return view('admin.showuser');
// })->name('showuser');

Route::get('/showuser', [AdminController::class, 'showUsers'])->name('showuser');
