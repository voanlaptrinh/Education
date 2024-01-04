<!-- resources/views/quiz/create.blade.php -->
<form action="{{ route('quiz.store') }}" method="POST">
    @csrf
    <div id="questions-container">
        <!-- Mỗi câu hỏi và câu trả lời sẽ nằm trong một question-block -->
        <div class="question-block">
            <label for="question">Câu hỏi:</label>
            <input type="text" name="questions[]" required>

            <label for="answers">Câu trả lời:</label>
            <div class="answers-container">
                <div class="answer-input">
                    <input type="text" name="answers[0][content][]" required>
                    <input type="radio" name="correct_answers[0]" value="0" required>
                    <input type="hidden" name="answers[0][question_ids][]" value="{{ $question->id }}">
                    <button type="button" class="remove-answer">Xóa</button>
                </div>
            </div>
            <button type="button" class="add-answer">Thêm câu trả lời</button>

            <button type="button" class="remove-question">Xóa câu hỏi</button>
        </div>
    </div>

    <button type="button" id="add-question">Thêm câu hỏi</button>

    <label for="quiz_group_id">Nhóm:</label>
    <select name="quiz_group_id" required>
        @foreach($quizGroups as $group)
            <option value="{{ $group->id }}">{{ $group->name }}</option>
        @endforeach
    </select>

    <button type="submit">Thêm câu hỏi</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#add-question').click(function() {
            const questionBlock = $('#questions-container .question-block').first().clone();
            questionBlock.find('input[type=text]').val('');
            questionBlock.find('input[type=radio]').attr('name', 'correct_answers[' + $('#questions-container .question-block').length + ']');
            $('#questions-container').append(questionBlock);
        });

        $(document).on('click', '.add-answer', function() {
            const answersContainer = $(this).prev('.answers-container');
            const answerInput = answersContainer.children('.answer-input').first().clone();
            answerInput.find('input[type=text]').val('');
            answerInput.find('input[type=radio]').val(answersContainer.children('.answer-input').length);
            answersContainer.append(answerInput);
        });

        $(document).on('click', '.remove-answer', function() {
            $(this).parent('.answer-input').remove();
        });

        $(document).on('click', '.remove-question', function() {
            $(this).parent('.question-block').remove();
        });
    });
    </script>
</form>
