<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    public function index(){
        $news = News::paginate(5);
        $totalNews = News::count();
        return view('admin.news.index',compact('news','totalNews'));
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
        $news->is_views =0;
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
    public function edit ($id){
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable',
            'content' => 'nullable',
        ]);

        $news = News::findOrFail($id);
        $news->name = $request->input('name');
        $news->description = $request->input('description');
        $news->content = $request->input('content');

        // Xử lý cập nhật ảnh (nếu có)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $imageName);
            $news->image = $imageName;
        }

        $news->save();

        return redirect()->route('indexNews')->with('success', 'News updated successfully!');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('indexNews')->with('success', 'News deleted successfully!');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');

        $news = News::where('name', 'like', "%$search%")
                    ->orWhere('description', 'like', "%$search%")
                    ->paginate(10);

        return view('admin.news.index', compact('news'));
    }
}
