<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Classes;
use App\Models\Lecture;
use App\Models\Lesson;
use App\Models\Review;
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
        return View('pages.index', compact('totalReviews', 'banner', 'totalUser', 'classes', 'totalLessons', 'totalLectures', 'webConfig', 'bai_hoc'));
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
