<?php

use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ContactController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\NewsController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizGroupController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\WebConfigController;
use App\Http\Controllers\Auth\CourseAuthController;
use App\Http\Controllers\Auth\PageController;
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

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware(['auth', 'check.user.type:0'])->group(function () {
    ///admin
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsAdminController::class, 'index'])->name('indexNews');
            Route::get('/create', [NewsAdminController::class, 'create'])->name('newsAdmin.index');
            Route::post('/store', [NewsAdminController::class, 'store'])->name('news.store');
            Route::get('/edit/{id}', [NewsAdminController::class, 'edit'])->name('edit-news');
            Route::post('/news/update/{id}', [NewsAdminController::class, 'update'])->name('news.update');
            Route::post('/news/delete/{id}', [NewsAdminController::class, 'destroy'])->name('news.destroy');
            Route::get('/search', [NewsAdminController::class, 'search'])->name('news.search');
        });
        Route::prefix('student')->group(function () {
            Route::get('/', [StudentController::class, 'index'])->name('student.index');
            Route::post('/{id}/toggle-status', [StudentController::class, 'toggleStatus'])->name('user.toggleStatus');
        });
        Route::prefix('contact')->group(function () {
            Route::get('/', [ContactController::class, 'adminContact'])->name('contact.admin');
            Route::get('/getContactDetails/{id}', [ContactController::class, 'getContactDetails'])->name('contact.getContactDetails');
        });
        //Môn học
        Route::prefix('/subjects')->group(function () { //Môn học
            Route::get('/', [SubjectController::class, 'index'])->name('subjects.index');
            Route::post('/{id}/toggle-status', [SubjectController::class, 'toggleStatus'])->name('subjects.toggleStatus');
            Route::post('/store', [SubjectController::class, 'store'])->name('subjects.store');
            Route::post('/update/{id}', [SubjectController::class, 'update'])->name('subjects.update');
            Route::get('/{id}', [SubjectController::class, 'show'])->name('subjects.show');
            Route::delete('/delete/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
            Route::get('/{subject}/courses', [CourseController::class, 'index'])->name('courses.index');
            Route::get('/{subject}/courses/create', [CourseController::class, 'create'])->name('courses.create');
            Route::post('/{subject}/courses/store', [CourseController::class, 'store'])->name('courses.store');
        });

        Route::prefix('/courses')->group(function () {
            // Routes for Courses
            Route::get('/{course}', [CourseController::class, 'show'])->name('courses.show');
            Route::delete('/delete/{question}', [CourseController::class, 'destroy'])->name('courses.destroy');
            // Routes for Questions
            Route::get('/{course}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
            Route::post('/{course}/questions/store', [QuestionController::class, 'store'])->name('questions.store');
        });

        Route::prefix('/classes')->group(function () {
            Route::get('/', [ClassesController::class, 'index'])->name('classes.index');
            Route::post('/store', [ClassesController::class, 'store'])->name('classes.store');
            Route::post('/update/{id}', [ClassesController::class, 'update'])->name('classes.update');
            Route::post('/{id}/toggle-status', [ClassesController::class, 'toggleStatus'])->name('classes.toggleStatus');
            Route::delete('/delete/{class}', [ClassesController::class, 'destroy'])->name('classes.destroy');
            Route::get('/{id}', [ClassesController::class, 'show'])->name('classes.show');
        });
        Route::prefix('/questions')->group(function () { //Sửa câu hỏi
            Route::get('/{course}/edit/{question}', [QuestionController::class, 'edit'])->name('questions.edit');
            Route::put('/{course}/{question}', [QuestionController::class, 'update'])->name('questions.update');
        });
        Route::prefix('/web_config')->group(function () {
            Route::get('/', [WebConfigController::class, 'index'])->name('webConfig.index');
            Route::post('/update-webConfig', [WebConfigController::class, 'update'])->name('webConfig.update');
        });
        Route::prefix('/lession')->group(function () {
            Route::get('/', [LessonController::class, 'index'])->name('lesson.index');
            Route::get('/create', [LessonController::class, 'create'])->name('lesson.create');
            Route::post('/store', [LessonController::class, 'store'])->name('lessons.store');
            Route::get('/{lesson}/edit', [LessonController::class, 'edit'])->name('lessons.edit');
            Route::put('/update/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
            Route::delete('/delete/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');
        });
    });
});

// Route::middleware(['auth', 'check.user.type:1'])->group(function () {
//     Route::get('/giaovien', function () {
//         return view('giaovien');
//     });
// });


// Route::middleware(['auth', 'check.user.type:1,2'])->group(function () {
//     Route::get('/hocsinh', function () {
//         return view('hocsinh');
//     });
// });

// Các route không yêu cầu xác thực
Route::get('/', [PageController::class, 'index'])->name('home.index');

// Trong file routes/web.php
Route::get('/verify-email/{token}', [VerificationController::class, 'verify'])->name('verify.email');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/logout', [AuthController::class, 'profilelogout'])->name('logout');
//profile
Route::get('/profile/{user}', [AuthController::class, 'profile'])->name('profile');
Route::post('/update-profile/{user}', [AuthController::class, 'update'])->name('update-profile');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change-password');


Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');




Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/detail/{id}', [NewsController::class, 'detail'])->name('news.detail');

Route::prefix('/contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/success', [ContactController::class, 'success'])->name('contact.success');
    Route::post('/postContact', [ContactController::class, 'store'])->name('contact.create');
});

Route::get('{subject}/courses', [CourseAuthController::class, 'index'])->name('home.course');

Route::prefix('/quizz')->group(function () { //Xem và làm câu hỏi
    Route::get('/{course}/questions', [QuestionController::class, 'show'])->name('questions.show');
    Route::post('/{course}/questions/submit', [QuestionController::class, 'submitAnswers'])->name('questions.submit');
});

Route::prefix('/user')->group(function () {
    Route::get('/exam-history', [AuthController::class, 'examHistory'])->name('user.examHistory');
    Route::delete('/exam-history/{id}', [AuthController::class, 'destroy'])->name('examHistory.destroy');
});


Route::get('/default', [ContactController::class, 'default'])->name('default');
