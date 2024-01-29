<!-- resources/views/questions/result.blade.php -->
<h1>Results for {{ $course->name }}</h1>
<p>Total Questions: {{ $totalQuestions }}</p>
<p>Correct Answers: {{ $correctAnswers }}</p>
<p>Percentage: {{ $percentage }}%</p>


<!-- File: resources\views\test\questions\result.blade.php -->

<!-- Hiển thị kết quả làm bài và điểm số -->

<a href="{{ route('user.examHistory') }}" class="btn btn-sm btn-info-soft mb-0">Xem lịch sử làm bài</a>
