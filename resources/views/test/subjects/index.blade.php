@foreach($subjects as $subject)
    <a href="{{ route('courses.index', $subject) }}">{{ $subject->name }}</a><br>
@endforeach