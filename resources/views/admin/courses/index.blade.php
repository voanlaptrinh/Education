@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">{{ $subject->name }}<span
                        class="badge bg-orange bg-opacity-10 text-orange">Khóa học</span></h1>
                <a href="{{ route('courses.create', $subject) }}" class="btn btn-sm btn-primary mb-0">Thêm mới khóa học</a>
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
                                <th scope="col" class="border-0 rounded-end">Trạng thái</th>
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
                                                <a href="" class="stretched-link">{{ $course->name }}xx</a>
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

                                        {{($course->time_limit/60)}} phút
                                       


                                    </td>

                                    <td>


                                       <a class="btn btn-success" href="{{ route('courses.show', $course) }}">Thêm câu hỏi</a>

                                        {{-- <form action="{{ route('subjects.destroy', $subject) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa môn học này? Lưu ý các câu hỏi liên quan đến môn học cũng bị xóa!')">Xóa
                                                môn học</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Table row -->





                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
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
