<section>
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-1">Các đề bài liên quan đến môn học</h2>
                <p class="mb-0">Chọn từ hàng trăm khóa học từ các tổ chức chuyên môn</p>
            </div>
        </div>

        <!-- Tabs START -->
        <ul class="aa1 nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab"
            role="tablist">
            <!-- Tab item -->
            @foreach ($classes as $classIndex => $class)
                @foreach ($class->subjects as $subjectIndex => $subject)
                    <li class="nav-item me-2">
                        <button
                            class="nav-link mb-2 mb-md-0 {{ $classIndex === 0 && $subjectIndex === 0 ? ' active' : '' }}"
                            id="course-pills-tab-{{ $subject->id }}" data-bs-toggle="pill"
                            data-bs-target="#course-pills-tabs-{{ $subject->id }}" type="button" role="tab"
                            aria-controls="course-pills-tabs-{{ $subject->id }}"
                            aria-selected="{{ $classIndex === 0 && $subjectIndex === 0 ? 'true' : 'false' }}">{{ $subject->name }}
                            ({{ $class->name }})
                        </button>
                    </li>
                @endforeach
            @endforeach

        </ul>


        <!-- Tabs END -->

        <!-- Tabs content START -->
        <!-- Tabs content START -->
        <div class="tab-content" id="course-pills-tabContent">
            <!-- Content START -->
            @foreach ($classes as $classIndex => $class)
                @foreach ($class->subjects as $subjectIndex => $subject)
                    <div class="tab-pane fade{{ $classIndex === 0 && $subjectIndex === 0 ? ' show active' : '' }}"
                        id="course-pills-tabs-{{ $subject->id }}" role="tabpanel"
                        aria-labelledby="course-pills-tab-{{ $subject->id }}">
                        <div class="row g-4">
                            @foreach ($subject->courses as $courseIndex => $course)
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="{{ $course->image ? asset('storage/' . $course->image) : 'placeholder.jpg' }}"
                                            class="card-img-top" alt="course image">
                                       
                                                @if ($course->is_free == 1)
                                                <div class="ribbon mt-3"><span>Free</span></div>
                                                @else
                                                <div class="ribbon mt-3"><span>Pro <i class="fas fa-crown"
                                                    style=" color: rgb(112, 112, 5);"></i></span></div>
                                                  
                                                @endif
                                            
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#"
                                                    class="badge bg-success bg-opacity-10 text-success">{{ $subject->name }}</a>
                                                <a href="#"
                                                    class="badge bg-success bg-opacity-10 text-success">{{ $subject->class->name }}</a>
                                                <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">{{ $course->name }}</a>
                                            </h5>
                                            <p class="mb-2 text-truncate-2">{{ $course->description }}</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                @if (!empty(Auth::user()))
                                                    @if ($course->questions->count() > 0)
                                                        @if ($course->is_free == 0)
                                                            <a href="{{ route('questions.show', $course) }}"
                                                                class="btn btn-sm btn-info-soft mb-0"> Làm bài tập

                                                            </a>
                                                        @else
                                                            <a href="{{ route('questions.show', $course) }}"
                                                                class="btn btn-sm btn-info-soft mb-0">Làm bài tập</a>
                                                        @endif
                                                    @else
                                                        <button type="button"
                                                            class="btn btn-sm btn-info-soft mb-0">Chưa
                                                            có câu hỏi</button>
                                                    @endif
                                                @else
                                                    <button class="btn btn-check">Đăng nhập để làm bài</button>
                                                @endif
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between ">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="far fa-clock text-danger me-2"></i>{{ $course->time_limit / 60 }}
                                                    phút</span>
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-table text-orange me-2"></i>
                                                    {{ $course->questions->count() }} Câu hỏi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endforeach
                        </div> <!-- Row END -->
                    </div>
                @endforeach
            @endforeach
            <!-- Content END -->
        </div>
        <!-- Tabs content END -->

        <!-- Tabs content END -->
    </div>
</section>
