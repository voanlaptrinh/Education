@extends('index')
@section('content')
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <!-- Profile banner START -->
                <div class="col-12">
                    <div class="card bg-transparent card-body p-0">
                        <div class="row d-flex justify-content-between">
                            <!-- Avatar -->
                            <div class="col-auto mt-4 mt-md-0">
                                <div class="avatar avatar-xxl mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-4">Lori Stevens <i class="bi bi-patch-check-fill text-info small"></i></h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled Students</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                    </ul>
                                </div>
                                <!-- Button -->
                                <div class="d-flex align-items-center mt-2 mt-md-0">
                                    <a href="instructor-create-course.html" class="btn btn-success mb-0">Create a course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Profile banner END -->

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
                            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless">
                                    <a class="list-group-item" href="instructor-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                    <a class="list-group-item" href="instructor-manage-course.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    <a class="list-group-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                    <a class="list-group-item active" href="instructor-earning.html"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                    <a class="list-group-item" href="instructor-studentlist.html"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                    <a class="list-group-item" href="instructor-order.html"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                                    <a class="list-group-item" href="instructor-review.html"><i class="bi bi-star fa-fw me-2"></i>Reviews</a>
                                    <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                    <a class="list-group-item" href="instructor-payout.html"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                    <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">

                    <!-- Earning boxes START -->
                    <div class="row g-4">
                        <!-- Earning item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="text-center p-4 bg-light rounded-3">
                                <h6 class="text-body">Sales this month</h6>
                                <h2 class="mb-0 fs-1">$899.95</h2>
                            </div>
                        </div>

                        <!-- Earning item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="text-center p-4 bg-light rounded-3">
                                <h6 class="text-body">To be paid
                                    <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax">
                                        <i class="bi bi-info-circle-fill small"></i>
                                    </a>
                                </h6>
                                <h2 class="mb-0 fs-1">$750.35</h2>
                            </div>
                        </div>

                        <!-- Earning item -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="text-center p-4 bg-light rounded-3">
                                <h6 class="text-body">Lifetime Earnings</h6>
                                <h2 class="mb-0 fs-1">$4882.65</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Earning boxes END -->

                    <!-- Chart START -->
                    <div class="card card-body bg-transparent rounded-top border overflow-hidden p-0 mt-5">
                        <div class="row g-4 p-4">
                            <!-- Content -->
                            <div class="col-sm-6 col-md-4">
                                <span class="badge text-bg-dark">Current Month</span>
                                <h4 class="text-primary my-2">$35000</h4>
                                <p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last month</p>
                            </div>

                            <!-- Content -->
                            <div class="col-sm-6 col-md-4">
                                <span class="badge text-bg-dark">Last Month</span>
                                <h4 class="my-2">$28000</h4>
                                <p class="mb-0"><span class="text-danger me-1">0.10%<i class="bi bi-arrow-down"></i></span>Then last month</p>
                            </div>
                        </div>

                        <!-- Apex chart -->
                        <div id="ChartPayoutEarning"></div>

                    </div>
                    <!-- Chart END -->

                    <!-- Earning chart START -->
                    <div class="card bg-transparent border rounded-3 mt-5">
                        <!-- Card title -->
                        <div class="card-header bg-transparent">
                            <h5 class="mb-0">Top five earning sources</h5>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row g-4 g-md-5 align-items-center">
                                <!-- Chart -->
                                <div class="col-md-6">
                                    <div id="ChartPageViews"></div>
                                </div>

                                <!-- Content -->
                                <div class="col-md-6">
                                    <ul class="list-group list-group-borderless mb-3">
                                        <li class="list-group-item"><h6 class="mb-0">Course Name</h6></li>
                                        <li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>The Complete Digital Marketing Course - 12 Courses in 1</li>
                                        <li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Google Ads Training: Become a PPC Expert</li>
                                        <li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Microsoft Excel - Excel from Beginner to Advanced</li>
                                        <li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Create a Design System in Figma</li>
                                        <li class="list-group-item"><i class="text-secondary fas fa-circle me-2"></i>Deep Learning with React-Native</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earning chart END -->

                </div>
                <!-- Main content END -->

            </div><!-- Row END -->
        </div>
    </section>

@endsection
