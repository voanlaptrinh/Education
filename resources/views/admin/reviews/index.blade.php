<!-- Trong file resources/views/admin/classes/index.blade.php -->
@extends('admin.index')
@section('contentadmin')
    <!-- Modal -->
    <div class="modal fade" id="reviewModal{{ $review->id }}" tabindex="-1"
        aria-labelledby="reviewModalLabel{{ $review->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel{{ $review->id }}">Chi Tiết
                        Đánh Giá</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Hiển thị nội dung chi tiết của đánh giá -->
                    <h6><span class="text-body fw-light">Tiêu đề:</span> {{ $review->title }}
                    </h6>
                    <p>{{ $review->content }}</p>
                </div>
            </div>
        </div>
    </div>


    {{--  --}}
    <div class="page-content-wrapper border">


        <!-- Course boxes START -->
        {{-- <div class="row g-4 mb-4">
            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                    <h6>Tổng lớp học</h6>
                    <h2 class="mb-0 fs-1 text-primary">{{ $totalClasses }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Lớp học hoạt động</h6>
                    <h2 class="mb-0 fs-1 text-success">{{ $activeClasses }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Lớp học tạm ngừng</h6>
                    <h2 class="mb-0 fs-1 text-warning">{{ $unactiveClasses }}</h2>
                </div>
            </div>
        </div> --}}
        <!-- Course boxes END -->

        <!-- Card START -->
        <div class="card bg-transparent border">

            <!-- Card header START -->
            {{-- <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative" action="{{ route('classes.index') }}" method="get">
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
                <!-- Search and select END -->
            </div> --}}
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
                                <th scope="col" class="border-0 rounded-start">Tên lớp học</th>
                                <th scope="col" class="border-0">Người đăng</th>

                                <th scope="col" class="border-0">Trạng thái </th>

                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->

                                            <!-- Title -->
                                            <h6 class="table-responsive-title mb-0 ms-2">
                                                <a href="#" class="stretched-link">{{ $review->title }}</a>
                                            </h6>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="ms-2">
                                                <h6 class="mb-0 fw-light">{{ $review->user->name }}</h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>
                                        <form action="{{ route('reviews.toggleStatus', ['id' => $review->id]) }}"
                                            method="post">
                                            @csrf
                                            @if ($review->status == 1)
                                                <button class="btn btn-success">Hiện</button>
                                            @else
                                                <button class="btn btn-warning">Tạm ẩn</button>
                                            @endif
                                        </form>


                                    </td>

                                    <td class="d-flex">
                                        <button type="button" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 "
                                            data-bs-toggle="modal" data-bs-target="#reviewModal{{ $review->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        {{-- <button type="button" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0   "
                                            data-bs-toggle="modal" data-bs-target="#classModal" data-action="edit"
                                            data-class-id="{{ $review->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button> --}}

                                        <form action="{{ route('classes.destroy', $review) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa Lớp học này? Lưu ý các khóa học liên quan đến lớp học cũng bị xóa!')"><i
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
                            @if ($reviews->currentPage() > 1)
                                <li class="page-item mb-0"><a class="page-link"
                                        href="{{ $reviews->url($reviews->currentPage() - 1) }}" tabindex=""><i
                                            class="fas fa-angle-left"></i></a></li>
                            @endif
                            @for ($i = 1; $i <= $reviews->lastPage(); $i++)
                                <li class=" page-item mb-0 {{ $reviews->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $reviews->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($reviews->currentPage() < $reviews->lastPage())
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
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
        $('#classModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var action = button.data('action');
            var classId = button.data('class-id');
            var modal = $(this);
            var form = modal.find('form');
            var submitBtn = modal.find('#submitBtn');


                $.ajax({
                    url: `{{ route('reviews.show', ':id') }}`.replace(':id', classId),
                    method: 'GET',
                    success: function(response) {
                        modal.find('#name').val(response.name || '');
                        modal.find('#status').val(response.status);
                        modal.find('#classId').val(response.id);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
           
        });
    </script>
@endsection
