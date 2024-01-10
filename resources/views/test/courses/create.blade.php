<!-- resources/views/courses/create.blade.php -->
<form method="post" action="{{ route('courses.store', $subject) }}">
    @csrf
    <label for="name">Course Name:</label>
    <input type="text" name="name" required>
    <label for="name">Time:</label>
    <input type="text" name="time_limit" required>
    <button type="submit">Create Course</button>
</form>
