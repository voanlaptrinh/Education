<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Course $course)
    {
        return view('test.questions.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'text' => 'required|string',
            'answers' => 'required|array',
            'correct_answer' => 'required|in:'.implode(',', array_keys($request->answers)),
        ]);

        $question = $course->questions()->create([
            'text' => $request->text,
        ]);

        foreach ($request->answers as $key => $answerText) {
            $isCorrect = $key == $request->correct_answer;
            $question->answers()->create([
                'text' => $answerText,
                'is_correct' => $isCorrect,
            ]);
        }

        return redirect(route('courses.show', $course))->with('success', 'Question added successfully!');
    }
}
