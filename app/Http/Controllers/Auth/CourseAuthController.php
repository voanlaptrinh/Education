<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseAuthController extends Controller
{
    public function index(Subject $subject)
    {
        $courses = $subject->courses;
        $classes = Classes::all();
        return view('test.courses.aa', compact('subject','classes', 'courses'));
    }
}
