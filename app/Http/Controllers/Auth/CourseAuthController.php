<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseAuthController extends Controller
{
    public function index(Subject $subject)
    {
        $courses = $subject->courses;
        return view('test.courses.index', compact('subject', 'courses'));
    }
}
