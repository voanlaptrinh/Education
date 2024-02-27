<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Course;
use App\Models\ExamHistory;
use App\Models\Web_config;
use Illuminate\Http\Request;

class QuestionAuthController extends Controller
{
    public function show(Course $course) //show bài làm
    {
        $classes = Classes::all();
        $webConfig = Web_config::find(1);
        $choicesMapping = ['A', 'B', 'C', 'D'];
        $user = auth()->user();
        $numberOfCompletedExams = $user->getNumberOfCompletedExams();
        $questions = $course->questions;
        if (auth()->user()->is_pro || $course->is_free == 1) {
            // Hiển thị trang khóa học
            return view('instructor-quiz.submit', compact('choicesMapping','course', 'classes', 'webConfig', 'questions','numberOfCompletedExams'));
        } else {
            // Chuyển hướng hoặc xử lý khi tài khoản chưa mua gói Pro
            return redirect()->route('subscriptions.index')->with('error', 'Bạn cần mua gói Pro xử dụng các dịch vụ trên.');
        }
    }
    // Trong controller

    public function submitAnswers(Request $request, Course $course)
    {
        if (auth()->check()) {
            $classes = Classes::all();
            $questions = $course->questions;
            $userAnswers = $request->input('answers');
            // var_dump($userAnswers);
            $classes = Classes::all();
            $totalQuestions = count($questions);
            $correctAnswers = 0;
            $choicesMapping = ['A', 'B', 'C', 'D'];

            $questionResults = collect($questions)->map(function ($question) use ($userAnswers, $choicesMapping, &$correctAnswers) {
                $correctAnswerId = optional($question->correctAnswer())->order;
                $userAnswerId = $userAnswers[$question->id] ?? null;
                // $userAnswerIdInDatabase = array_search($choicesMapping[$userAnswerId - 1], $choicesMapping) + 1;
                // Kiểm tra xem người dùng đã trả lời câu hỏi chưa
                $userAnswerIdInDatabase = $userAnswerId ? array_search($choicesMapping[$userAnswerId - 1], $choicesMapping) + 1 : null;

                $isAnswered = isset($userAnswers[$question->id]);

                // Kiểm tra đáp án có đúng hay không
                $isCorrect = $userAnswerIdInDatabase === $correctAnswerId;
                if ($isCorrect) {
                    $correctAnswers++;
                }

                // Lấy tất cả câu trả lời của câu hỏi
                $answers = $question->answers;

                return [
                    'question' => $question->text,
                    'userAnswer' => $isAnswered ? ($choicesMapping[$userAnswerId - 1] ?? 'Chưa trả lời') : 'Chưa trả lời',
                    'correctAnswer' => $isAnswered ? ($choicesMapping[$correctAnswerId - 1] ?? '') : 'Chưa trả lời',
                    'isCorrect' => $isCorrect,
                    'answers' => $answers, // Thêm thông tin về câu trả lời vào kết quả
                ];
            });

            $webConfig = Web_config::find(1);
            $percentage = ($correctAnswers / $totalQuestions) * 100;

            $examHistory = new ExamHistory();
            $examHistory->user_id = auth()->user()->id;
            $examHistory->course_id = $course->id;
            $examHistory->score = $percentage;
            $examHistory->started_at = now()->setTimezone('UTC');
            $examHistory->completed_at = now()->setTimezone('UTC');
            $examHistory->save();

            return view('questions.result', compact('classes', 'webConfig', 'choicesMapping', 'questionResults', 'course', 'webConfig', 'totalQuestions', 'correctAnswers', 'percentage'));
        } else {
            return redirect()->route('login')->with('warning', 'Vui lòng đăng nhập để nộp bài!');
        }
    }
}
