@extends('index')
@section('content')
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-200px rounded-0"
                style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
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
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                        src="{{ asset($user->image ? 'storage/' . $user->image : 'assets/images/default-avatar.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-4">{{ $user->name}} <i
                                            class="bi bi-patch-check-fill text-info small"></i></h1>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled Students</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i
                                                class="fas fa-book text-purple me-2"></i>25 Courses</li>
                                    </ul>
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
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
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
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless">
                                    <a class="list-group-item" href="instructor-dashboard.html"><i
                                            class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                                    <a class="list-group-item" href="instructor-manage-course.html"><i
                                            class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                                    <a class="list-group-item" href="instructor-quiz.html"><i
                                            class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
                                    <a class="list-group-item" href="instructor-earning.html"><i
                                            class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                                    <a class="list-group-item" href="instructor-studentlist.html"><i
                                            class="bi bi-people fa-fw me-2"></i>Students</a>
                                    <a class="list-group-item" href="instructor-order.html"><i
                                            class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                                    <a class="list-group-item" href="instructor-review.html"><i
                                            class="bi bi-star fa-fw me-2"></i>Reviews</a>
                                    <a class="list-group-item active" href="instructor-edit-profile.html"><i
                                            class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
                                    <a class="list-group-item" href="instructor-payout.html"><i
                                            class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i
                                            class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                  
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="{{route('logout')}}"><i
                                            class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Edit profile START -->
                    <div class="card bg-transparent border rounded-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom">
                            <h3 class="card-header-title mb-0">Edit Profile</h3>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Form -->
                            <form class="row g-4" action="{{ route('update-profile' , ['user'=>Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                                <!-- Profile picture -->
                                <div class="col-12 justify-content-center align-items-center">
                                    <label class="form-label">Profile picture</label>
                                    <div class="d-flex align-items-center">
                                        <label class="position-relative me-4" for="profile_picture"
                                            title="Replace this pic">
                                            <!-- Avatar place holder -->
                                            <span class="avatar avatar-xl">
                                                <img id="uploadfile-1-preview"
                                                    class="avatar-img rounded-circle border border-white border-3 shadow"
                                                    src="{{ asset($user->image ? 'storage/' . $user->image : '/assets/user/images/default-avatar.jpg') }}" alt="">
                                            </span>
                                            <!-- Remove btn -->
                                            <button type="button" class="uploadremove"><i
                                                    class="bi bi-x text-white"></i></button>
                                        </label>
                                        <!-- Upload button -->
                                        <label class="btn btn-primary-soft mb-0" for="profile_picture">Change</label>
                                        <input id="profile_picture" name="profile_picture" class="form-control d-none" type="file">
                                    </div>
                                </div>

                                <!-- Full name -->
                                <div class="col-12">
                                    <label class="form-label">Full name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                            placeholder="First name">

                                    </div>
                                </div>

                                <!-- Username -->
                                <div class="col-md-6">
                                    <label class="form-label">Username</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                                    </div>
                                </div>

                                <!-- Email id -->
                                <div class="col-md-6">
                                    <label class="form-label">Email id</label>
                                    <input id="encryptedEmail" class="form-control" type="email"
                                        value="{{ $user->email }}" name="email" placeholder="Email" disabled>
                                </div>

                                <!-- Phone number -->
                                <div class="col-md-6">
                                    <label class="form-label">Phone number</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}"
                                        placeholder="Phone number">
                                </div>

                                <!-- Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <input class="form-control" name="address" type="text" value="{{ $user->address }}">
                                </div>


                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label">Giới tính *</label>
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option selected="">Giới tính</option>
                                        <option value="0" {{ $user->gender === 0 ? 'selected' : '' }}>Nam</option>
                                        <option value="1" {{ $user->gender === 1 ? 'selected' : '' }}>Nữ</option>
                                    </select>
                                </div>
                                <!-- Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Ngày sinh</label>
                                    <input class="form-control" name="birthday" type="date" value="{{ $user->birthday }}">
                                </div>


                                <!-- Education -->


                                <!-- Save button -->
                                <div class="d-sm-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mb-0">Save changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Edit profile END -->

                    <div class="row g-4 mt-3">
                       
                       

                        <!-- Password change START -->
                        <div class="col-lg-12">
                            <div class="card border bg-transparent rounded-3">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title mb-0">Update password</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <form action="{{ route('change-password') }}" method="post">
                                        @csrf
                                        @if (session('error'))
                                        <div class="alert alert-error">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <!-- Current password -->
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input class="form-control" name="old_password" type="password" placeholder="Enter current password">
                                    </div>
                                    <!-- New password -->
                                    <div class="mb-3">
                                        <label class="form-label"> Enter new password</label>
                                        <div class="input-group">
                                            <input class="form-control" name="new_password" type="password" placeholder="Enter new password">
                                            <span class="input-group-text p-0 bg-transparent">
                                                <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                                            </span>
                                        </div>
                                        <div class="rounded mt-1" id="psw-strength"></div>
                                    </div>
                                    <!-- Confirm password -->
                                    <div>
                                        <label class="form-label">Confirm new password</label>
                                        <input class="form-control" name="new_password_confirmation"  type="password" placeholder="Enter new password">
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary mb-0">Change password</button>
                                    </div>
                                    </form>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Password change end -->
                    </div>
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var encryptedEmailInput = document.getElementById('encryptedEmail');
            encryptedEmailInput.addEventListener('input', function(event) {
                event.preventDefault();
                alert('Không thể chỉnh sửa trường này.');
            });
        });
    </script>
@endsection
