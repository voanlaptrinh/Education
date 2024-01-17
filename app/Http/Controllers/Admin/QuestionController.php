<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    public function edit($course, Question $question)
    {
        return view('admin.questions.edit', compact('course', 'question'));
    }

    public function update(Request $request, $course, Question $question)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|string',
            'answers' => 'required|array',
            'correct_answer' => 'required|exists:answers,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $question->update([
            'text' => $request->input('text'),
        ]);

        foreach ($request->input('answers') as $answerId => $answerText) {
            $isCorrect = $answerId == $request->input('correct_answer');

            $answer = Answer::find($answerId);
            $answer->text = $answerText;
            $answer->is_correct = $isCorrect;
            $answer->save();
        }

        return redirect()->route('courses.show', $course)->with('success', 'Câu hỏi đã được cập nhật thành công.');
    }
}
