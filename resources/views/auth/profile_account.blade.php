@extends('indexUser')
@section('contentUsers')
    {{-- <section class="pt-0">
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
                                        src="{{ asset($user->image ? 'storage/' . $user->image : 'assets/images/default-avatar.jpg') }}"
                                        alt="">
                                </div>

                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-4">{{ $user->name }} <i
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
    </section> --}}
    <!-- =======================
                                Page Banner END -->

    <!-- =======================
                                Page content START -->
   

    <section class="pt-0">
        <div class="container">
            <div class="row">


                <!-- Main content START -->
                <div class="col-xl-12">
                    <!-- Edit profile START -->
                    <div class="card bg-transparent border rounded-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom">
                            <h3 class="card-header-title mb-0">Chỉnh sửa hồ sơ</h3>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Form -->
                            <form class="row g-4" action="{{ route('update-profile', ['user' => Auth::user()->id]) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf

                                <!-- Profile picture -->
                                <div class="col-12 justify-content-center align-items-center">
                                    <label class="form-label">Ảnh đại diện</label>
                                    <div class="d-flex align-items-center">
                                        <label class="position-relative me-4" for="profile_picture"
                                            title="Replace this pic">
                                            <!-- Avatar place holder -->
                                            <span class="avatar avatar-xl">
                                                <img id="uploadfile-1-preview"
                                                    class="avatar-img rounded-circle border border-white border-3 shadow"
                                                    src="{{ asset($user->image ? 'storage/' . $user->image : '/assets/user/images/default-avatar.jpg') }}"
                                                    alt="">
                                            </span>

                                        </label>
                                        <!-- Upload button -->
                                        <label class="btn btn-primary-soft mb-0" for="profile_picture">Tải ảnh lên</label>
                                        <input id="profile_picture" name="profile_picture" class="form-control d-none"
                                            type="file">
                                    </div>
                                    @error('profile_picture')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Full name -->
                                <div class="col-12">
                                    <label class="form-label">Tên đầy đủ</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user->name }}" placeholder="Tên đầy đủ">

                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Username -->
                                <div class="col-md-6">
                                    <label class="form-label">Tên</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="username"
                                            value="{{ $user->username }}" placeholder="Tên">
                                    </div>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Email id -->
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input id="encryptedEmail" class="form-control" type="email"
                                        value="{{ $user->email }}" name="email" placeholder="Email" disabled>
                                </div>

                                <!-- Phone number -->
                                <div class="col-md-6">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}"
                                        placeholder="Số điện thoại">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Địa chỉ</label>
                                    <input class="form-control" name="address" type="text" value="{{ $user->address }}"
                                        placeholder="Địa chỉ">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label">Giới tính *</label>
                                    <select class="form-select" name="gender" aria-label="Default select example">
                                        <option value="0" {{ old('gender', $user->gender) == 0 ? 'selected' : '' }}>
                                            Nam</option>
                                        <option value="1" {{ old('gender', $user->gender) == 1 ? 'selected' : '' }}>
                                            Nữ</option>
                                    </select>
                                </div>
                                <!-- Location -->
                                <div class="col-md-6">
                                    <label class="form-label">Ngày sinh</label>
                                    <input class="form-control" name="birthday" type="date"
                                        value="{{ $user->birthday }}">
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                </div>


                                <!-- Education -->


                                <!-- Save button -->
                                <div class="d-sm-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mb-0">Lưu thay đổi</button>
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
                                    <h5 class="card-header-title mb-0">Đổi mật khẩu</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <form action="{{ route('change-password') }}" method="post">
                                        @csrf
                                        @if (session('error'))
                                            @error('birthday')
                                                <span class="invalid-feedback" role="alert">
                                                    <label class="error" id="name_error"
                                                        for="name">{{ session('error') }}</label>
                                                </span>
                                            @enderror
                                        @endif
                                        <!-- Current password -->
                                        <div class="mb-3">
                                            <label class="form-label">Mật khẩu hiện tại</label>
                                            <input class="form-control" name="old_password" type="password"
                                                placeholder="Mật khẩu hiện tại">
                                        </div>
                                        <!-- New password -->
                                        <div class="mb-3">
                                            <label class="form-label"> Mật khẩu mới</label>
                                            <div class="input-group">
                                                <input class="form-control" name="new_password" type="password"
                                                    placeholder="Mật khẩu mới">
                                                <span class="input-group-text p-0 bg-transparent">
                                                    <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                                                </span>
                                            </div>
                                            <div class="rounded mt-1" id="psw-strength"></div>
                                        </div>
                                        <!-- Confirm password -->
                                        <div>
                                            <label class="form-label">Nhập lại mật khẩu</label>
                                            <input class="form-control" name="new_password_confirmation" type="password"
                                                placeholder="Nhập lại mật khẩu">
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-primary mb-0">Đổi mật khẩu</button>
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
