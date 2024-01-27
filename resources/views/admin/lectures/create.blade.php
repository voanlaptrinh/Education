<!-- resources/views/lectures/create.blade.php -->

@extends('admin.index')

@section('contentadmin')
    <div class="page-content-wrapper border">

        <div class="container">

            <h2>Thêm bài giảng ({{ $chapter->title }}) </h2>

            <!-- resources/views/lectures/create.blade.php -->

            <form method="POST" action="{{ route('lectures.store', $chapter) }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>

                <div class="form-group pt-3">
                    <label for="content">Nội dung</label>
                    <textarea name="content" class="form-control" rows="4"></textarea>
                </div>
                <div class="col-12 pt-3">
                    <div class="row">
                        <div class="col-6">
                            <div
                                class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                <!-- Image -->
                                <i class="fas fa-play-circle" style="font-size: 50px"></i>
                                <div>
                                    <h6 class="my-2">Tải video bài giảng vào đây, hoặc<a href="#!"
                                            class="text-primary"> Duyệt qua</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control stretched-link custom-cursor-on-hover" type="file"
                                                name="video" accept="video/*">
                                        </span>
                                    </label>
                                    <p class="small mb-0 mt-2"><b style="color:red">Lưu ý:</b> Chỉ có Mp4. Hãy up video bài
                                        giảng của bạn vào đây!.</p>
                                </div>
                            </div>
                            @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <div
                                class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                <!-- Image -->
                                <img src="/assets/user/images/element/gallery.svg" class="h-50px" alt="">
                                <div>
                                    <h6 class="my-2">Tải ảnh bài giảng vào đây, hoặc<a href="#!"
                                            class="text-primary"> Browse</a></h6>
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


                <div class="form-group">

                    <input type="text" name="chapter_id" hidden class="form-control" value="{{ $chapter->id }}"
                        readonly>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Create Lecture</button>
            </form>

        </div>
    </div>
@endsection
