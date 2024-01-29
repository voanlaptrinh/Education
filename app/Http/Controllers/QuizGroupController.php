<?php

namespace App\Http\Controllers;

use App\Models\QuizGroup;
use Illuminate\Http\Request;

class QuizGroupController extends Controller
{
    public function index()
    {
        $groups = QuizGroup::all();
        return view('student.quiz.groups.index', compact('groups'));
    }
}
