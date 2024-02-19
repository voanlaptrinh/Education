@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm mới bài học</h1>
            </div>
        </div>
        <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <label for="title">Tiêu đề </label>
                <input type="text" class="form-control" name="title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            {{-- <label for="title">Title:</label>
            <input type="text" name="title" > --}}
            <div class="form-group pt-3">

                <label for="title">Mô tả ngắn </label>
                <textarea name="description"  class="form-control" rows="3"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            {{-- <label for="description">Description:</label>
            <textarea name="description" ></textarea> --}}
            <div class="form-group pt-3">

                <label for="content">Nội dung </label>
                <textarea name="content"  class="form-control" rows="3"></textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            {{-- <label for="content">Content:</label>
            <textarea name="content" ></textarea> --}}
            <div class="col-12 pt-3">
                <div
                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                    <!-- Image -->
                    <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
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
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                </div>
               
            </div>
            {{-- <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*" > --}}
            <div class="row mb-4">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Môn học tương ứng *</label>
                    <select class="form-select" name="subject_id" aria-label="Default select example" fdprocessedid="j04kyp">
                        @foreach ($subject as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->class->name }})</option>
                       @endforeach
                    </select>
                </div>

            </div>
            <!-- Thêm trường select để chọn khóa học -->
            {{-- <label for="subject_id">Select Course:</label>
            <select name="subject_id" >
                @foreach ($subject as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }} ({{ $subject->class->name }}) </option>
                @endforeach
            </select> --}}

            <!-- Thêm các trường dữ liệu khác nếu cần -->

            <button type="submit" class="btn btn-success">Thêm mới</button>
        </form>
    </div>
@endsection
