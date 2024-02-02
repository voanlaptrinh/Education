<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Review;
use App\Models\Web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        $webConfig = Web_config::find(1);
        $reviews = Review::paginate(5);
        return view('riviews.index', compact('classes', 'webConfig', 'reviews'));
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'content' => 'required',
        //     'rating' => 'required|integer|between:1,5', // Đảm bảo rating nằm trong khoảng từ 1 đến 5
        // ]);

        // Thêm đánh giá mới vào cơ sở dữ liệu
        Review::create([

            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'content' => $request->input('content'),
            'status' => 0,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Đánh giá đã được thêm thành công.');
    }
}
