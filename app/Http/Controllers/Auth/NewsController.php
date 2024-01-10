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
        //Sử dụng model News để truy xuất danh sách các tin tức từ cơ sở dữ liệu.
        //Phương thức paginate(5) chia danh sách tin tức thành các trang, mỗi trang chứa tối đa 5 bản ghi.
//Kết quả được lưu vào biến $news.
        return view('blog.blog_grid', compact('news'));
    }
    public function detail($id)
    {
        $news = News::findOrFail($id);
        $fullUrl = \URL::current();
        $s = News::where('id', '!=', $id)->inRandomOrder()->get();
        $news->increment('is_views'); // Tăng giá trị is_views
        return view('blog.detail', compact('news','fullUrl','otherNews'));  //Trả về view có tên 'blog.detail' và truyền biến $news, $fullUrl, và $otherNews vào view.
    }
}
