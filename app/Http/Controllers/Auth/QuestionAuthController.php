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
        $questions = $course->questions;
        return view('instructor-quiz.submit', compact('course', 'classes','webConfig', 'questions'));
    }
    public function submitAnswers(Request $request, Course $course) //nộp bài và tính điểm
    {
        if (auth()->check()) {
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
            $webConfig = Web_config::find(1);
            $percentage = ($correctAnswers / $totalQuestions) * 100;

            $examHistory = new ExamHistory();
            $examHistory->user_id = auth()->user()->id;
            $examHistory->course_id = $course->id;
            $examHistory->score = $percentage;
            $examHistory->started_at = now()->setTimezone('UTC');
            $examHistory->completed_at = now()->setTimezone('UTC');
            $examHistory->save();

            // Thực hiện lưu điểm vào cơ sở dữ liệu hoặc thực hiện các xử lý khác tùy thuộc vào yêu cầu của bạn.

            return view('test.questions.result', compact('course','webConfig', 'totalQuestions', 'correctAnswers', 'percentage'));
        } else {
            // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login')->with('warning', 'Vui lòng đăng nhập để nộp bài!');
        }
    }
}
