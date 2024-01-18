<!-- resources/views/courses/create.blade.php -->
<form method="post" action="{{ route('courses.store', $subject) }}" enctype="multipart/form-data">
    @csrf
    <label for="name">Course Name:</label>
    <input type="text" name="name" required>
    <label for="name">Time:</label>
    <input type="text" name="time_limit" required>
    <div class="form-group">
        <label for="image">Course Image:</label>
        <input type="file" name="image" accept="image/*">
    </div>
    <button type="submit">Create Course</button>
</form>
