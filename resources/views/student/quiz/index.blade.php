@extends('index')
@section('content')

@foreach($questions as $question)
    <div>
        <p>{{ $question->content }}</p>
        <ul>
            @foreach($question->answers as $answer)
                <li>{{ $answer->content }} - {{ $answer->is_correct ? 'Correct' : 'Incorrect' }}</li>
            @endforeach
        </ul>
    </div>
@endforeach

@endsection