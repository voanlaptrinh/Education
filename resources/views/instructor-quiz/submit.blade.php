
@extends('index')
@section('content')
    <main>

        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="card bg-blue h-100px h-md-200px rounded-0"
                    style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>
            <div class="container mt-n4">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="{{ asset(Auth::user()->image ? 'storage/' . Auth::user()->image : '/assets/user/images/default-avatar.png') }}"
                                            alt="">
                                            @if (Auth::user()->is_pro == 1 )
                                            <span
                                            class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                            @else
                                            <span
                                            class="badge text-bg-info rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Free</span>
                                            @endif
                                       
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">{{ Auth::user()->name }}</h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">{{ $numberOfCompletedExams }}</span>
                                                <span class="text-body fw-light">bài tập đã làm</span>
                                            </li>
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">7</span>
                                                <span class="text-body fw-light">Completed courses</span>
                                            </li>
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">52</span>
                                                <span class="text-body fw-light">Completed lessons</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-2 mt-sm-0">
                                        <a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my
                                            courses</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar START -->

                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-12">
                        <!-- Course item START -->
                        <div class="card border">

                            <div class="card-header border-bottom">
                                <!-- Course list START -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="row g-0">
                                                <div class="col-md-2">
                                                    <img src="{{ $course->image ? asset('storage/' . $course->image) : 'placeholder.jpg' }}"
                                                        class="rounded-2" alt="Card image">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="card-body">
                                                        <!-- Title -->
                                                        <h3 class="card-title"><a href="#"> {{ $course->name }}<h6 class="text-danger mb-0" id="timer"><i
                                                            class="bi bi-clock-history me-2"></i>Time Left: <span
                                                            id="countdown"></span></h6>
                                                    <input type="hidden" name="remaining_time" id="remainingTimeInput"
                                                        value="{{ $course->time_limit }}"></a>
                                                        </h3>
                                                        
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course list END -->
                            </div>

                            <div class="card-body">
                                <!-- Step content START -->
                                <div class="card bg-transparent border rounded-3 mb-1">
                                    <div id="stepper" class="bs-stepper stepper-outline">


                                        <!-- Card body START -->
                                        <div class="card-body">
                                           
                                            <!-- Step content START -->
                                            <div class="bs-stepper-content">

                                                <form id="quizForm" method="post"
                                                    action="{{ route('questions.submit', $course) }}">
                                                    @csrf
                                                    @foreach ($questions as $index => $question2)
                                                        <div class="accordion accordion-icon accordion-bg-light">


                                                            {{-- {{ $result['userAnswer'] }} --}}
                                                            <div class="accordion-item mb-3">
                                                                <h6 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button rounded">
                                                                        <span
                                                                            class="text-secondary fw-bold me-3">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                                                        <span class="fw-bold">{{ $question2->text }}?</span>
                                                                    </button>
                                                                </h6>
                                                                <div class="">
                                                                    <div class="accordion-body mt-3">
                                                                        <!-- Answer options -->
                                                                        <div class=" row">
                                                                            @foreach ($question2->answers as $index => $answer)
                                                                                <!-- Feed ques item -->
                                                                                <div class="col-lg-3">
                                                                                    <input type="radio" class="btn-check"
                                                                                        name="answers[{{ $question2->id }}]"
                                                                                        id="answer_{{ $question2->id }}_{{ $index }}"
                                                                                        value="{{ $index + 1 }}">
                                                                                    <label
                                                                                        class="btn btn-outline-primary w-100"
                                                                                        for="answer_{{ $question2->id }}_{{ $index }}">{{ $choicesMapping[$index] }}.{{ $answer->text }}</label>
                                                                                </div>
                                                                                <!-- Feed ques item -->
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- Step 1 content END -->
                                                    @endforeach
                                                    <div class="d-flex justify-content-center mt-3 submit-btn-container"
                                                        style="display: none;">
                                                        <button type="submit" class="btn btn-primary mb-0">Nộp bài</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <!-- Card body END -->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- Course item END -->


                    </div>
                    <!-- Main content END -->
                </div> <!-- Row END -->
            </div>
        </section>

        <script>
            const countdownElement = document.getElementById('countdown');
            const timerElement = document.getElementById('timer');
            const formElement = document.getElementById('quizForm');
            const nextButton = document.getElementById('nextBtn');
            const totalSteps = {{ count($questions) }};
            let currentStep = 1;
            let timeLimit = {{ $course->time_limit }};
            let timeRemaining = timeLimit;
        
            function updateTimerDisplay() {
                const minutes = Math.floor(timeRemaining / 60);
                const seconds = timeRemaining % 60;
                countdownElement.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            }
        
            function updateButtonVisibility() {
                if (currentStep < totalSteps) {
                    nextButton.style.display = 'block';
                } else {
                    nextButton.style.display = 'none';
                }
            }
        
            function startTimer() {
                updateTimerDisplay();
                const timerInterval = setInterval(() => {
                    timeRemaining--;
        
                    if (timeRemaining <= 0) {
                        clearInterval(timerInterval);
                        timerElement.innerText = 'Time Expired!';
                        submitForm(); // Call submitForm when time expires
                    } else {
                        updateTimerDisplay();
                    }
                }, 1000);
            }
        
            function submitForm() {
                // Update the remaining time input before submitting the form
                document.getElementById('remainingTimeInput').value = timeRemaining;
        
                // Submit the form
                formElement.submit();
            }
        
            startTimer(); // Start the timer when the page loads
        </script>
        
        


    </main>
@endsection
