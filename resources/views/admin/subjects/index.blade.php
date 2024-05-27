@extends('admin.index')
@section('contentadmin')
    {{-- Thêm môn học --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Thêm Môn học của bạn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('subjects.store') }}">
                    @csrf
                    <div class="modal-body">
                        <!-- resources/views/subjects/create.blade.php -->

                        <label for="name">Tên môn học:</label>
                        <input class="form-control bg-body" type="text" name="name" id="name"
                            placeholder="Tên môn học" required>
                        <div class="col-lg-12 pt-3">
                            <label for="exampleInputEmail1" class="form-label">Trạng thái: *</label>

                            <select class="form-select" name="status" id="status" required>
                                <option value="1">Hoạt dộng</option>
                                <option value="0">Tạm khóa</option>
                            </select>
                        </div>
                        <div class="col-lg-12 pt-3">
                            <label for="name">Mô tả:</label>
                            <input class="form-control bg-body" type="text" name="description" id="description"
                                placeholder="Mô tả" required>
                        </div>
                        <div class="form-group pt-3">
                            <label for="class_id">Chọn lớp học:</label>
                            <select name="class_id" id="class_id" class="form-control selectpicker" data-live-search="true">
                                @foreach ($classes as $class)
                                    <option  data-tokens="{{$class->name}}" value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" id="subjectId" name="subject_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn b tn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Thêm môn học</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--  --}}
    <script>
        $(document).ready(function() {

            // When the form is submitted
            $("#submitBtn").submit(function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Perform client-side validation
                var name = $("#name").val();
                var status = $("#status").val();
                var classId = $("#class_id").val();

                if (!name || !status || !classId) {
                    alert("Please fill out all required fields.");
                    return;
                }

                // If validation passes, submit the form
                // Add any additional logic you need before submitting the form

                // Then submit the form using JavaScript
                this.submit();
            });
        });
    </script>
    <div class="page-content-wrapper border">
        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Môn học</h1>
                <button type="button" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" data-action="add" data-class-id="">
                    Thêm môn học
                </button>
            </div>
        </div>

        <!-- Course boxes START -->
        <div class="row g-4 mb-4">
            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                    <h6>Tổng môn học</h6>
                    <h2 class="mb-0 fs-1 text-primary">{{ $totalSubjects }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Môn học hoạt động</h6>
                    <h2 class="mb-0 fs-1 text-success">{{ $activeSubjects }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Môn học tạm ngừng</h6>
                    <h2 class="mb-0 fs-1 text-warning">{{ $unactiveSubjects }}</h2>
                </div>
            </div>
        </div>
        <!-- Course boxes END -->

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative" action="{{ route('subjects.index') }}" method="get">
                            <input name="query" value="{{ $searchQuery }}" class="form-control bg-body" type="search"
                                placeholder="Search" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>


                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="table-responsive border-0 rounded-3">
                    <!-- Table START -->
                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Tên môn học</th>
                                <th scope="col" class="border-0">Người đăng</th>

                                <th scope="col" class="border-0">Trạng thái </th>
                                <th scope="col" class="border-0">Bài học </th>
                                <th scope="col" class="border-0">Lớp học</th>
                                <th scope="col" class="border-0">Đề bài</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @if (count($subjects) > 0)
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <!-- Image -->

                                                <!-- Title -->
                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a href="#" class="stretched-link">{{ $subject->name }}</a>
                                                </h6>
                                            </div>
                                        </td>

                                        <!-- Table data -->
                                        <td>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="ms-2">
                                                    <h6 class="mb-0 fw-light">Admin</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <!-- Table data -->
                                        <td>
                                            <form action="{{ route('subjects.toggleStatus', ['id' => $subject->id]) }}"
                                                method="post">
                                                @csrf
                                                @if ($subject->status == 1)
                                                    <button class="btn btn-success">Hoạt động</button>
                                                @else
                                                    <button class="btn btn-warning">Tạm khóa</button>
                                                @endif
                                            </form>


                                        </td>
                                        <td>
                                            <a href="{{ route('lesson.index', ['subject' => $subject]) }}"
                                                class="btn btn-primary">Bài học</a>
                                        </td>
                                        <td>
                                            {{ $subject->class->name }}


                                        </td>
                                        <!-- Table data -->
                                        <td>
                                            <a href="{{ route('courses.index', $subject) }}"
                                                class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Thêm bài kiểm tra</a>
                                        </td>
                                        <td class="d-flex">


                                            <button type="button"
                                                class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                data-action="edit" data-class-id="{{ $subject->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>

                                            <form action="{{ route('subjects.destroy', $subject) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa môn học này? Lưu ý các câu hỏi liên quan đến môn học cũng bị xóa!')"><i
                                                        class="bi bi-trash  "></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>Không có môn học nào</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif

    



                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <div class="card-footer bg-transparent px-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            @if ($subjects->currentPage() > 1)
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $subjects->url($subjects->currentPage() - 1) }}" tabindex=""><i
                                            class="fas fa-angle-left"></i></a></li>
                            @endif
                            @for ($i = 1; $i <= $subjects->lastPage(); $i++)
                                <li class=" page-item mb-0 {{ $subjects->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $subjects->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($subjects->currentPage() < $subjects->lastPage())
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $subjects->url($subjects->currentPage() + 1) }}"><i
                                            class="fas fa-angle-right"></i></a></li>
                            @endif

                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
        </div>
        <!-- Card END -->
    </div>
    <script>
        $('#staticBackdrop').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var action = button.data('action');
            var classId = button.data('class-id');
            var modal = $(this);
            var form = modal.find('form');
            var submitBtn = modal.find('#submitBtn');

            if (action === 'add') {
                form.trigger('reset');
                modal.find('.modal-title').text('Thêm môn Học');
                form.attr('action', `{{ route('subjects.store') }}`);
                submitBtn.text('Thêm môn Học');
            } else if (action === 'edit') {
                modal.find('.modal-title').text('Sửa Lớp Học');
                form.attr('action', `{{ route('subjects.update', ':id') }}`.replace(':id', classId));
                submitBtn.text('Cập Nhật môn Học');

                $.ajax({
                    url: `{{ route('subjects.show', ':id') }}`.replace(':id', classId),
                    method: 'GET',
                    success: function(response) {
                        modal.find('#name').val(response.name || '');
                        modal.find('#status').val(response.status);
                        modal.find('#description').val(response.description);
                        modal.find('#class_id').val(response.class_id);
                        modal.find('#subjectId').val(response.id);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        });
    </script>
@endsection
