@extends('admin.index')
@section('contentadmin')
    <!-- Top bar END -->

    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="h3 mb-2 mb-sm-0">Trang chủ</h1>
            </div>
        </div>

        <!-- Counter boxes START -->
        <div class="row g-4 mb-4">
            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                data-purecounter-end="{{ $totalLectures }}" data-purecounter-delay="200">0</h2>
                            <span class="mb-0 h6 fw-light">Video bài giảng</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fas fa-tv fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                data-purecounter-end="{{ $totalReviews }}" data-purecounter-delay="200">0</h2>
                            <span class="mb-0 h6 fw-light">Đánh giá</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-purple text-white mb-0"><i
                                class="fab fa-facebook-messenger fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                data-purecounter-end="{{ $totalUser }}" data-purecounter-delay="200">0</h2>
                            <span class="mb-0 h6 fw-light">Tài khoản đăng kí</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                                class="fas fa-user-graduate fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-success bg-opacity-10 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <div class="d-flex">
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="{{$totalContact}}"
                                    data-purecounter-delay="200">0</h2>
                            </div>
                            <span class="mb-0 h6 fw-light">Liên hệ</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                class="fas fa-id-card-alt fa-fw"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter boxes END -->

        <!-- Chart and Ticket START -->
        <div class="row g-4 mb-4">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart START -->
            <div class="col-xxl-8">
                <div class="card shadow h-100">

                    <!-- Card header -->
                    <div class="card-header p-4 border-bottom">
                        <h5 class="card-header-title">Earnings</h5>
                    </div>

                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Apex chart -->
                        <div id="ChartPayout"></div>
                    </div>
                </div>
            </div>
            <!-- Chart END -->

            <!-- Ticket START -->
            <div class="col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                        <h5 class="card-header-title">Đánh giá</h5>
                        <a href="{{ route('reviews.admin') }}" class="btn btn-link p-0 mb-0">Tất cả</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-4">
                        @foreach ($reviews->take(4) as  $item)
                            <!-- Ticket item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <!-- Avatar -->
                                    @if (!empty($review->user->image))
                                        <div class="avatar avatar-md flex-shrink-0">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ asset('storage/' . $review->user->image) }}" alt="avatar">
                                        </div>
                                    @else
                                        <div class="avatar avatar-md flex-shrink-0">
                                            <img class="avatar-img rounded-circle"
                                                src="/assets/user/images/default-avatar.png" alt="avatar">
                                        </div>
                                    @endif

                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-2 mt-2 mt-sm-0 df" style=" overflow-wrap: break-word;">
                                        <h6 class="mb-0"><a href="#"
                                                class="stretched-link">{{ $item->user->name }}</a></h6>
                                        <div class="col-12"></div>
                                        
                                        <ul class="list-inline mb-0">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <li class="list-inline-item me-0">
                                                    @if ($i <= $item->rating)
                                                        <i class="fas fa-star text-warning"></i>
                                                    @else
                                                        <i class="far fa-star text-warning"></i>
                                                    @endif
                                                </li>
                                            @endfor
                                        </ul>
                                      
                                        <span class="small">{{$item->created_at->format('d/m/Y')}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Ticket item END -->

                            <hr><!-- Divider -->
                        @endforeach




                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Ticket END -->
        </div>
        <!-- Chart and Ticket END -->

       

    </div>
    <!-- Page main content END -->
@endsection
