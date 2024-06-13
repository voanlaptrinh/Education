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
    Main Banner END -->

    <!-- =======================
    Inner part START -->
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
                                    <a class="list-group-item active" href="instructor-review.html"><i class="bi bi-star fa-fw me-2"></i>Reviews</a>
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
                    <!-- Student review START -->
                    <div class="card border bg-transparent rounded-3">
                        <!-- Header START -->
                        <div class="card-header bg-transparent border-bottom">
                            <div class="row justify-content-between align-middle">
                                <!-- Title -->
                                <div class="col-sm-6">
                                    <h3 class="card-header-title mb-2 mb-sm-0">Student review</h3>
                                </div>

                                <!-- Short by filter -->
                                <div class="col-sm-4">
                                    <form>
                                        <select class="form-select js-choice z-index-9 bg-white" aria-label=".form-select-sm">
                                            <option value="">Sort by</option>
                                            <option>★★★★★ (5/5)</option>
                                            <option>★★★★☆ (4/5)</option>
                                            <option>★★★☆☆ (3/5)</option>
                                            <option>★★☆☆☆ (2/5)</option>
                                            <option>★☆☆☆☆ (1/5)</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Header END -->

                        <!-- Reviews START -->
                        <div class="card-body mt-2 mt-sm-4">

                            <!-- Review item START -->
                            <div class="d-sm-flex">
                                <!-- Avatar image -->
                                <img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
                                <div>
                                    <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Title -->
                                        <div>
                                            <h5 class="m-0">Frances Guerrero</h5>
                                            <span class="me-3 small">June 11, 2021 at 6:01 am </span>
                                        </div>
                                        <!-- Review star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Content -->
                                    <h6><span class="text-body fw-light">Review on:</span> How to implement sitemap on sass</h6>
                                    <p>Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                    <!-- Button -->
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-primary-soft mb-1 mb-sm-0">Direct message</a>
                                        <a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
                                            Reply
                                        </a>
                                        <!-- collapse textarea -->
                                        <div class="collapse show" id="collapseComment">
                                            <div class="d-flex mt-3">
                                                <textarea class="form-control mb-0" placeholder="Add a comment..." rows="2" spellcheck="false"></textarea>
                                                <button class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i class="fas fa-paper-plane fs-5"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Divider -->
                            <hr>
                            <!-- Review item END -->

                            <!-- Review item START -->
                            <div class="d-sm-flex">
                                <!-- Avatar image -->
                                <img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/03.jpg" alt="avatar">
                                <div>
                                    <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Title -->
                                        <div>
                                            <h5 class="m-0">Louis Ferguson</h5>
                                            <span class="me-3 small">June 18, 2021 at 11:55 am</span>
                                        </div>
                                        <!-- Review star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Content -->
                                    <h6><span class="text-body fw-light">Review on:</span> How does an Angular application work?</h6>
                                    <p>Far advanced settling say finished raillery. Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                    <!-- Button -->
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                                        <a class="btn btn-sm btn-light mb-0">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Divider -->
                            <hr>
                            <!-- Review item END -->

                            <!-- Review item START -->
                            <div class="d-sm-flex">
                                <!-- Avatar image -->
                                <img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/05.jpg" alt="avatar">
                                <div>
                                    <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Title -->
                                        <div>
                                            <h5 class="m-0">Carolyn Ortiz</h5>
                                            <span class="me-3 small">August 28, 2021 at 3:08 pm</span>
                                        </div>
                                        <!-- Review star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Content -->
                                    <h6><span class="text-body fw-light">Review on:</span> What is Flexbox and describe any elaborate on its most used properties??</h6>
                                    <p>Offered chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                    <!-- Button -->
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                                        <a class="btn btn-sm btn-light mb-0">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Divider -->
                            <hr>
                            <!-- Review item END -->

                            <!-- Review item START -->
                            <div class="d-sm-flex">
                                <!-- Avatar image -->
                                <img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/08.jpg" alt="avatar">
                                <div>
                                    <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Title -->
                                        <div>
                                            <h5 class="m-0">Dennis Barrett</h5>
                                            <span class="me-3 small">August 29, 2021 at 5:35 pm</span>
                                        </div>
                                        <!-- Review star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Content -->
                                    <h6><span class="text-body fw-light">Review on:</span> What are the different data types present in javascript?</h6>
                                    <p>Chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                    <!-- Button -->
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                                        <a class="btn btn-sm btn-light mb-0">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Divider -->
                            <hr>
                            <!-- Review item END -->

                            <!-- Review item START -->
                            <div class="d-sm-flex">
                                <!-- Avatar image -->
                                <img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/09.jpg" alt="avatar">
                                <div>
                                    <div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
                                        <!-- Title -->
                                        <div>
                                            <h5 class="m-0">Carolyn Ortiz</h5>
                                            <span class="me-3 small">September 15, 2021 at 8:28 am</span>
                                        </div>
                                        <!-- Review star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                    </div>
                                    <!-- Content -->
                                    <h6><span class="text-body fw-light">Review on:</span> What are object prototypes?</h6>
                                    <p>Chiefly farther Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
                                    <!-- Button -->
                                    <div class="text-end">
                                        <a class="btn btn-sm btn-primary-soft mb-0">Direct message</a>
                                        <a class="btn btn-sm btn-light mb-0">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Review item END -->
                        </div>
                        <!-- Reviews END -->

                        <div class="card-footer border-top">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft my-0 py-0">
                                        <li class="page-item my-0"><a class="page-link" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                                        <li class="page-item my-0"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item my-0 active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item my-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item my-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
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
@endsection
