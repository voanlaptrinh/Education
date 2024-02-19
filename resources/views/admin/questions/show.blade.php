@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0"><span class="badge bg-orange bg-opacity-10 text-orange">Lưu ý: <span class="text-success">Câu đúng sẽ có màu xanh</span></span></h1>
                <a href="{{ route('questions.create', $course) }}" class="btn btn-sm btn-primary mb-0">Thêm mới câu hỏi</a>
            </div>
            <div class="col-12 d-sm-flex justify-content-between align-items-center pt-5">
                <h1 class="h3 mb-2 mb-sm-0"> <span style="font-size: 20px; color:rgb(0, 255, 42)"></span></h1>

            </div>
        </div>
        <div class="card border bg-transparent rounded-3">
            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom px-3">
                <div class="row g-4 align-items-center">

                    <div class="col-md-10">
                     
                        <h3 class="card-title mb-0"><a href="#"> <span class="badge bg-orange bg-opacity-10 text-orange">
                            Câu hỏi: </span> {{ $course->name }}</a></h3>
                    </div>
                </div>
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body p-4">

                <!-- Accordion START -->
                <div class="accordion accordion-icon accordion-bg-light" id="accordionExample">
                    <!-- Item -->
                    @php
                        function numericToLetter($numericKey)
                        {
                            return chr(65 + $numericKey); // 65 is ASCII code for 'A'
                        }
                        $idx = 1;
                    @endphp
                    @foreach ($questions as $idKey => $question)
                        <div class="accordion-item mb-3">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button rounded collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne{{ $idKey }}" aria-expanded="false"
                                    aria-controls="collapseOne{{ $idKey }}">
                                    <span class="text-secondary fw-bold me-3">{{ $idx++ }}</span>
                                    <span class="fw-bold">{{ $question->text }}?</span>
                                </button>
                            </h6>
                            <div id="collapseOne{{ $idKey }}" class="accordion-collapse collapse"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body mt-3">

                                    <!-- Answer options -->
                                    @foreach ($question->answers as $key => $answer)
                                        @if ($answer->is_correct == 1)
                                            <p class="mb-3"><b class="text-success p-1" style="border: 2px solid rgb(7, 255, 53); border-radius: 50%">
                                                {{ numericToLetter($key) }}</b>
                                                . {{ $answer->text }}
                                            </p>
                                        @else
                                            <p class="mb-3"><b class="text-danger">{{ numericToLetter($key) }}</b>
                                                . {{ $answer->text }}
                                            </p>
                                        @endif
                                    @endforeach

                                    <div class="d-flex">
                                        <div class="">
                                            <a href="{{ route('questions.edit', ['course' => $course, 'question' => $question]) }}"
                                                class="btn btn-sm btn-success-soft mb-0">Sửa câu hỏi</a>

                                        </div>
                                        <div class="ps-3">
                                            <form action="{{ route('courses.destroy', $question) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger-soft btn-sm mb-0"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa câu hỏi này? Lưu ý: Câu hỏi sẽ bị xóa vĩnh viễn')">Xóa
                                                    câu hỏi</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Button -->


                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Accordion END -->

            </div>
            <!-- Card body START -->
        </div>
      
    </div>
@endsection
