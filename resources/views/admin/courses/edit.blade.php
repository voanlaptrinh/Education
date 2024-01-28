@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Sửa đề bài ({{ $course->name }})</h1>
                </div>
            </div>
            <form method="POST" action="{{ route('courses.update', ['subject' => $subject, 'course' => $course]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Tiêu đề </label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $course->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="name">Course Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $course->name) }}"
                        required>
                </div> --}}
                <div class="form-group pt-3">
                    <label for="title">Thời gian làm bài (phút)</label>
                    <input type="number" name="time_limit" class="form-control"
                        value="{{ old('time_limit', $course->time_limit / 60) }}" >
                    @error('time_limit')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="time_limit">Time Limit (minutes)</label>
                    <input type="number" name="time_limit" class="form-control"
                        value="{{ old('time_limit', $course->time_limit / 60) }}" required>
                </div> --}}
                <div class="col-12 pt-4">
                    <div
                        class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                        <!-- Image -->
                        <!-- Image -->
                        @if ($course->image)
                            <img src="{{ asset('storage/' . $course->image) }}" class="h-50px" alt="{{ $course->name }}">
                        @else
                            <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
                        @endif
                        <div>
                            <h6 class="my-2">Tải ảnh đề bài vào đây, hoặc<a href="#!" class="text-primary">
                                    Browse</a></h6>
                            <label style="cursor:pointer;">
                                <span>
                                    <input class="form-control stretched-link custom-cursor-on-hover" type="file"
                                        name="image" id="image" accept="image/*">
                                </span>
                            </label>
                            <p class="small mb-0 mt-2"><b style="color:red">Note:</b> Chỉ có JPG, JPEG and PNG. Kích
                                thước đề xuất là (600*450).</p>
                        </div>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>

                </div>
                {{-- <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div> --}}

                <button type="submit" class="btn btn-primary mt-3">Sửa đề bài</button>
            </form>
        </div>
    </div>
@endsection
