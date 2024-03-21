<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Classes;
use App\Models\Course;
use App\Models\ExamHistory;
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
            'correct_answer' => 'required|in:' . implode(',', array_keys($request->answers)),
        ]
        ,[
            'text.required' => 'Tiêu đề câu hỏi là bắt buộc',
            'answers.required' => 'Câu trả lời là bắt buộc',
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
        ],[
            'text.required' => 'Tiêu đề câu hỏi là bắt buộc',
            'answers.required' => 'Câu trả lời là bắt buộc',
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
