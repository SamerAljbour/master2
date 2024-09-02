<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\UserDashboardController; // إضافة وحدة تحكم لوحة القيادة للمستخدم
use App\Http\Controllers\HomeController; // إضافة وحدة تحكم الصفحة الرئيسية إذا كانت موجودة

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
    return view('frontend.home'); // تصحيح العرض لملف index.blade.php
})->name('home');

// صفحة المدونة الفردية
Route::get('/single-blog', function () {
    return view('frontend.single-blog'); // تصحيح العرض لملف single-blog.blade.php
})->name('single-blog');

// صفحة الخدمة
Route::get('/service', function () {
    return view('frontend.service'); // تصحيح العرض لملف service.blade.php
})->name('service');

// تفاصيل الخدمة
Route::get('/service-details', function () {
    return view('frontend.service_details'); // تصحيح العرض لملف service_details.blade.php
})->name('service-details');

// صفحة رئيسية أخرى
Route::get('/main', function () {
    return view('frontend.main'); // تصحيح العرض لملف main.blade.php
})->name('main');

// عناصر إضافية
Route::get('/elements', function () {
    return view('frontend.elements'); // تصحيح العرض لملف elements.blade.php
})->name('elements');

// صفحة الاتصال
Route::get('/contact', function () {
    return view('frontend.contact'); // تصحيح العرض لملف contact.blade.php
})->name('contact');

// صفحة المدونة
Route::get('/blog', function () {
    return view('frontend.blog'); // تصحيح العرض لملف blog.blade.php
})->name('blog');

// صفحة حول
Route::get('/about', function () {
    return view('frontend.about'); // تصحيح العرض لملف about.blade.php
})->name('about');




// Route for displaying the login form
Route::get('/login', function () {
    return view('login\Log in\login'); // Corrected path for login.blade.php
})->name('login');

// Route for handling login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route for displaying the registration form
Route::get('/register', function () {
    return view('login.Register.register'); // Corrected path for register.blade.php
})->name('register');

// Route for handling registration form submission
Route::post('/register', [RegisteredUserController::class, 'register'])->name('register.post');



// صفحة استعادة كلمة المرور
// Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// // لوحة القيادة للمستخدم (تأكد من أن المستخدم مسجل دخول)
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
// });





Route::get('/admin', function () {
    return view('admin.home'); // تصحيح العرض لملف about.blade.php
});


//user name in dashbord 
use App\Http\Controllers\Auth\UserProfileController;
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
