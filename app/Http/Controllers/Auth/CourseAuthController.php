<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Web_config;
use Illuminate\Http\Request;

class CourseAuthController extends Controller
{
    public function index(Subject $subject)
    {
        $courses = $subject->courses;
        $classes = Classes::all();
        $webConfig = Web_config::find(1);
        return view('instructor-quiz.quiz', compact('subject','classes','webConfig', 'courses'));
    }
}
