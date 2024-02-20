@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm đề bài cho môn học: <span style="color:red">({{ $subject->name }})</span>
                </h1>
                <a href="{{ route('courses.create', $subject) }}" class="btn btn-sm btn-primary mb-0">Thêm mới đề bài</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">




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
                                <th scope="col" class="border-0 rounded-start">Tên khóa học</th>
                                <th scope="col" class="border-0 ">Người đăng </th>
                                <th scope="col" class="border-0">Thời gian làm bài</th>
                                <th scope="col" class="border-0">Miễn phí</th>
                                <th scope="col" class="border-0">Câu hỏi</th>
                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>
                        <style>
                            nav .hidden {
                                display: none;
                            }
                        </style>
                        <!-- Table body START -->
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <!-- Table data -->

                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->

                                            <!-- Title -->
                                            <h6 class="table-responsive-title mb-0 ms-2">
                                                <a href="" class="stretched-link">{{ $course->name }}</a>
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

                                        {{ $course->time_limit / 60 }} phút



                                    </td>
                                    <td>



                                        @if ($course->is_free == 1)
                                            <button class="btn btn-success">Miễn phí</button>
                                        @else
                                            <button class="btn btn-warning">Mất phí</button>
                                        @endif

                                    </td>

                                    <td>


                                        <a class="btn btn-success" href="{{ route('courses.show', $course) }}">Thêm câu
                                            hỏi</a>

                                        {{-- <form action="{{ route('subjects.destroy', $subject) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa môn học này? Lưu ý các câu hỏi liên quan đến môn học cũng bị xóa!')">Xóa
                                                môn học</button>
                                        </form> --}}
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('courses.edit', ['subject' => $subject, 'course' => $course]) }}"
                                            class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form method="POST"
                                            action="{{ route('topic.destroy', ['subject' => $subject, 'course' => $course]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                onclick="return confirm('Bạn có chắc muốn xóa đề bài này không?')"><i
                                                    class="bi bi-trash  "></i></button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            <!-- Table row -->





                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                    <div class="card-footer bg-transparent px-0">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Content -->
                            <p class="mb-0 text-center text-sm-start"></p>
                            <!-- Pagination -->
                            <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                <ul
                                    class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                    @if ($courses->currentPage() > 1)
                                        <li class="page-item mb-0"><a class="page-link"
                                                href="{{ $courses->url($courses->currentPage() - 1) }}" tabindex=""><i
                                                    class="fas fa-angle-left"></i></a></li>
                                    @endif
                                    @for ($i = 1; $i <= $courses->lastPage(); $i++)
                                        <li class=" page-item mb-0 {{ $courses->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $courses->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    @if ($courses->currentPage() < $courses->lastPage())
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-right"></i></a></li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

            {{-- <style>
            /* Trong resources/css/styles.css hoặc bất kỳ file CSS của bạn */

            nav.hidden {
                display: none;
            }
        </style>
        <!-- Card footer START -->
        <div class="card-footer bg-transparent pt-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start"></p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        {{ $student->links() }}
                    </ul>
                </nav>

            </div>
            <!-- Pagination END -->
        </div> --}}
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
@endsection
