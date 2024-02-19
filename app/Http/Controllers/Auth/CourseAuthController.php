<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Web_config;
use Illuminate\Http\Request;

class CourseAuthController extends Controller
{
    public function index(Subject $subject, Request $request)
    {
        $courses = $subject->courses()->paginate(3);
        $lessons = $subject->lessons()->paginate(3);

        $classes = Classes::all();
        $webConfig = Web_config::find(1);


        return view('instructor-quiz.quiz-lessons', compact('subject', 'lessons', 'classes', 'webConfig', 'courses'));
    }
    public function show(Lesson $lesson, Subject $subject)
    {
        $webConfig = Web_config::find(1);
        $lessons = $subject->lessons;
        // Tăng số lượng lượt xem của bài học
        $lesson->increment('views');

        $classes = Classes::all();
        // TODO: Xử lý để hiển thị chi tiết về bài học $lesson
        return view('instructor-quiz.course-detail', compact('lesson', 'webConfig', 'classes', 'lessons'));
    }
}
