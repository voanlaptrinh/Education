@extends('index')
@section('content')
    <section class="bg-light py-0 py-sm-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6">
                    <!-- Badge -->
                    <h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">Kết quả</h6>
                    <!-- Title -->
                    <h1>{{ $course->name }}</h1>
                    <!-- Content -->
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>Thời
                            gian {{ $course->time_limit / 60 }} phút</li>
                        <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                class="fas fa-signal text-success me-2"></i>{{ $course->subject->class->name }}</li>
                        <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                class="bi bi-patch-exclamation-fill text-danger me-2"></i>{{ $course->created_at->format('d-m-Y') }}</li>
                        <li class="list-inline-item h6 mb-0"><i class="fas fa-globe text-info me-2"></i>Việt nam</li>
                    </ul>
                </div>
                <div class="col-lg-6 p-3 shadow"
                    style="background: rgb(255, 255, 255);border-radius: var(--bs-border-radius) !important;">
                    <div class="row mb-4">
                                    
                                    <h5 class="mb-4">Kết quả bài làm của bạn </h5>

                        <!-- Rating info -->
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="text-center">
                                <!-- Info -->
                                <h2 class="mb-0">{{ number_format($percentage, 2) }}% </h2>
                                <!-- Star -->
                                <div class="progress progress-sm bg-warning bg-opacity-15">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mb-0">(@if ($percentage < 50)
                                        Bạn cần cố gắng thêm
                                    @else
                                        Bạn làm rất tốt
                                    @endif)</p>
                                    <a class=" mt-3 btn btn-success" href="{{ route('user.examHistory') }}">Xem lịch sử làm bài</a>
                            </div>
                        </div>

                        <!-- Progress-bar and star -->
                        <div class="col-md-8">
                            <div class="row align-items-center">

                                <p>Tổng số câu hỏi: {{ $totalQuestions }}</p>
                                <p>Câu hỏi trả lời dúng: {{ $correctAnswers }}</p>
                                <!-- Progress bar and Rating -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-12">
                    <div class="card shadow rounded-2 p-0">
                        <!-- Tabs START -->

                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class="card-body p-4">
                            <div class="tab-content pt-2" id="course-pills-tabContent">
                                <!-- Trong view -->
                                <div class="accordion accordion-icon accordion-bg-light">
                                    @foreach ($questionResults as $index => $result)
                                        {{-- @dd($result); --}}
                                        {{-- {{ $result['userAnswer'] }} --}}
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header" id="headingOne">
                                                <button class="accordion-button rounded">
                                                    <span
                                                        class="text-secondary fw-bold me-3">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                                    <span class="fw-bold">{{ $result['question'] }}</span>
                                                </button>
                                            </h6>
                                            <div class="">
                                                <div class="accordion-body mt-3">
                                                    <!-- Answer options -->
                                                    @foreach ($result['answers'] as $key => $answer)
                                                        @if ($answer->is_correct == 1)
                                                            <p class="mb-3 "><b class="text-success fw-bold">
                                                                    {{ $choicesMapping[$key] }}</b> {{ $answer->text }}
                                                            </p>
                                                            @else
                                                            <p class="mb-3 "><b class="text-dark">
                                                                {{ $choicesMapping[$key] }}</b> {{ $answer->text }}
                                                        </p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <p>Câu trả lời của bạn: {{ $result['userAnswer'] }}</p>
                                            <p >
                                                Kết quả: <span style="color: {{ $result['isCorrect'] ? 'green' : 'red' }}">{{ $result['isCorrect'] ? 'Đúng' : 'Sai' }}</span> 
                                            </p>
                                            
                                        </div>
                                    @endforeach
                                </div>
    


                            </div>
                        </div>
                        <!-- Tab contents END -->
                    </div>
                </div>
                <!-- Main content END -->



            </div><!-- Row END -->
        </div>
    </section>
@endsection
