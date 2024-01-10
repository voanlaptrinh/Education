<!-- resources/views/questions/show.blade.php -->
<h1>{{ $course->name }} - Questions</h1>
<form id="quizForm" method="post" action="{{ route('questions.submit', $course) }}">
    @csrf
    <ul>
        @foreach($questions as $question)
            <li>
                {{ $question->text }}
                <ul>
                    @foreach($question->answers as $answer)
                        <li>
                            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
                            {{ $answer->text }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    <p id="timer">Time Remaining: <span id="countdown"></span></p>
    <button type="submit" id="submitBtn">Submit Answers</button>
</form>

<script>
// JavaScript code for countdown timer and auto-submit
const countdownElement = document.getElementById('countdown');
const timerElement = document.getElementById('timer');
const formElement = document.getElementById('quizForm');
const submitButton = document.getElementById('submitBtn');

let timeLimit = {{ $course->time_limit }}; // Set the time limit in seconds
let timeRemaining = timeLimit;

function updateTimerDisplay() {
    const minutes = Math.floor(timeRemaining / 60);
    const seconds = timeRemaining % 60;
    countdownElement.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}

function submitForm() {
    formElement.submit();
}

function startTimer() {
    updateTimerDisplay();
    const timerInterval = setInterval(() => {
        timeRemaining--;

        if (timeRemaining <= 0) {
            clearInterval(timerInterval);
            timerElement.innerText = 'Time Expired!';
            submitForm(); // Auto-submit when time expires
        } else {
            updateTimerDisplay();
        }
    }, 1000);
}

startTimer(); // Start the timer when the page loads
</script>
