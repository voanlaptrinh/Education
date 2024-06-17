<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Basis;
use App\Models\Classes;
use App\Models\Lecture;
use App\Models\Lesson;
use App\Models\policyPay;
use App\Models\Review;
use App\Models\security;
use App\Models\User;
use App\Models\Web_config;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        return View('pages.index', compact('totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function instruct_vnpay(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        return View('elements.home.instruct_vnpay', compact('totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function guarantee(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        return View('elements.home.guarantee', compact('totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function cancellation(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        return View('elements.home.cancellation', compact('totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function security(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        $security = security::find(1);
        return View('elements.home.security', compact('totalReviews', 'security','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function pay(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        $pay = policyPay::find(1);
        return View('elements.home.pay', compact('pay','totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function lie(){
        $classes = Classes::where('status', 1)->get();
        $totalLessons = Lesson::count();
        $totalLectures = Lecture::count();
        $totalReviews = Review::Where('status', 1)->count();
        $totalUser = User::Where('user_type', 1)->count();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $basis = Basis::all();
        return View('elements.home.lie', compact('totalReviews','basis', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $classes = Classes::where('status', 1)->get();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        $banner = Banner::find(1);
        $lessons = Lesson::where('title', 'like', '%' . $keyword . '%')
        ->paginate(8);

        return view('search.index', compact('lessons', 'keyword','classes','bai_hoc','webConfig', 'banner'));
    }
}
