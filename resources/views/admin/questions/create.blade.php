@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <h1 class="h3 mb-3">Câu hỏi - trả lời</h1>

        <!-- Card START -->
        <div class="card border rounded-3 mb-5">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Card header -->


                <!-- Card body START -->
                <div class="card-body px-1 px-sm-4">
                    <!-- Step content START -->
                    <div class="bs-stepper-content">
                        <form method="post" action="{{ route('questions.store', $course) }}">
                            @csrf
                            <!-- Step 1 content START -->

                            <!-- Title -->
                            <h4>Thêm mới câu hỏi</h4>

                            <hr>
                            <div class="row g-4">
                                <!-- Course title -->
                                <div class="col-12">
                                    <label class="form-label">Câu hỏi</label>
                                    <input class="form-control" type="text" placeholder="Viết câu hỏi của bạn"
                                        name="text" value="{{old('text')}}">
                                </div>
                                <div class="row pt-3">
                                    @foreach (range('A', 'D') as $key)
                                        <div class="col-3">
                                            <label class="form-label" for="answer_{{ $key }}">{{ $key }}
                                                :</label>
                                            <input class="form-control" type="text" placeholder="Viết câu trả lời"
                                                name="answers[{{ $key }}]" required>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="row pt-2">
                                    <div class="col-9">
                                        <label for="correct_answer" class="form-label">Chọn câu
                                            hỏi bạn cho là đúng *</label>
                                        <select class="form-select" name="correct_answer">
                                            @foreach (range('A', 'D') as $key)
                                                <option value="{{ $key }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 pt-3">
                                        <!-- Step 1 button -->
                                        <div class="d-flex justify-content-end mt-3">
                                            <button type="submit" class="btn btn-primary next-btn mb-0">Thêm câu
                                                hỏi</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card END -->
    </div>
@endsection
