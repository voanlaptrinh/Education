<!-- resources/views/courses/create.blade.php -->
<form method="post" action="{{ route('courses.store', $subject) }}">
    @csrf
    <label for="name">Course Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Create Course</button>
</form>
