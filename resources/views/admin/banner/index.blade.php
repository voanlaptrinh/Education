@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Sửa nội dung banner</h1>
            </div>
            <form method="POST" action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Tiêu đề </label>
                    <input type="text" name="name" class="form-control" value="{{  old('name', $banner->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>
                <div class="row pt-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title">Đường dẫn button </label>
                            <input type="text" name="link_button" value="{{ $banner->link_button }}"
                                class="form-control">
                            @error('link_button')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title">Đường dẫn video youtube</label>
                            <input type="text" name="link_video" value="{{ $banner->link_video }}" class="form-control">
                            @error('link_video')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Mô tả</label>
                            <input type="text" name="description" value="{{ $banner->description }}"
                                class="form-control">
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 pt-4">
                    <div
                        class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                        <!-- Image -->
                        <!-- Image -->
                        @if ($banner->image_path)
                            <img src="{{ asset('storage/' . $banner->image_path) }}" class="h-50px"
                                alt="{{ $banner->name }}">
                        @else
                            <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
                        @endif
                        <div>
                            <h6 class="my-2">Tải ảnh đề bài vào đây, hoặc<a href="#!" class="text-primary">
                                    Browse</a></h6>
                            <label style="cursor:pointer;">
                                <span>
                                    <input class="form-control stretched-link custom-cursor-on-hover" type="file"
                                        name="image_path" id="image_path">
                                </span>
                            </label>
                            <p class="small mb-0 mt-2"><b style="color:red">Note:</b> Chỉ có JPG, JPEG and PNG. Kích
                                thước đề xuất là (600*450).</p>
                        </div>
                        @error('image_path')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>

                </div>
                <!-- Các trường dữ liệu của banner -->


                <!-- Thêm các trường khác nếu cần -->

                <button type="submit" class="btn btn-primary mt-3">Lưu thay đổi</button>
            </form>
            @if (session('success'))
                <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible fade show mt-2 mb-0 rounded-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
    @endsection
