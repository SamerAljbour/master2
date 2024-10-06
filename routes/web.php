<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController; // استيراد AdminController
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

// صفحة الملف الشخصي للمستخدم
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');


Route::get('/form', function () {
    return view('frontend.form');
})->name('frontend.form');

Route::get('/packeg', function () {
    return view('frontend.packeg.packeg');
})->name('frontend.packeg.packeg');

Route::get('/Ocean_Freight', function () {
    return view('frontend.packeg.Ocean_Freight');
})->name('frontend.packeg.Ocean_Freight');





Route::get('/profile', [UserProfileController::class, 'show'])->name('frontend.profile.profile')->middleware('auth');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



// صفحات الأدمن، فقط الأدمن والسوبر أدمن يمكنهم الوصول إليها
Route::middleware(['auth', 'admin:2|3'])->prefix('admin')->name('admin.')->group(function () {
    // الصفحة الرئيسية للمدير
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    // مسارات إدارة المستخدمين
    Route::get('/showuser', [AdminController::class, 'showUsers'])->name('showUsers');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('createuser');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('storeUser');


    Route::get('/edituser/{id}', [AdminController::class, 'edit'])->name('edituser');
    Route::put('/users/{id}', [AdminController::class, 'update'])->name('updateuser');

    Route::get('/users/trashed', [AdminController::class, 'showTrashedUsers'])->name('trashedusers');
    Route::get('/user/{id}/restore', [AdminController::class, 'restore'])->name('restoreuser');
    Route::get('/user/{id}/softdelete', [AdminController::class, 'destroy'])->name('softdeleteuser');
    Route::get('/users/forcedelete/{id}', [AdminController::class, 'forceDelete'])->name('forceDeleteUser');

    Route::post('/logout', [App\Http\Controllers\Admin\AuthenticatedSessionController::class, 'destroy'])->name('logout');

});


                                                                                                                                                           



