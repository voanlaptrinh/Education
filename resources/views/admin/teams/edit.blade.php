@extends('admin.index')
@section('contentadmin')
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Card START -->
        <div class="card border rounded-3 mb-5">
            <div id="stepper" class="bs-stepper stepper-outline">
                <!-- Card header -->


                <!-- Card body START -->
                <div class="card-body px-1 px-sm-4">
                    <!-- Step content START -->
                    <div class="bs-stepper-content">
                        <form action="{{ route('teams.update', ['id' => $team->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Step 1 content START -->
                            <div>
                                <!-- Title -->
                                <h4>Thêm mới Teams</h4>

                                <hr> <!-- Divider -->

                                <!-- Basic information START -->
                                <div class="row g-2">
                                    <!-- Course title -->
                                    <div class="col-12">
                                        <label class="form-label">Tên</label>
                                        <input class="form-control" type="text" placeholder="Thêm tên của bạn"
                                            name ="name" value="{{$team->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" placeholder="Email" name ="email"
                                            value="{{ $team->email }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Số điện thoại</label>
                                        <input class="form-control" type="number" placeholder="Số điện thoại"
                                            name ="phone" value="{{ $team->phone }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Liên hệ khác</label>
                                        <input class="form-control" type="text" placeholder="Liên hệ khác" name ="web"
                                            value="{{ $team->web }}">
                                        @error('web')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Địa chỉ</label>
                                        <input class="form-control" type="text" placeholder="Địa chỉ" name ="address"
                                            value="{{ $team->address }}">
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Short description -->
                                    <div class="col-12">
                                        <label class="form-label">Mô tả ngắn</label>
                                        <textarea class="form-control" name="description" rows="2" placeholder="Mô tả ngắn">{{ $team->description }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                    </div>
                                    <hr>
                                    <div class="col-6">
                                        <label class="form-label">Facebook</label>
                                        <input class="form-control" type="text" placeholder="Facebook" name="facebook"
                                            value="{{ $team->facebook }}">
                                            @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Instagram</label>
                                        <input class="form-control" type="text" placeholder="Instagram" name="instagram"
                                            value="{{ $team->instagram}}">
                                            @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Twitter</label>
                                        <input class="form-control" type="text" placeholder="Twitter" name="twitter"
                                            value="{{ $team->twitter}}">
                                            @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Linkedin</label>
                                        <input class="form-control" type="text" placeholder="Linkedin" name="linkedin"
                                            value="{{ $team->linkedin}}">
                                            @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <div
                                            class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                            <!-- Image -->
                                            <img src="{{ asset('/assets/user/images/element/gallery.svg') }}"
                                                class="h-50px" alt="">
                                            <div>
                                                <h6 class="my-2">Upload course image here, or<a href="#!"
                                                        class="text-primary"> Browse</a></h6>
                                                <label style="cursor:pointer;">
                                                    <span>
                                                        <input class="form-control stretched-link" type="file"
                                                            name="image" id="image"
                                                            onchange="displaySelectedImage(event)"
                                                            accept="image/gif, image/jpeg, image/png">
                                                    </span>
                                                </label>
                                                <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG and PNG. Our
                                                    suggested dimensions are 600px * 450px. Larger image will be cropped
                                                    to 4:3 to fit our thumbnails/previews.</p>
                                            </div>
                                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <div
                                            class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
                                            <!-- Image -->
                                            <img id="upload-icon"
                                                src="{{ asset('storage/' . $team->image) }}"
                                                alt="" class="h-170px">
                                            <img id="demo-image-preview" src="" alt="" class="h-170px">
                                        </div>


                                    </div>


                                    <!-- Course description -->
                                    <div class="col-12">
                                        <label class="form-label">Nội dung</label>
                                        <!-- Editor toolbar -->
                                        <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                                            <textarea id="content" name="content">{{ $team->content }}</textarea>
                                            @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                    <!-- Step 1 button -->
                                    <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary next-btn mb-0">Sửa</button>
                                    </div>
                                </div>
                                <!-- Basic information START -->
                            </div>
                            <!-- Step 1 content END -->



                        </form>
                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card END -->
    </div>
    <script>
        function displaySelectedImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var uploadIcon = document.getElementById('upload-icon');
                var demoImagePreview = document.getElementById('demo-image-preview');

                // Hide the upload icon
                uploadIcon.style.display = 'none';

                // Show the demo image preview
                demoImagePreview.src = e.target.result;
                demoImagePreview.style.display = 'inline-block';

            }

            reader.readAsDataURL(file);
        }
    </script>
@endsection
