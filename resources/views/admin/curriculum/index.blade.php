@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Video bài giảng <span
                        class="badge bg-orange bg-opacity-10 text-orange"></span></h1>
                <a href="{{ route('curriculum.create') }}" class="btn btn-sm btn-primary mb-0">Thêm mới Video bài giảng</a>
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
                        <form class="rounded position-relative" action="{{ route('curriculum.index') }}" method="get">
                            <input name="query" value="{{ $searchQuery }}" class="form-control bg-body" type="search"
                                placeholder="Search" aria-label="Search">
                            <button
                                class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>

                    <!-- Select option -->
                  
                </div>
                <script>
                    $(document).ready(function() {
                        $('.js-choice').on('change', function() {
                            $('#lessonSearchForm').submit();
                        });
                    });
                </script>

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

                                <th scope="col" class="border-0">Bài học</th>
                                <th scope="col" class="border-0">Bài giảng</th>
                                <th scope="col" class="border-0">Ngày</th>
                                <th scope="col" class="border-0 rounded-end">Hành động</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($curriculum as $chapter)
                                <tr>
                                    <!-- Table data -->


                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $chapter->title }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $chapter->lesson->title }}</td>
                                    <td>
                                        <a href="{{ route('lectures.index', ['chapter' => $chapter]) }}"
                                            class="btn btn-sm btn-success me-1 mb-1 mb-md-0">Xem bài giảng</a>
                                    </td>
                                    <td>
                                        {{ $chapter->created_at->format('d/m/Y') }}
                                    </td>


                                    <td class="d-flex"> 
                                        <a href="{{ route('curriculum.edit', ['chapter' => $chapter]) }}"
                                            class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('curriculum.destroy', ['chapter' => $chapter]) }}"
                                        method="post"
                                        onsubmit="return confirm('Bạn có chắc chắn xóa?')">
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

            <div class="card-footer bg-transparent pt-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start"></p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul
                        class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        @if ($curriculum->currentPage() > 1)
                            <li class="page-item mb-0"><a class="page-link"
                                    href="{{ $curriculum->url($curriculum->currentPage() - 1) }}"
                                    tabindex=""><i class="fas fa-angle-left"></i></a></li>
                        @endif
                        @for ($i = 1; $i <= $curriculum->lastPage(); $i++)
                            <li
                                class=" page-item mb-0 {{ $curriculum->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link"
                                    href="{{ $curriculum->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        @if ($curriculum->currentPage() < $curriculum->lastPage())
                        <li class="page-item mb-0"><a class="page-link" href="{{ $curriculum->url($curriculum->currentPage() + 1) }}"><i
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
