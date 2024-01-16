@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">{{ $course->name }}<span class="badge bg-orange bg-opacity-10 text-orange"> Câu
                        hỏi</span></h1>
                <a href="{{ route('questions.create', $course) }}" class="btn btn-sm btn-primary mb-0">Thêm mới câu hỏi</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    {{-- <div class="col-md-12">
                    <form class="rounded position-relative" action="{{ route('news.search') }}" method="GET">
                        <input name="search" class="form-control bg-body" type="search" placeholder="Search"
                            aria-label="Search">
                        <button
                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                            type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div> --}}



                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                @foreach ($questions as $question)
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="col-lg-12 text-center">
                                    <h6>Câu hỏi: {{ $question->text }}</h6>
                                </div>
                                <div class="row">
                                    @foreach ($question->answers as $answer)
                                        <ol type="i" class="col-sm-3">
                                            @if ($answer->is_correct == 1)
                                                <p style="color:rgb(0, 255, 42)">{{ $answer->text }}</p>
                                            @else
                                                {{ $answer->text }}
                                            @endif

                                        </ol>
                                    @endforeach

                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="row pt-3">
                                    <div class="col-lg-6">
                                        <a href="{{ route('questions.edit', ['course' => $course, 'question' => $question]) }}" class="btn btn-primary">Sửa</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <form action="{{ route('courses.destroy', $question) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa Lớp học này? Lưu ý các khóa học liên quan đến lớp học cũng bị xóa!')">Xóa
                                                lớp học</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach


            </div>
            <!-- Card body END -->

        </div>
        <!-- Card END -->
    </div>
@endsection
