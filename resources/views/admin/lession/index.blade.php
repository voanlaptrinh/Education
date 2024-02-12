@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Bài học <span class="badge bg-orange bg-opacity-10 text-orange">245</span></h1>
                <a href="{{ route('lesson.create') }}" class="btn btn-sm btn-primary mb-0">Thêm mới bài học</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative" action="{{ route('lesson.index') }}" method="get">
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
                                <th scope="col" class="border-0 rounded-start">Tiêu đề</th>
                                <th scope="col" class="border-0">Ảnh mô tả</th>
                                <th scope="col" class="border-0">Số lượt xem</th>
                                <th scope="col" class="border-0">Môn học</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($lessons as $lesson)
                          
                                <tr>
                                    <!-- Table data -->
                                  

                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $lesson->title }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="w-60px">
                                                <img src="{{ asset('storage/' . $lesson->image) }}" class="rounded"
                                                    alt="">
                                            </div>
                                            <!-- Title -->

                                        </div>
                                    </td>
                                 

                                    <!-- Table data -->
                                    <td> {{ $lesson->views }}</td>
                                    <td> {{$lesson->subject->name}} ({{ $lesson->subject->class->name }})</td>
                                    {{-- <td>
                                        <a href="{{ route('lectures.index', ['lesson' => $lesson]) }}"
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Thêm bài giảng</a>
                                    </td> --}}
                                    <!-- Table data -->
                                    <td class="d-flex">
                                        <a href="{{ route('lessons.edit', ['lesson' => $lesson]) }}"
                                            class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 "> <i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('lessons.destroy', ['lesson' => $lesson]) }}"
                                            method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this lesson?')">
                                            @csrf
                                            @method('DELETE') <!-- Sử dụng method DELETE cho việc xóa -->
                                            <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0" type="submit"><i
                                                class="bi bi-trash  "></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach





                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-transparent px-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul
                            class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            @if ($lessons->currentPage() > 1)
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $lessons->url($lessons->currentPage() - 1) }}"
                                        tabindex=""><i class="fas fa-angle-left"></i></a></li>
                            @endif
                            @for ($i = 1; $i <= $lessons->lastPage(); $i++)
                                <li
                                    class=" page-item mb-0 {{ $lessons->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link"
                                        href="{{ $lessons->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($lessons->currentPage() < $lessons->lastPage())
                            <li class="page-item mb-0"><a class="page-link" href="#"><i
                                class="fas fa-angle-right"></i></a></li> 

                            @endif
                       
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
@endsection
