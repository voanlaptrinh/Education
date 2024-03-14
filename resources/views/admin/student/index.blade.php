@extends('admin.index')
@section('contentadmin')
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Tài khoản học sinh</h1>
                {{-- <a href="{{ route('newsAdmin.index') }}" class="btn btn-sm btn-primary mb-0">Create a Course</a> --}}
            </div>
        </div>
 <!-- Course boxes START -->
 <div class="row g-4 mb-4">
    <!-- Course item -->
    <div class="col-sm-6 col-lg-4">
        <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
            <h6>Tổng học sinh</h6>
            <h2 class="mb-0 fs-1 text-primary">{{ $totalStudent }}</h2>
        </div>
    </div>

    <!-- Course item -->
    <div class="col-sm-6 col-lg-4">
        <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
            <h6>Tài khoản hoạt động</h6>
            <h2 class="mb-0 fs-1 text-success">{{ $totalStudent_1}}</h2>
        </div>
    </div>

    <!-- Course item -->
    <div class="col-sm-6 col-lg-4">
        <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
            <h6>Tài khoản bị khóa</h6>
            <h2 class="mb-0 fs-1 text-warning">{{$totalStudent_2}}</h2>
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


                </div>
               
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
                                <th scope="col" class="border-0 rounded-start">Ảnh đại diện</th>
                                <th scope="col" class="border-0 ">Tên </th>
                                <th scope="col" class="border-0">Điện thoại</th>
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

                            @foreach ($student as $studentS)
                                
                                    <!-- Table row -->
                                    <tr>
                                        <td>
                                            <div class="w-60px">
                                                <img src="{{ asset('storage/' . $studentS->image) }}" class="rounded"
                                                    alt="">
                                            </div>
                                        </td>
                                        <!-- Table data -->
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <!-- Image -->

                                                <!-- Title -->
                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a href="#" class="stretched-link">{{ $studentS->name }}</a>
                                                </h6>
                                            </div>
                                        </td>





                                        <!-- Table data -->
                                        <td>{{ $studentS->phone }}</td>
                                        <td>
                                            <form action="{{ route('user.toggleStatus', ['id' => $studentS->id]) }}"
                                                method="post">
                                                @csrf
                                                @if ($studentS->status == 1)
                                                    <button class="btn btn-success">Hoạt động</button>
                                                @else
                                                    <button class="btn btn-warning">Tạm khóa</button>
                                                @endif
                                            </form>
                                        </td>

                                        <!-- Table data -->
                                        {{-- <td>
                                    <a href="{{ route('edit-news', ['id' => $newS->id]) }}"
                                        class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Edit</a>
                                    <div class="btn btn-sm btn-danger mb-0">
                                        <form action="{{ route('news.destroy', $newS->id) }}" method="post">
                                            @csrf
                                            <a type="submit"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa tin tức này?')">Delete</button>
                                        </form>
                                    </div>
                                </td> --}}
                                    </tr>
                            @endforeach





                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->

            <style>
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
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
    <!-- Page main content END -->
@endsection
