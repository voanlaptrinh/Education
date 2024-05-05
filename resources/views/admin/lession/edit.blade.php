@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Sửa bài học {{ $lesson->title }}</h1>
            </div>
        </div>


        <form action="{{ route('lessons.update', ['lesson' => $lesson]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Sử dụng method PUT cho việc sửa đổi -->
            <div class="form-group">

                <label for="title">Tiêu đề </label>
                <input type="text" class="form-control" name="title" value="{{ $lesson->title }}" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group pt-3">

                <label for="title">Mô tả ngắn </label>
                <textarea name="description" required class="form-control" rows="3">{{ $lesson->description }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group pt-3">

                <label for="content">Nội dung </label>
                <textarea name="content" required class="form-control" rows="3">{{ $lesson->content }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>




            <div class="col-12 pt-3">
                <div
                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                    <!-- Image -->
                    @if ($lesson->image)
                        <img src="{{ asset('storage/' . $lesson->image) }}" class="h-50px" alt="{{ $lesson->title }}">
                    @else
                        <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
                    @endif
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
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Môn học tương ứng *</label>
                    <select class="form-select" name="subject_id" aria-label="Default select example" fdprocessedid="j04kyp">
                        @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ $subject->id == $lesson->subject_id ? 'selected' : '' }} >{{ $subject->name }}</option>
                       @endforeach
                    </select>
                </div>

            </div>
            <!-- Thêm trường select để chọn môn học -->
            {{-- <label for="subject_id">Select Subject:</label>
            <select name="subject_id" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $subject->id == $lesson->subject_id ? 'selected' : '' }}>
                        {{ $subject->name }}</option>
                @endforeach
            </select> --}}



            <!-- Thêm các trường dữ liệu khác nếu cần -->

            <button type="submit" class="btn btn-success">Sửa bài học</button>
        </form>
    </div>
@endsection
