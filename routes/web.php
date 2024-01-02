<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\EmailVerificationController;
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
Route::group(['prefix' => 'laravel-filemanager', 'middleware'=> ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware(['auth', 'check.user.type:0'])->group(function () {
    ///admin
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        Route::get('/news', [NewsAdminController::class, 'index'])->name('newsAdmin.index');

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
    return view('pages.index');
});

// Trong file routes/web.php
Route::get('/verify-email/{token}', [VerificationController::class, 'verify'])->name('verify.email');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');







Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
