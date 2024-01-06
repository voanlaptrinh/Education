<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    public function index(){
        return view('admin.news.index');
    }
    public function create(){
        return view('admin.news.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable',
            'content' => 'nullable',
        ]);

        // Xử lý lưu dữ liệu vào database
        $news = new News;
        $news->name = $request->input('name');
        $news->description = $request->input('description');
        $news->content = $request->input('content');

        // Xử lý lưu ảnh (nếu có)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $imageName);
            $news->image = $imageName;
        }

        $news->save();

        return redirect()->route('indexNews')->with('success', 'News created successfully!');
    }
}
