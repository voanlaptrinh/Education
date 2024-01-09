<!-- resources/views/questions/create.blade.php -->
<form method="post" action="{{ route('questions.store', $course) }}">
    @csrf
    <label for="text">Question:</label>
    <input type="text" name="text" required>
    
    <label for="answers">Answers:</label>
    @foreach(range('A', 'D') as $key)
        <label for="answer_{{ $key }}">{{ $key }}:</label>
        <input type="text" name="answers[{{ $key }}]" required>
    @endforeach
    
    <label for="correct_answer">Correct Answer:</label>
    <select name="correct_answer" required>
        @foreach(range('A', 'D') as $key)
            <option value="{{ $key }}">{{ $key }}</option>
        @endforeach
    </select>

    <button type="submit">Add Question</button>
</form>
