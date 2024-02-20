@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm tiêu đề cho câu hỏi</h1>
            </div>
        </div>
        <form method="post" action="{{ route('courses.store', $subject) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Tiêu đề </label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group pt-3">
                <label for="title">Thời gian làm bài (phút)</label>
                <input type="number" name="time_limit" min="1" class="form-control">
                @error('time_limit')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
          
          
            <div class="col-lg-12  pt-3">
                <label class="form-label custom-cursor-default-hover">Miễn phí hoặc mất phí</label>
                <div class="form-check form-switch form-check-lg mb-0">
                    <input class="form-check-input mt-0 price-toggle me-2 custom-cursor-on-hover" type="checkbox" name="is_free" id="is_free" value="1" {{ old('is_free') ? 'checked' : '' }}>
                    <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Bật lên nếu là bài làm miên phí</label>
                </div>
            </div>
            <div class="col-12 pt-4">
                <div
                    class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                    <!-- Image -->
                    <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
                    <div>
                        <h6 class="my-2">Tải ảnh đề bài vào đây, hoặc<a href="#!" class="text-primary"> Browse</a>
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
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>

            </div>
            {{-- <label for="name">Course Name:</label>
            <input type="text" name="name" required>
            <label for="name">Time:</label>
            <input type="text" name="time_limit" required>
            <div class="form-group">
                <label for="image">Course Image:</label>
                <input type="file" name="image" accept="image/*">
            </div> --}}
            <button type="submit" class="btn btn-primary mt-2">Thêm mới</button>
        </form>
    </div>
@endsection
