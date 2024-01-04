<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\QuizGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('quiz.index', compact('questions'));
    }

    public function create()
    {
        $question = new Question();
        $quizGroups = QuizGroup::all();
        return view('quiz.create', compact('quizGroups','question'));
    }

   // app/Http/Controllers/QuizController.php
   public function store(Request $request)
   {
       $request->validate([
           'quiz_group_id' => 'required|exists:quiz_groups,id',
           'questions' => 'required|array',
           'questions.*' => 'required|string',
           'answers' => 'required|array',
           'answers.*.content' => 'required|string',
           'answers.*.question_ids' => 'required|exists:questions,id',
           'correct_answers' => 'required|array',
       ]);
   
       foreach ($request->input('questions') as $key => $questionContent) {
           $question = Question::create([
               'content' => $questionContent,
               'quiz_group_id' => $request->input('quiz_group_id'),
           ]);
   
           if (isset($request->input('answers')[$key]) && isset($request->input('correct_answers')[$key])) {
               foreach ($request->input('answers')[$key]['content'] as $answerIndex => $answerContent) {
                   $isCorrect = $answerIndex == $request->input('correct_answers')[$key];
   
                   $question->answers()->create([
                       'content' => $answerContent,
                       'question_id' => $request->input('answers')[$key]['question_ids'][$answerIndex],
                       'is_correct' => $isCorrect,
                   ]);
               }
           }
       }
   
       return redirect()->route('quiz.create')->with('success', 'Câu hỏi đã được thêm thành công.');
   }
   

   
public function take()
{
    $questions = Question::all(); // Lấy tất cả câu hỏi

    return view('quiz.take', compact('questions'));
}

public function submit(Request $request)
{
    $user = Auth::user(); // Lấy người dùng đang đăng nhập
    $questions = Question::all(); // Lấy tất cả câu hỏi

    // Lặp qua các câu hỏi và kiểm tra câu trả lời
    $score = 0;
    foreach ($questions as $question) {
        $selectedAnswerId = $request->input('answers.' . $question->id);

        // Kiểm tra xem câu trả lời được chọn có phải là câu trả lời đúng không
        if ($selectedAnswerId != null && $question->answers->find($selectedAnswerId)->is_correct) {
            $score++;
        }
    }

    // Lưu điểm vào cơ sở dữ liệu hoặc làm bất kỳ xử lý nào bạn muốn
    $user->score = $score;
    $user->save();

    return redirect()->route('quiz.take')->with('success', 'Bài kiểm tra đã được nộp và bạn đạt được điểm: ' . $score);
}
public function showGroup($groupId)
{
    $group = QuizGroup::findOrFail($groupId);
    $questions = Question::where('quiz_group_id', $groupId)->get();

    return view('quiz.take', compact('group', 'questions'));
}




}
