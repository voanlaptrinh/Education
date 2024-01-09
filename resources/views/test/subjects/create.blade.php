<!-- resources/views/subjects/create.blade.php -->
<form method="post" action="{{ route('subjects.store') }}">
    @csrf
    <label for="name">Subject Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Create Subject</button>
</form>
