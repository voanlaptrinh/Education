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
                                    <a class="list-group-item" href="instructor-earning.html"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                    <a class="list-group-item" href="instructor-studentlist.html"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                                    <a class="list-group-item" href="instructor-order.html"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                                    <a class="list-group-item" href="instructor-review.html"><i class="bi bi-star fa-fw me-2"></i>Reviews</a>
                                    <a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                    <a class="list-group-item" href="instructor-payout.html"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                    <a class="list-group-item active" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                    <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Privacy START -->
                    <div class="border rounded-3">
                        <div class="row">
                            <div class="col-12">
                                <!-- Card START -->
                                <div class="card bg-transparent">
                                    <!-- Card header START -->
                                    <div class="card-header bg-transparent border-bottom">
                                        <h3 class="card-header-title">Settings</h3>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">

                                        <!-- Profile START -->
                                        <h5 class="mb-4">Profile Settings</h5>
                                        <div class="form-check form-switch form-check-md">
                                            <input class="form-check-input" type="checkbox" role="switch" id="profilePublic" checked>
                                            <label class="form-check-label" for="profilePublic">Your profile's public visibility</label>
                                        </div>
                                        <!-- Profile START -->

                                        <hr><!-- Divider -->

                                        <!-- Notification START -->
                                        <h5 class="card-header-title">Notifications Settings</h5>
                                        <p class="mb-2 mt-3">Choose type of notifications you want to receive</p>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy1" checked="">
                                            <label class="form-check-label" for="checkPrivacy1">Notify me via email when logging in</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy2">
                                            <label class="form-check-label" for="checkPrivacy2">Send SMS confirmation for all online payments</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy3" checked="">
                                            <label class="form-check-label" for="checkPrivacy3">Check which device(s) access your account</label>
                                        </div>
                                        <div class="form-check form-switch form-check-md mb-3">
                                            <input class="form-check-input" type="checkbox" id="checkPrivacy4">
                                            <label class="form-check-label" for="checkPrivacy4">Show your profile publicly</label>
                                        </div>
                                        <!-- Notification START -->

                                        <!-- Buttons -->
                                        <div class="d-sm-flex justify-content-end">
                                            <button type="button" class="btn btn-sm btn-primary me-2 mb-0">Save changes</button>
                                            <a class="btn btn-sm btn-outline-secondary mb-0">Cancel</a>
                                        </div>

                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Card END -->
                            </div>
                            <!-- Privacy END -->
                        </div>
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </div>
    </section>
@endsection
