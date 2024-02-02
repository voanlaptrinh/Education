@extends('index')
@section('content')
    <!-- Trong file resources/views/layouts/app.blade.php -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <section class="bg-blue align-items-center d-flex"
        style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Title -->
                    <h1 class="text-white">Đánh giá</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row g-4 g-lg-0 align-items-center">



                <!-- Contact form START -->
                <div class="col-md-12">
                    <!-- Title -->
                

                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Tiêu đề</label>
                            <div class="mb-4 bg-light-input">

                                <input type="text" name="title" class="form-control form-control-lg" value=""
                                    id="yourName">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Số sao</label>
                            <select name="rating" id="rating" class="form-select">
                                <option value="5">★★★★★ (5)</option>
                                <option value="4">★★★★ (4)</option>
                                <option value="3">★★★ (3)</option>
                                <option value="2">★★ (2)</option>
                                <option value="1">★ (1)</option>

                            </select>

                        </div>
                        <div class="mb-4 bg-light-input pt-3">
                            <label for="textareaBox" class="form-label custom-cursor-default-hover">Nội dung *</label>
                            <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                        </div>
                        <!-- Button -->
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary mb-0" type="submit">Gửi bình luận</button>
                        </div>
                    </form>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">

            <div class="row">


                <!-- Main content START -->
                <div class="col-xl-12 mt-5">
                    <!-- Student review START -->
                    <div class="card border bg-transparent rounded-3">
                        <!-- Header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <div class="row justify-content-between align-middle">
                                <!-- Title -->
                                <div class="col-sm-6">
                                    <h3 class="card-header-title mb-2 mb-sm-0">Đánh giá </h3>
                                </div>

                                <!-- Short by filter -->

                            </div>
                        </div>
                        <!-- Header END -->

                        <!-- Reviews START -->
                        <div class="card-body mt-2 mt-sm-4 ">
                            <div class="mt-2">



                                <!-- Button -->

                            </div>
                            <!-- Review item START -->
                            @foreach ($reviews as $review)
                                <div class="d-sm-flex">
                                    <!-- Avatar image -->
                                    <img class="avatar avatar-lg rounded-circle float-start me-3" src="{{ asset('storage/' . $review->user->image) }}"
                                        alt="avatar">
                                    <div>
                                        <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <div>
                                                <h5 class="m-0">{{ $review->user->name }}</h5>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                                    </li>
                                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                                    </li>
                                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                                    </li>
                                                    <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                                    </li>
                                                    <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i>
                                                    </li>
                                                </ul>
                                                <span class="me-3 small">{{ $review->created_at->format('d/m/Y') }}</span>

                                            </div>
                                            <!-- Review star -->
                                           
                                        </div>
                                        <!-- Content -->
                                        <h6><span class="text-body fw-light">Tiêu đề:</span> {{ $review->title }}
                                        </h6>
                                        <p>{{ $review->content }} </p>
                                        <!-- Button -->

                                    </div>
                                </div>
                            @endforeach
                            <!-- Divider -->
                            <hr>

                        </div>
                        <!-- Reviews END -->

                        <div class="card-footer bg-transparent px-0">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start"></p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul
                                        class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        @if ($reviews->currentPage() > 1)
                                            <li class="page-item mb-0"><a class="page-link"
                                                    href="{{ $reviews->url($reviews->currentPage() - 1) }}"
                                                    tabindex=""><i class="fas fa-angle-left"></i></a></li>
                                        @endif
                                        @for ($i = 1; $i <= $reviews->lastPage(); $i++)
                                            <li
                                                class=" page-item mb-0 {{ $reviews->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $reviews->url($i) }}">{{ $i }}</a>
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
                    <!-- Student review END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <script>
        $(document).ready(function() {
            // Kích hoạt sự kiện kéo cho các icon sao
            $("#starRating i").draggable({
                revert: true,
                helper: "clone",
                start: function(event, ui) {
                    // Lấy giá trị số sao từ số lượng icon
                    var rating = $(this).index() + 1;
                    // Cập nhật giá trị ẩn
                    $("#rating").val(rating);
                }
            });
        });
    </script>
@endsection
