<?php

use App\Http\Controllers\Admin\BasisController;
use App\Http\Controllers\Admin\ChaptersController;
use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentController as AdminDocumentController;
use App\Http\Controllers\Admin\LecturesController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\NewsAdminController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\policyCancellationController;
use App\Http\Controllers\Admin\policyGuaranteeController;
use App\Http\Controllers\Admin\policyLieController;
use App\Http\Controllers\Admin\PolicyPayController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RiviewController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ContactController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\NewsController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\QuestionAuthController;
use App\Http\Controllers\Auth\ResetController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizGroupController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WebConfigController;
use App\Http\Controllers\Auth\CourseAuthController;
use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\Auth\VnpayController;
use App\Http\Controllers\Auth\DocumentController as AuthDocumentController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\VideoController;
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
        Route::get('/banners', [DashboardController::class, 'banner'])->name('banners.index');
        Route::put('/banners/{id}', [DashboardController::class, 'update'])->name('banners.update');
        Route::prefix('teams')->group(function () {
            Route::get('/', [TeamController::class, 'index'])->name('teams.admin');
            Route::get('/create', [TeamController::class, 'create'])->name('teams.create');
            Route::post('/store', [TeamController::class, 'store'])->name('teams.store');
            Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
            Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
            Route::delete('/delete/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
            Route::get('/{id}/detail', [TeamController::class, 'detail'])->name('teams.detail');
        });
        Route::prefix('security')->group(function () {
            Route::get('/', [SecurityController::class, 'index'])->name('index.security');
            Route::post('/update-security', [SecurityController::class, 'update'])->name('security.update');
        });
        Route::prefix('policyPay')->group(function () {
            Route::get('/', [PolicyPayController::class, 'index'])->name('index.pay');
            Route::post('/update-security', [PolicyPayController::class, 'update'])->name('pay.update');
        });
        Route::prefix('guarantee')->group(function () {
            Route::get('/', [policyGuaranteeController::class, 'index'])->name('index.guarantee');
            Route::post('/update-guarantee', [policyGuaranteeController::class, 'update'])->name('guarantee.update');
        });
        Route::prefix('lie')->group(function () {
            Route::get('/', [policyLieController::class, 'index'])->name('index.lie');
            Route::post('/update-lie', [policyLieController::class, 'update'])->name('lie.update');
        });
        Route::prefix('cancellation')->group(function () {
            Route::get('/', [policyCancellationController::class, 'index'])->name('index.cancellation');
            Route::post('/update-cancellation', [policyCancellationController::class, 'update'])->name('cancellation.update');
        });

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
            Route::get('/show/{studentS}', [StudentController::class, 'show'])->name('student.show');
            Route::get('/edit/{studentS}', [StudentController::class, 'edit'])->name('student.edit');
            Route::post('/update-user/{user}', [StudentController::class, 'update'])->name('update-user');
            Route::post('/{id}/toggle-status', [StudentController::class, 'toggleStatus'])->name('user.toggleStatus');
        });
        Route::prefix('contact')->group(function () {
            Route::get('/', [ContactController::class, 'adminContact'])->name('contact.admin');
            Route::get('/getContactDetails/{id}', [ContactController::class, 'getContactDetails'])->name('contact.getContactDetails');
        });
        //Môn học
        Route::prefix('/subjects')->group(function () { //Môn học
            Route::post('/{id}/toggle-status', [SubjectController::class, 'toggleStatus'])->name('subjects.toggleStatus');
            Route::post('/store', [SubjectController::class, 'store'])->name('subjects.store');
            Route::post('/update/{id}', [SubjectController::class, 'update'])->name('subjects.update');
            Route::get('/{id}/subject', [SubjectController::class, 'show'])->name('subjects.show'); //Câu hỏi liên quan
            Route::delete('/delete/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
            Route::get('/{class?}', [SubjectController::class, 'index'])->name('subjects.index');

            //đề bài
            Route::get('/{subject}/courses', [CourseController::class, 'index'])->name('courses.index'); //đề bài liên quan đến môn học
            Route::get('/{subject}/courses/create', [CourseController::class, 'create'])->name('courses.create');
            Route::post('/{subject}/courses/store', [CourseController::class, 'store'])->name('courses.store');
            Route::get('/{subject}/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
            Route::put('/{subject}/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
            Route::delete('subjects/{subject}/courses/{course}', [CourseController::class, 'destroyCourse'])->name('topic.destroy');

            Route::post('/{id}/is_free', [CourseController::class, 'toggleStatus'])->name('courses.toggleStatus');
        });

        //Câu hỏi liên quan đến đề bài
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

        Route::prefix('/introduction')->group(function () {
            Route::get('/', [WebConfigController::class, 'introduction'])->name('introduction.index');
            Route::post('/update-introduction', [WebConfigController::class, 'introductionupdate'])->name('introduction.update');
        });




        Route::prefix('/lession')->group(function () { //Bài học
            Route::get('/create', [LessonController::class, 'create'])->name('lesson.create');
            Route::post('/store', [LessonController::class, 'store'])->name('lessons.store');
            Route::get('/{lesson}/edit', [LessonController::class, 'edit'])->name('lessons.edit');
            Route::put('/update/{lesson}', [LessonController::class, 'update'])->name('lessons.update');
            Route::delete('/delete/{lesson}', [LessonController::class, 'destroy'])->name('lessons.destroy');
            Route::get('/{subject?}', [LessonController::class, 'index'])->name('lesson.index');
        });

        Route::prefix('/chapter')->group(function () { //chương trình học
            Route::get('/create', [ChaptersController::class, 'create'])->name('curriculum.create');
            Route::post('/store', [ChaptersController::class, 'store'])->name('curriculum.store');
            Route::get('/{chapter}/edit', [ChaptersController::class, 'edit'])->name('curriculum.edit');
            Route::put('/update/{chapter}', [ChaptersController::class, 'update'])->name('curriculum.update');
            Route::delete('/delete/{chapter}', [ChaptersController::class, 'destroy'])->name('curriculum.destroy');
            Route::get('/search', [ChaptersController::class, 'search'])->name('curriculum.search');
            Route::get('/{lesson?}', [ChaptersController::class, 'index'])->name('curriculum.index');

        });

        Route::prefix('/subcsription')->group(function () {
            Route::get('/', [SubscriptionController::class, 'indexAdmin'])->name('subscriptions.indexAdmin');
            Route::get('/subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
            Route::post('/subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');
            Route::get('/edit/{subscription}', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
            Route::put('/update/{subscription}', [SubscriptionController::class, 'update'])->name('subscriptions.update');
            Route::delete('delete/{subscription}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');
        });

        Route::prefix('/detailSub')->group(function () {
            Route::get('/{subscription}', [SubscriptionController::class, 'detalSub'])->name('detailSub.index');
            Route::post('/add/{subscription}', [SubscriptionController::class, 'storeDetailSub'])->name('detailSub.store');
            Route::put('/update/{detailSubscription}', [SubscriptionController::class, 'updateDetailSub'])->name('detailSub.update');
            Route::delete('/delete/{detailSubscription}', [SubscriptionController::class, 'destroyDetailSub'])->name('detailSub.destroy');


        });
        Route::prefix('/lectures')->group(function () {
            Route::get('/{chapter}', [LecturesController::class, 'index'])->name('lectures.index'); //in ra vi deo liên quan đến bài học
            Route::get('/create/{chapter}', [LecturesController::class, 'create'])->name('lectures.create');
            Route::post('/store/{chapter}', [LecturesController::class, 'store'])->name('lectures.store');
            Route::get('/{lecture}/edit', [LecturesController::class, 'edit'])->name('lectures.edit');
            Route::put('update/{lecture}', [LecturesController::class, 'update'])->name('lectures.update');
            Route::delete('delete/{lecture}', [LecturesController::class, 'destroy'])->name('lectures.destroy');
        });


        Route::prefix('/reviews')->group(function () {
            Route::get('/', [ReviewController::class, 'indexAdmin'])->name('reviews.admin');
            Route::post('/{id}/toggle-status', [ReviewController::class, 'toggleStatus'])->name('reviews.toggleStatus');
            Route::get('/{id}', [ReviewController::class, 'show'])->name('reviews.show');
            Route::delete('/delete/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
        });

        Route::prefix('/document')->group(function () {
            Route::get('/getDocumentDetails/{id}', [AdminDocumentController::class, 'getDocumentDetails'])->name('getDocumentDetails');
         
            Route::get('/create', [AdminDocumentController::class, 'create'])->name('document.create');
            Route::post('/store', [AdminDocumentController::class, 'store'])->name('document.store');
            Route::delete('/delete/{document}', [AdminDocumentController::class, 'destroy'])->name('document.destroy');
            Route::get('/{document}/edit', [AdminDocumentController::class, 'edit'])->name('document.edit');
            Route::post('update/{document}', [AdminDocumentController::class, 'update'])->name('document.update');
            Route::get('/{class?}', [AdminDocumentController::class, 'index'])->name('document.admin');
            // Route::post('/store/{chapter}', [LecturesController::class, 'store'])->name('lectures.store');
            // Route::get('/{lecture}/edit', [LecturesController::class, 'edit'])->name('lectures.edit');
            // Route::put('update/{lecture}', [LecturesController::class, 'update'])->name('lectures.update');
            // Route::delete('delete/{lecture}', [LecturesController::class, 'destroy'])->name('lectures.destroy');
        });
        Route::prefix('/basis')->group(function () {
            Route::get('/', [BasisController::class, 'index'])->name('basis.index');
            Route::get('/create', [BasisController::class, 'create'])->name('basis.create');
            Route::post('/store', [BasisController::class, 'store'])->name('basis.store');
            Route::get('/{basi}/edit', [BasisController::class, 'edit'])->name('basis.edit');
            Route::post('update/{basis}', [BasisController::class, 'update'])->name('basis.update');
            Route::get('/{id}/basis', [BasisController::class, 'show'])->name('basis.show');
            Route::delete('/delete/{basis}', [BasisController::class, 'destroy'])->name('basis.destroy');

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
Route::post('/reset-passwords', [ResetPasswordController::class, 'ResetPassEmail'])->name('password.update');




Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/detail/{id}', [NewsController::class, 'detail'])->name('news.detail');

Route::prefix('/contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/success', [ContactController::class, 'success'])->name('contact.success');
    Route::post('/postContact', [ContactController::class, 'store'])->name('contact.create');
});

Route::prefix('/reviews')->group(function () {
    Route::get('/', [ReviewController::class, 'index'])->name('reviews.index');
    Route::middleware('require.login')->group(function () {
        Route::post('/store', [ReviewController::class, 'store'])->name('reviews.store');
    });
});

Route::prefix('/documents')->group(function () {
    Route::get('/{class}', [AuthDocumentController::class, 'index'])->name('document.index');
    Route::get('/detail/{id}', [AuthDocumentController::class, 'detail'])->name('document.detail');
    Route::get('/download/{documentId}', [AuthDocumentController::class, 'download'])->name('document.download');



});

Route::get('huong-dan-thanh-toan.html', [PageController::class, 'instruct_vnpay'])->name('instruct_vnpay');
Route::get('chinh-sach-bao-hanh.html', [PageController::class, 'guarantee'])->name('guarantee');
Route::get('chinh-sach-bao-mat.html', [PageController::class, 'security'])->name('security');
Route::get('chinh-sach-thanh-toan.html', [PageController::class, 'pay'])->name('pay');
Route::get('chinh-sach-doi-tra-hoan-tien.html', [PageController::class, 'lie'])->name('lie');
Route::get('chinh-sach-hoan-huy.html', [PageController::class, 'cancellation'])->name('cancellation');
Route::get('{subject}/courses/bai-hoc-cau-hoi', [CourseAuthController::class, 'index'])->name('home.course');
Route::get('/lessons/{lesson}', [CourseAuthController::class, 'show'])->name('lessons.show');

//danh sách gói mua 
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');

Route::get('/subscriptions/purchase/{packageId}', [SubscriptionController::class, 'purchase'])->name('subscriptions.purchase');


//Thanh toán
Route::post('/vnpayment', [VnpayController::class, 'vnpay_payment'])->name('vnpayment');
Route::get('/Getvnpayment', [VnpayController::class, 'Getvnpayment'])->name('Getvnpayment');
Route::post('/vnpaydocument', [VnpayController::class, 'Vnpay_Document'])->name('vnpayDocument');
Route::get('/GetvnpayDocument', [VnpayController::class, 'GetvnpayDocument'])->name('GetvnpayDocument');
// routes/web.php
Route::get('/subscriptions/confirm-purchase/{packageId}', [SubscriptionController::class, 'confirmPurchase'])->name('subscriptions.confirmPurchase');


//Giới thiệu
Route::get('/introduction', [WebConfigController::class, 'introduction'])->name('introduction.user');

   

Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('/quizz')->group(function () { //Xem và làm câu hỏi
        Route::get('/{course}/questions', [QuestionAuthController::class, 'show'])->name('questions.show');
        Route::post('/{course}/questions/submit', [QuestionAuthController::class, 'submitAnswers'])->name('questions.submit');
    });
});

// Route::get('/{course}/questions', [QuestionAuthController::class, 'show'])->name('questions.show');



Route::prefix('/user')->group(function () {
    Route::get('/exam-history', [AuthController::class, 'examHistory'])->name('user.examHistory');
    Route::get('/subscriptions-history', [AuthController::class, 'subscriptionHistory'])->name('user.subscriptionHistory');
    Route::delete('/exam-history/{id}', [AuthController::class, 'destroy'])->name('examHistory.destroy');
});
Route::post('/upload-image', [UploadController::class, 'uploadImage'])->name('upload-image');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/default', [ContactController::class, 'default'])->name('default');
Route::get('/get-video-data', [VideoController::class, 'getVideoData']);

Route::prefix('/teams')->group(function () {
    Route::get('/', [TeamsController::class, 'index'])->name('teams.index');
    Route::get('/{id}/detail', [TeamsController::class, 'detail'])->name('teams.subdetail');
});

