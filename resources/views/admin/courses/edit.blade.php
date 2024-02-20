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
               
                <div class="col-lg-12  pt-3">
                    <label class="form-label custom-cursor-default-hover">Miễn phí hoặc mất phí</label>
                    <div class="form-check form-switch form-check-lg mb-0">
                        <input class="form-check-input mt-0 price-toggle me-2 custom-cursor-on-hover" type="checkbox" id="is_free" name="is_free"
                        {{ $course->is_free ? 'checked' : '' }}>
                        <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Bật lên nếu là bài làm miễn phí</label>
                    </div>
                </div>
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
