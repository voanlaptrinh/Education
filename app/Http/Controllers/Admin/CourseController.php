<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Subject $subject)
    {
        $courses = $subject->courses;
        return view('admin.courses.index', compact('subject', 'courses'));
    }

    public function create(Subject $subject)
    {
        return view('test.courses.create', compact('subject'));
    }

    public function store(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string',
            'time_limit' => 'nullable|integer|min:1',
        ]);

        $subject->courses()->create([
            'name' => $request->name,
            'time_limit' => $request->time_limit * 60,
            
        ]);

        return redirect(route('courses.index', $subject))->with('success', 'Course created successfully!');
    }

    public function show(Course $course)
    {
        $classes = Classes::all();
        $questions = $course->questions;
        return view('admin.questions.show', compact('course','classes', 'questions'));
    }
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->back();
    }
}
