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
        $countReviews = Review::where('status' , '1')->get();
     
        return view('riviews.index', compact('classes', 'webConfig', 'reviews','countReviews'));
    }
    public function indexAdmin(Request $request)
    {
        $classes = Classes::all();
        $webConfig = Web_config::find(1);
        $status = $request->input('status', '');
        $reviewsQuery = Review::query();
        if ($status !== '') {
            $reviewsQuery->where('status', $status);
        }
    
        $reviews = $reviewsQuery->latest()->paginate(5);

        $totalReview = Review::count();
        $activeReview = Review::where('status', '1')->count();
        $unactiveReview = Review::where('status', '0')->count();
        return view('admin.reviews.index', compact('classes', 'webConfig', 'reviews', 'totalReview', 'activeReview', 'unactiveReview', 'status'));
    }
    public function toggleStatus($id)
    {
        $reviews = Review::findOrFail($id);

        // Đảo ngược trạng thái
        $reviews->status = $reviews->status == 1 ? 0 : 1;

        $reviews->save();

        return redirect()->back()->with('success', 'Trạng thái bình luận đã được cập nhật.');
    }

    public function show($id)
    {
        $review = Review::find($id);
        $reviewWithUser = $review->load('user');
        if (!$review) {
            return response()->json(['error' => 'reviews not found'], 404);
        }
        return response()->json($reviewWithUser);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required', // Đảm bảo rating nằm trong khoảng từ 1 đến 5
        ], [
            'title.required' => 'Tiêu đề là trường bắt buộc.',
            'content.required' => 'Nội dung là trường bắt buộc.',
            'rating.required' => 'Đánh giá  là trường bắt buộc.',

        ]);

        // Thêm đánh giá mới vào cơ sở dữ liệu
        Review::create([

            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'content' => $request->input('content'),
            'status' => 0,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Đánh giá đã được gửi thành công.');
    }
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect('/admin/reviews')->with('success', 'Xóa đánh giá thành công!');
    }
}
