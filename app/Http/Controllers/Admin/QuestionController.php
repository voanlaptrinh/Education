<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Course $course)
    {
        return view('admin.questions.create', compact('course'));
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

    public function show(Course $course)
    {
        $questions = $course->questions;
        return view('test.questions.show', compact('course', 'questions'));
    }

    public function submitAnswers(Request $request, Course $course)
    {
        $questions = $course->questions;
        $userAnswers = $request->input('answers');

        $totalQuestions = count($questions);
        $correctAnswers = 0;

        foreach ($questions as $question) {
            $correctAnswerId = $question->correctAnswer()->id;
            $userAnswerId = $userAnswers[$question->id] ?? null;

            if ($userAnswerId == $correctAnswerId) {
                $correctAnswers++;
            }
        }

        $percentage = ($correctAnswers / $totalQuestions) * 100;

        // Thực hiện lưu điểm vào cơ sở dữ liệu hoặc thực hiện các xử lý khác tùy thuộc vào yêu cầu của bạn.

        return view('test.questions.result', compact('course', 'totalQuestions', 'correctAnswers', 'percentage'));
    }
    public function edit(Course $course, Question $question)
    {
        return view('admin.questions.edit', compact('course', 'question'));
    }
    public function update(Request $request, Course $course, Question $question)
    {
        $request->validate([
            'text' => 'required|string',
            'answers' => 'required|array',
            'correct_answer' => 'required|in:' . implode(',', array_keys($request->answers)),
        ]);

        $question->update([
            'text' => $request->text,
        ]);

        foreach ($request->answers as $answerId => $answerText) {
            $isCorrect = $answerId == $request->correct_answer;
            $answer = $question->answers()->find($answerId);
            if ($answer) {
                $answer->update([
                    'text' => $answerText,
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        return redirect(route('courses.show', $course))->with('success', 'Question updated successfully!');
    }
}
