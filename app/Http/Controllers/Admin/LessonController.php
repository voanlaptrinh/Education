<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Subject;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        // $lessons = Lesson::paginate(3);
        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery

        $lessons = Lesson::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%');
        })->paginate(3);
        return view('admin.lession.index', compact('lessons','searchQuery'));
    }
    public function create()
    {
        $subject = Subject::all();
        return view('admin.lession.create', compact('subject'));
    }
    public function store(Request $request, Subject $subject)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif', 
            'subject_id' => 'required',
            
        ], [
            'title.required' => 'Tiêu đề là trường bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            
            'description.required' => 'Mô tả là trường bắt buộc.',
            'description.string' => 'Mô tả phải là một chuỗi.',
            
            'content.required' => 'Nội dung là trường bắt buộc.',
            'content.string' => 'Nội dung phải là một chuỗi.',
            
            'image.required' => 'Hình ảnh là trường bắt buộc.',
            'image.image' => 'Hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            
            'subject_id.required' => 'Môn học là trường bắt buộc.',
        ]);
        $imagePath = $request->file('image')->store('images', 'public');
        $lesson = new Lesson([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'subject_id' => $request->input('subject_id') 
        ]);

        $lesson->save();

        return redirect()->route('lesson.index')
            ->with('success', 'Lesson added successfully.');
    }
    public function edit(Lesson $lesson)
    {
        $subjects = Subject::all();
        return view('admin.lession.edit', compact('lesson', 'subjects'));
    }
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'subject_id' => 'required|exists:subjects,id',
           
        ], [
            'title.required' => 'Tiêu đề là trường bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi.',~
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            
            'description.required' => 'Mô tả là trường bắt buộc.',
            'description.string' => 'Mô tả phải là một chuỗi.',
            
            'content.required' => 'Nội dung là trường bắt buộc.',
            'content.string' => 'Nội dung phải là một chuỗi.',
            
            'image.image' => 'Hình ảnh phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            
            'subject_id.required' => 'Môn học là trường bắt buộc.',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $lesson->image = $imagePath;
        }

        $lesson->title = $request->input('title');
        $lesson->description = $request->input('description');
        $lesson->content = $request->input('content');
        $lesson->subject_id = $request->input('subject_id');

        $lesson->save();

        return redirect()->route('lesson.index', ['lesson' => $lesson])
            ->with('success', 'Lesson updated successfully.');
    }
    public function destroy(Lesson $lesson)
    {
        $subjectId = $lesson->subject_id;
        $lesson->delete();

        return redirect()->route('lesson.index', ['subject' => $subjectId])
            ->with('success', 'Lesson deleted successfully.');
    }
   
}
