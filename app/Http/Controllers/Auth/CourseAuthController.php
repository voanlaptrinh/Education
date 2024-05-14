<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseAuthController extends Controller
{
    public function index(Subject $subject, Request $request)
    {
        $courses = $subject->courses()->latest()->paginate(3);
        $lessons = $subject->lessons()->latest()->paginate(3);

        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        $user = Auth::user();

        return view('instructor-quiz.quiz-lessons', compact('subject', 'lessons', 'classes', 'webConfig', 'courses'));
    }
    public function show(Lesson $lesson, Subject $subject)
    {
        $webConfig = Web_config::find(1);
        $lessons = $subject->lessons;
        // Tăng số lượng lượt xem của bài học
        $lesson->increment('views');

        $classes = Classes::where('status', 1)->get();
        // TODO: Xử lý để hiển thị chi tiết về bài học $lesson
        
        return view('instructor-quiz.course-detail', compact('lesson', 'webConfig', 'classes', 'lessons'));
   
        
   
   
    }
}
