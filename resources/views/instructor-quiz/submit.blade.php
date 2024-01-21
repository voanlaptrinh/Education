<!-- resources/views/questions/show.blade.php -->
{{-- <h1>{{ $course->name }} - Questions</h1>
<form id="quizForm" method="post" action="{{ route('questions.submit', $course) }}">
    @csrf
    <ul>
        @foreach ($questions as $question)
            <li>
                {{ $question->text }}
                <ul>
                    @foreach ($question->answers as $answer)
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
</form> --}}
@extends('index')
@section('content')
    <main>

        <!-- =======================
                                                            Page Banner START -->
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
                                            src="assets/images/avatar/09.jpg" alt="">
                                        <span
                                            class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Stevens</h1>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3 mb-1 mb-sm-0">
                                                <span class="h6">255</span>
                                                <span class="text-body fw-light">points</span>
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
        <!-- =======================
                                                            Page Banner END -->

        <!-- =======================
                                                            Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-3 p-xl-0">
                                <div class="bg-dark border rounded-3 p-3 w-100">
                                    <!-- Dashboard menu -->
                                    <div class="list-group list-group-dark list-group-borderless collapse-list">
                                        <a class="list-group-item" href="student-dashboard.html"><i
                                                class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                        <a class="list-group-item" href="student-subscription.html"><i
                                                class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
                                        <a class="list-group-item" href="student-course-list.html"><i
                                                class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                        <a class="list-group-item" href="student-course-resume.html"><i
                                                class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
                                        <a class="list-group-item active" href="student-quiz.html"><i
                                                class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                        <a class="list-group-item" href="student-payment-info.html"><i
                                                class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
                                        <a class="list-group-item" href="student-bookmark.html"><i
                                                class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
                                        <a class="list-group-item" href="instructor-edit-profile.html"><i
                                                class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                        <a class="list-group-item" href="instructor-setting.html"><i
                                                class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                        <a class="list-group-item" href="instructor-delete-account.html"><i
                                                class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                        <a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i
                                                class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                        <!-- Collapse menu -->
                                        <a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication"
                                            role="button" aria-expanded="false" aria-controls="collapseauthentication">
                                            <i class="bi bi-lock fa-fw me-2"></i>Dropdown level
                                        </a>
                                        <!-- Submenu -->
                                        <ul class="nav collapse flex-column" id="collapseauthentication"
                                            data-bs-parent="#navbar-sidebar">
                                            <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
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
                                                        <h3 class="card-title"><a href="#"> {{ $course->name }}</a>
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
                                        <!-- Card header -->
                                        <div class="card-header bg-light border-bottom px-lg-5">
                                            <!-- Step Buttons START -->
                                            <div class="bs-stepper-header aa" role="tablist">
                                                <!-- Step 1 -->
                                                @foreach ($questions as $key => $question)
                                                    <div class="step " data-target="#step-{{ $key }}">
                                                        <div class="d-grid text-center align-items-center">
                                                            <button type="button" class="btn btn-link step-trigger mb-0"
                                                                role="tab" id="steppertrigger{{ $key }}"
                                                                aria-controls="step-{{ $key }}"
                                                                aria-selected="true">
                                                                <span class="bs-stepper-circle">{{ $key }}</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                @endforeach




                                            </div>
                                            <!-- Step Buttons END -->
                                        </div>

                                        <!-- Card body START -->
                                        <div class="card-body">
                                            <h6 class="text-danger text-end mb-0" id="timer"><i
                                                    class="bi bi-clock-history me-2"></i>Time Left: <span
                                                    id="countdown"></span></h6>
                                            <input type="hidden" name="remaining_time" id="remainingTimeInput"
                                                value="">
                                            <!-- Step content START -->
                                            <div class="bs-stepper-content">

                                                <form id="quizForm" method="post"
                                                    action="{{ route('questions.submit', $course) }}">
                                                    @csrf
                                                    @foreach ($questions as $key => $question)
                                                        <!-- Step 1 content START -->
                                                        <div id="step-{{ $key }}" role="tabpanel"
                                                            class="content fade  dstepper-block"
                                                            aria-labelledby="steppertrigger{{ $key }}">
                                                            <!-- Title -->
                                                            <h4>{{ $question->text }}?
                                                            </h4>

                                                            <hr> <!-- Divider -->
                                                            <div class="vstack gap-2">
                                                                @foreach ($question->answers as $answer)
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input type="radio" class="btn-check"
                                                                            name="answers[{{ $question->id }}]"
                                                                            id="answer_{{ $answer->id }}"
                                                                            value="{{ $answer->id }}">
                                                                        <label class="btn btn-outline-primary w-100"
                                                                            for="answer_{{ $answer->id }}">{{ $answer->text }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                @endforeach
                                                            </div>

                                                            <!-- Step 1 button -->
                                                            <div class="d-flex justify-content-center mt-3">
                                                                <button type="button"
                                                                    class="btn btn-primary next-btn mb-0">Next
                                                                    question</button>
                                                            </div>
                                                        </div>
                                                        <!-- Step 1 content END -->
                                                    @endforeach
                                                    <div class="d-flex justify-content-center mt-3 submit-btn-container" style="display: none;">
                                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
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
            const submitButton = document.getElementById('submitBtn');
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
                    submitButton.style.display = 'none';
                } else {
                    nextButton.style.display = 'none';
                    submitButton.style.display = 'block';
                }
            }
        
            function submitForm() {
                // Check if it's the last question before submitting the form
                if (currentStep === totalSteps) {
                    document.getElementById('remainingTimeInput').value = timeRemaining;
                    formElement.submit();
                }
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
        
            document.getElementById('nextBtn').addEventListener('click', function () {
                currentStep++;
                updateButtonVisibility();
                submitForm(); // Check for form submission after clicking "Next question"
            });
        </script>
        
        
    </main>
@endsection
