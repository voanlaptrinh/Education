@extends('index')
@section('content')

<!-- resources/views/quiz/take.blade.php -->
<form action="{{ route('quiz.submit') }}" method="post">
    @csrf
    @foreach($questions as $question)
        <p>{{ $question->content }}</p>
        @foreach($question->answers as $answer)
            <label>
                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
                {{ $answer->content }}
            </label><br>
        @endforeach
    @endforeach
    <button type="submit">Nộp bài</button>
</form>

@endsection