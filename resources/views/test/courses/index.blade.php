<!-- resources/views/courses/index.blade.php -->
<h1>{{ $subject->name }} Courses</h1>
{{-- <p>Time Limit: {{ $subject->time_limit }} minutes</p> --}}
<a href="{{ route('courses.create', $subject) }}">Add Course</a><br>
@foreach($courses as $course)
    <a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a><br>
@endforeach
