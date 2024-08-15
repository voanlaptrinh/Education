@extends('admin.index')

@section('contentadmin')

    <div class="page-content-wrapper border">
    <div class="container">
        <h2>Sửa chương trình học</h2>
        <form method="POST" action="{{ route('lectures.update', ['lecture' => $lecture->id]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $lecture->title) }}" required>
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
            </div>
            <div class="col-lg-12  pt-3">
                <label class="form-label custom-cursor-default-hover">Miễn phí hoặc mất phí</label>
                <div class="form-check form-switch form-check-lg mb-0">
                    <input class="form-check-input mt-0 price-toggle me-2 custom-cursor-on-hover" type="checkbox" id="is_free" name="is_free"
                    {{ $lecture->is_free ? 'checked' : '' }}>
                    <label class="form-check-label mt-1" for="flexSwitchCheckDefault">Bật lên nếu là bài học mất phí</label>
                </div>
            </div>
            <div class="form-group pt-3">
                <label for="content">Content</label>
                <textarea name="content" class="form-control">{{ old('content', $lecture->content) }}</textarea>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
            </div>
            <div class="col-12 pt-3">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div>
                           
                            <label for="video">Link video</label>
                            <input type="text" name="video" class="form-control" value="{{ old('video', $lecture->video) }}" required>


                            @error('video')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                        </div>

                    </div>
                    <div class="col-12">
                        <label for="video">Hình ảnh</label>
                        <div
                            class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                            <!-- Image -->
                            <img src="{{ asset('storage/' . $lecture->image) }}" class="" style="width:87px" alt="">
                            <div>
                                <h6 class="my-2">Tải ảnh bài giảng vào đây, hoặc<a href="#!" class="text-primary">
                                        Browse</a></h6>
                                <label style="cursor:pointer;">
                                    <span>
                                        <input class="form-control stretched-link custom-cursor-on-hover" type="file"
                                            name="image" id="image" accept="image/gif, image/jpeg, image/png">
                                    </span>
                                </label>
                                <p class="small mb-0 mt-2"><b style="color:red">Note:</b> Chỉ có JPG, JPEG and PNG. Kích
                                    thước đề xuất là (600*450).</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <input type="hidden" name="chapter_id" value="{{ $lecture->chapter_id }}">

            <button type="submit" class="btn btn-primary mt-3">Sửa</button>
        </form>
    </div>
    </div>
@endsection
