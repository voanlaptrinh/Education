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
                                <h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="845"
                                    data-purecounter-delay="200">0</h2>
                                <span class="mb-0 h2 ms-1">hrs</span>
                            </div>
                            <span class="mb-0 h6 fw-light">Total Watch Time</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                class="bi bi-stopwatch-fill fa-fw"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter boxes END -->

        <!-- Chart and Ticket START -->
        <div class="row g-4 mb-4">

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

        <!-- Top listed Cards START -->
        <div class="row g-4">

            <!-- Top instructors START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">

                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                        <h5 class="card-header-title">Top Instructors</h5>
                        <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-4">

                        <!-- Instructor item START -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Lori Stevens<i
                                            class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-1"></i>25 Courses</li>
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                        </div>
                        <!-- Instructor item END -->

                        <hr><!-- Divider -->

                        <!-- Instructor item START -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Dennis Barrett</h6>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-1"></i>18 Courses</li>
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                        </div>
                        <!-- Instructor item END -->

                        <hr><!-- Divider -->

                        <!-- Instructor item START -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Jacqueline Miller<i
                                            class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-1"></i>21 Courses</li>
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-1"></i>4.8/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                        </div>
                        <!-- Instructor item END -->

                        <hr><!-- Divider -->

                        <!-- Instructor item START -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Billy Vasquez</h6>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-1"></i>15 Courses</li>
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                        </div>
                        <!-- Instructor item END -->

                        <hr><!-- Divider -->

                        <!-- Instructor item START -->
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Amanda Reed<i
                                            class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-1"></i>29 Courses</li>
                                        <li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0">View</a>
                        </div>
                        <!-- Instructor item END -->

                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Top instructors END -->

            <!-- Notice Board START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom p-4">
                        <h5 class="card-header-title">Notice board</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-4">
                        <div class="custom-scrollbar h-300px">

                            <!-- Notice Board item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <div class="icon-lg bg-purple bg-opacity-10 text-purple rounded-2 flex-shrink-0"><i
                                            class="fas fa-user-tie fs-5"></i></div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                        <h6 class="mb-0"><a href="#" class="stretched-link">Join New
                                                Instructor</a></h6>
                                        <p class="mb-0">Amongst moments do in arrived Fat weddings believed prospect</p>
                                        <span class="small">5 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->

                            <hr><!-- Divider -->

                            <!-- Notice Board item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <div class="icon-lg bg-orange bg-opacity-10 text-orange rounded-2 flex-shrink-0"><i
                                            class="fas fa-book-open fs-5"></i></div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                        <h6 class="mb-0"><a href="#" class="stretched-link">Update New Course</a>
                                        </h6>
                                        <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                        <span class="small">4 hour ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->

                            <hr><!-- Divider -->

                            <!-- Notice Board item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <div class="icon-lg bg-info bg-opacity-10 text-info rounded-2 flex-shrink-0"><i
                                            class="fas fa-book fs-5"></i></div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                        <h6 class="mb-0"><a href="#" class="stretched-link">Update Syllabus</a>
                                        </h6>
                                        <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                        <span class="small">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->

                            <hr><!-- Divider -->

                            <!-- Notice Board item START -->
                            <div class="d-flex justify-content-between position-relative">
                                <div class="d-sm-flex">
                                    <div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0"><i
                                            class="fas fa-globe fs-5"></i></div>
                                    <!-- Info -->
                                    <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                        <h6 class="mb-0"><a href="#" class="stretched-link">Update New
                                                Feature</a></h6>
                                        <p class="mb-0">Arrived Fat weddings believed prospect</p>
                                        <span class="small">3 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->
                        </div>
                    </div>
                    <!-- Card body END -->

                    <!-- Card footer START -->
                    <div class="card-footer border-top">
                        <div class="alert alert-success d-flex align-items-center mb-0 py-2">
                            <div>
                                <small class="mb-0">45 more notices listed</small>
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-sm btn-success-soft mb-0" href="#!"> View all </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card footer START -->
                </div>
            </div>
            <!-- Notice Board END -->

            <!-- Traffic sources START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">

                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
                        <h5 class="card-header-title">Traffic Sources</h5>
                        <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-4">
                        <!-- Chart -->
                        <div class="col-sm-6 mx-auto">
                            <div id="ChartTrafficViews"></div>
                        </div>

                        <!-- Content -->
                        <ul class="list-group list-group-borderless mt-3">
                            <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Create a Design
                                System in Figma</li>
                            <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>The Complete
                                Digital Marketing Course - 12 Courses in 1</li>
                            <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Google Ads
                                Training: Become a PPC Expert</li>
                            <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Microsoft Excel -
                                Excel from Beginner to Advanced</li>
                        </ul>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
            <!-- Traffic sources END -->

        </div>
        <!-- Top listed Cards END -->

    </div>
    <!-- Page main content END -->
@endsection
