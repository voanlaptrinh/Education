<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Lecture;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturesController extends Controller
{
    public function index(Chapter $chapter)
    {
        $lectures = $chapter->lectures()->latest()->paginate(4);

        return view('admin.lectures.index', compact('chapter', 'lectures'));
    }
    public function create(Chapter $chapter)
    {
        return view('admin.lectures.create', compact('chapter'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'video' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'chapter_id' => 'required',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
            'video.required' => 'Video bài giảng là bắt buộc',
            'image.required' => 'Ảnh bài giảng là bắt buộc'
        ]);

        // Lưu video vào thư mục 'videos' trong thư mục lưu trữ 'public'

        $url = $request->video;

        // Kiểm tra nếu URL chứa 'view?usp=sharing', thay thế thành 'preview'
        if (strpos($url, 'view?usp=sharing') !== false) {
            $url = str_replace('view?usp=sharing', 'preview', $url);
        }


        // Lưu hình ảnh nếu có
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Tạo một bản ghi mới trong bảng 'lectures'
        $lecture = new Lecture([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'video' => $url,
            'chapter_id' => $request->input('chapter_id'),
            'is_free' => $request->has('is_free'),
        ]);

        // Lưu bản ghi vào cơ sở dữ liệu
        $lecture->save();

        // Chuyển hướng về trang index của lectures với thông báo thành công
        return redirect()->route('lectures.index', ['chapter' => $request->input('chapter_id')])
            ->with('success', 'Thêm mới thành công.');
    }
    public function edit($id)
    {
        $lecture = Lecture::findOrFail($id);
        return view('admin.lectures.edit', compact('lecture'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string',
            'video' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'chapter_id' => 'required',
        ], [
            'title.required' => 'Trường tiêu đề này là bắt buộc',
        ]);

        $lecture = Lecture::findOrFail($id);

      
        // Lưu hình ảnh mới nếu được cung cấp
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $lecture->image = $imagePath;
        }

        $url =$request->input('video');

        // Kiểm tra nếu URL chứa 'view?usp=sharing', thay thế thành 'preview'
        if (strpos($url, 'view?usp=sharing') !== false) {
            $url = str_replace('view?usp=sharing', 'preview', $url);
        }

     
        // Cập nhật các trường khác
        $lecture->title = $request->input('title');
        $lecture->content = $request->input('content');
        $lecture->chapter_id = $request->input('chapter_id');
        $lecture->video = $url;
        $lecture->is_free = $request->has('is_free') ? true : false;

        // Lưu bản ghi vào cơ sở dữ liệu
        $lecture->save();

        // Chuyển hướng về trang index của lectures với thông báo thành công
        return redirect()->route('lectures.index', ['chapter' => $request->input('chapter_id')])
            ->with('success', 'Sửa thành công.');
    }
    public function destroy($id)
    {
        $lecture = Lecture::findOrFail($id);
        $chapterId = $lecture->chapter_id;

        // Xóa hình ảnh và video từ thư mục lưu trữ (nếu cần)
        Storage::disk('public')->delete($lecture->video);

        // Xóa bản ghi từ cơ sở dữ liệu
        $lecture->delete();

        return redirect()->route('lectures.index', ['chapter' => $chapterId])
            ->with('success', 'Xóa thành công');
    }
}
