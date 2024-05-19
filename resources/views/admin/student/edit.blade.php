@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">{{$user->name}}</h1>
            </div>
        </div>


        <form action="{{ route('update-user', ['user' => $user->id]) }}" method="post" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="title">Tên đầy đủ</label>
                    <input type="text" class="form-control" name="username" value="{{ $user->username }}" required="">
                </div>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="title">Tên</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="title">Số điện thoại</label>
                    <input type="number" class="form-control" name="phone"
                        value="{{ !empty($user->phone) ? $user->phone : 'Chưa có thông tin số điện thoại' }}">
                </div>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Ngày sinh</label>
                    <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                </div>
                @error('birthday')
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
            <div class="col-md-12">
                <label class="form-label">Mật khẩu</label>
                <input class="form-control" name="password" type="password"
                    placeholder="********">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-12 pt-3">
                <div
                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                    <!-- Image -->
                    <img src="{{ asset($user->image ? 'storage/' . $user->image : '/assets/user/images/default-avatar.jpg') }}" class="h-50px" alt="Bài học Mathematics 0">
                    <div>
                        <h6 class="my-2">Tải ảnh vào đây, hoặc<a href="#!" class="text-primary"> Browse</a>
                        </h6>
                        <label style="cursor:pointer;">
                            <span>
                                <input class="form-control stretched-link custom-cursor-on-hover" type="file"
                                    name="image" id="image" accept="image/*">
                            </span>
                        </label>
                        <p class="small mb-0 mt-2"><b style="color:red">Note:</b> Chỉ có JPG, JPEG and PNG. Kích
                            thước đề xuất là (600*450).</p>
                    </div>
                </div>
            </div>

          

            <button type="submit" class="btn btn-success">Sửa bài học</button>
        </form>
    </div>
@endsection
