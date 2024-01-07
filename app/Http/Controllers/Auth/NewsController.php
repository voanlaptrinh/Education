<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(5);
        // $totalStudent = User::where('user_type', '!=', 0)->count();
        return view('blog.blog_grid', compact('news'));
    }
    public function detail($id)
    {
        $news = News::findOrFail($id);
        $fullUrl = \URL::current();
        $otherNews = News::where('id', '!=', $id)->inRandomOrder()->get();
        $news->increment('is_views'); // Tăng giá trị is_views
        return view('blog.detail', compact('news','fullUrl','otherNews'));
    }
}
