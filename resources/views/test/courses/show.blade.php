<!-- resources/views/courses/show.blade.php -->
<h1>{{ $course->name }} - Questions</h1>
<a href="{{ route('questions.create', $course) }}">Add Question</a>
<ul>
    @foreach($questions as $question)
        <li>{{ $question->text }}</li>
        <ul>
            @foreach($question->answers as $answer)
                <li>{{ $answer->text }} ({{ $answer->is_correct ? 'Correct' : 'Incorrect' }})</li>
            @endforeach
        </ul>
    @endforeach
</ul>
