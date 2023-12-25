<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\VerificationController;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'check.user.type:0'])->group(function () {
    // Route cho Admin
    Route::get('/adm', function () {
        return view('admin');
    });
});

Route::middleware(['auth', 'check.user.type:1'])->group(function () {
    Route::get('/giaovien', function () {
        return view('giaovien');
    });


});


Route::middleware(['auth', 'check.user.type:1,2'])->group(function () {
    Route::get('/hocsinh', function () {
        return view('hocsinh');
    });
});

// Các route không yêu cầu xác thực
Route::get('/', function () {
    return view('pricing.index');
});

// Trong file routes/web.php
Route::get('/verify-email/{token}', [VerificationController::class, 'verify'])->name('verify.email');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
