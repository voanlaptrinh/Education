<form method="post" action="{{ route('questions.update', ['course' => $course, 'question' => $question]) }}">
    @csrf
    @method('put')

    <!-- Step 1 content START -->
    <!-- Title -->
    <h4>Sửa câu hỏi</h4>
    <hr>
    <div class="row g-4">
        <!-- Course title -->
        <div class="col-12">
            <label class="form-label">Câu hỏi</label>
            <input class="form-control" type="text" placeholder="Viết câu hỏi của bạn" name="text" value="{{ old('text', $question->text) }}" required>
        </div>
        <div class="row pt-3">
         
            @foreach (range('A', 'D') as $key)
            <div class="col-3">
                @php
    dd($key, $question->text);
@endphp
                <label class="form-label" for="answer_{{ $key }}">{{ $key }} :</label>
                @php
                    $answer = $question->answers->first(function ($answer) use ($key) {
                        // Sử dụng trường text thay vì letter
                        return strtoupper($answer->text) === $key;
                    });
                @endphp
                @dd(optional($answer)->text)
                <input class="form-control" type="text" placeholder="Viết câu trả lời" name="answers[{{ $key }}]" value="{{ old('answers.'.$key, optional($answer)->text) }}">
            </div>
        @endforeach
           
        </div>
     
        <div class="row pt-2">
            <div class="col-9">
                <label for="correct_answer" class="form-label">Chọn câu trả lời đúng *</label>
                <select class="form-select" name="correct_answer">
                    @foreach (range('A', 'D') as $key)
                        <option value="{{ $key }}" {{ old('correct_answer', optional($question->correctAnswer())->letter) == $key ? 'selected' : '' }}>
                            {{ $key }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 pt-3">
                <!-- Nút lưu thay đổi -->
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</form>