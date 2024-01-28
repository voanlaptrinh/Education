<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(Subject $subject)
    {
        $courses = $subject->courses;
        return view('admin.courses.index', compact('subject', 'courses'));
    }

    public function create(Subject $subject)
    {
        return view('admin.courses.create', compact('subject'));
    }

    public function store(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string',
            'time_limit' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'time_limit.required' => 'Bạn cần nhập thời gian làm bài',
            'image.required' => 'Bạn cần đưa ảnh lên'
        ]);

        $courseData = [
            'name' => $request->name,
            'time_limit' => $request->time_limit * 60,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('course_images', 'public');
            $courseData['image'] = $imagePath;
        }

        $subject->courses()->create($courseData);

        return redirect(route('courses.index', $subject))->with('success', 'Course created successfully!');
    }
    public function edit(Subject $subject, Course $course)
    {
        // $subjects = Subject::all();
        return view('admin.courses.edit', compact('subject', 'course'));
    }
    public function update(Request $request, Subject $subject, Course $course)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'time_limit' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ], [
            'name.required' => 'Tiêu đề là bắt buộc',
            'time_limit.required' => 'Bạn cần nhập thời gian làm bài',
            'image.image' => 'Hình ảnh không hợp lệ',
            'image.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif',
        ]);

        // Lấy dữ liệu mới từ request
        $courseData = [
            'name' => $request->name,
            'time_limit' => $request->time_limit * 60,
        ];

        // Xử lý tải lên hình ảnh mới nếu có
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ (nếu có)
            Storage::disk('public')->delete($course->image);

            // Lưu hình ảnh mới
            $imagePath = $request->file('image')->store('course_images', 'public');
            $courseData['image'] = $imagePath;
        }

        // Cập nhật thông tin đề bài
        $course->update($courseData);

        // Chuyển hướng người dùng về trang danh sách đề bài
        return redirect(route('courses.index', $subject))->with('success', 'Course updated successfully!');
    }
    public function destroyCourse(Subject $subject, Course $course)
    {
        // Xóa hình ảnh (nếu có)
        Storage::disk('public')->delete($course->image);

        // Xóa đề bài từ cơ sở dữ liệu
        $course->delete();

        // Chuyển hướng về trang danh sách đề bài
        return redirect(route('courses.index', $subject))->with('success', 'Xóa đề bài thành công!');
    }
    public function show(Course $course)
    {
        $classes = Classes::all();
        $questions = $course->questions;
        return view('admin.questions.show', compact('course', 'classes', 'questions'));
    }
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->back();
    }
}
