<!-- Trong file resources/views/admin/classes/index.blade.php -->
@extends('admin.index')
@section('contentadmin')
    <!-- Modal -->


    <div class="modal fade " id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="viewReviewLabel">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;" id="title"></font>
                        </font>
                    </h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Đóng"><i
                            class="bi bi-x-lg"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="d-md-flex">
                        <!-- Avatar -->
                        <div class="avatar avatar-md me-4 flex-shrink-0">
                            <img class="avatar-img rounded-circle avt_review" src="" alt="hình đại diện">
                        </div>
                        <!-- Text -->
                        <div>
                            <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                <h5 class="me-3 mb-0">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;" class="text-white2"></font>
                                    </font>
                                </h5>
                                <!-- Review star -->
                                <li class="list-inline-item me-0 d-flex">(<div id="rating"></div>)<i
                                        class="fas fa-star text-warning"></i></li>

                            </div>
                            <!-- Info -->
                            <p class="small mb-2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;" id="create_at"></font>
                                </font>
                            </p>
                            <p class="mb-2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;" id="content"></font>
                                </font>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Đóng</font>
                        </font>
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{--  --}}
    <div class="page-content-wrapper border">


        <!-- Course boxes START -->
        <div class="row g-4 mb-4">
            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                    <h6>Tổng đánh giá</h6>
                    <h2 class="mb-0 fs-1 text-primary">{{ $totalReview }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                    <h6>Đánh giá hiện</h6>
                    <h2 class="mb-0 fs-1 text-success">{{ $activeReview }}</h2>
                </div>
            </div>

            <!-- Course item -->
            <div class="col-sm-6 col-lg-4">
                <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                    <h6>Đánh giá ẩn</h6>
                    <h2 class="mb-0 fs-1 text-warning">{{ $unactiveReview }}</h2>
                </div>
            </div>
        </div>
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
                                <th scope="col" class="border-0 rounded-start">Tiêu đề</th>
                                <th scope="col" class="border-0">Người đăng</th>

                                <th scope="col" class="border-0">Trạng thái </th>

                                <th scope="col" class="border-0 rounded-end">Thao tác</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>
                            @if (count($reviews) > 0)
                                @foreach ($reviews as $review)
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class="d-flex align-items-center position-relative">
                                                <!-- Image -->

                                                <!-- Title -->
                                                <h6 class="table-responsive-title mb-0 ms-2">
                                                    <a class="stretched-link">{{ $review->title }}</a>
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
                                                    <button class="btn btn-success">Hiển thị</button>
                                                @else
                                                    <button class="btn btn-warning">Tạm ẩn</button>
                                                @endif
                                            </form>


                                        </td>

                                        <td class="d-flex">
                                            <button type="button" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0 "
                                                data-bs-toggle="modal" data-bs-target="#reviewModal"
                                                data-class-id="{{ $review->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <form action="{{ route('reviews.destroy', $review) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa đánh giá này? Đánh giá xoá sẽ không thể khôi phục!')"><i
                                                        class="bi bi-trash  "></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="4">Chưa có đánh giá nào</td>
                                 
                                </tr>
                                
                            @endif

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
                <div class="container">
                    <div class="d-flex justify-content-center">
                        {{ $reviews->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- Pagination END -->
            </div>


        </div>
        <!-- Card END -->
    </div>
    <script>
        $('#reviewModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var classId = button.data('class-id');
            var modal = $(this);
            $.ajax({
                url: `{{ route('reviews.show', ':id') }}`.replace(':id', classId),
                method: 'GET',
                success: function(response) {
                    console.log(response.user.name);
                    modal.find('#title').text(response.title || '');
                    modal.find('#content').text(response.content);
                    modal.find('#rating').text(response.rating || '');
                    var createdAt = new Date(response.created_at);
                    var formattedDate = createdAt.toLocaleDateString('en-US', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });

                    modal.find('#create_at').text(formattedDate);

                    // Thêm thông tin người dùng vào modal
                    modal.find('.avt_review').attr('src',
                        `{{ asset('storage/') }}/${response.user.image}`);
                    modal.find('.text-white2').text(response.user.name);
                },
                error: function(error) {
                    console.log(error);
                }
            });

        });
    </script>
@endsection
