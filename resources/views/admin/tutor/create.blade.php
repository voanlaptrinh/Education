@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm mới tài khoản gia sư</h1>
            </div>
        </div>
        <form class="row" action="{{ route('tutor.store') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group col-lg-4">
                <label for="name">Họ gia sư</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group col-lg-4">
                <label for="name">Tên gia sư</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <div class="form-group col-lg-4">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <div class="form-group col-lg-4 pt-4">
                <label for="file" class="labelFile">
                    <img id="preview" src="#" alt="Preview Image"
                        style="display: none; width: 100px; height: 100px;" />
                    <div id="svg-none">
                        <span>
                            <svg xml:space="preserve" viewBox="0 0 184.69 184.69" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1" width="60px"
                                height="60px">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M149.968,50.186c-8.017-14.308-23.796-22.515-40.717-19.813
                              C102.609,16.43,88.713,7.576,73.087,7.576c-22.117,0-40.112,17.994-40.112,40.115c0,0.913,0.036,1.854,0.118,2.834
                              C14.004,54.875,0,72.11,0,91.959c0,23.456,19.082,42.535,42.538,42.535h33.623v-7.025H42.538
                              c-19.583,0-35.509-15.929-35.509-35.509c0-17.526,13.084-32.621,30.442-35.105c0.931-0.132,1.768-0.633,2.326-1.392
                              c0.555-0.755,0.795-1.704,0.644-2.63c-0.297-1.904-0.447-3.582-0.447-5.139c0-18.249,14.852-33.094,33.094-33.094
                              c13.703,0,25.789,8.26,30.803,21.04c0.63,1.621,2.351,2.534,4.058,2.14c15.425-3.568,29.919,3.883,36.604,17.168
                              c0.508,1.027,1.503,1.736,2.641,1.897c17.368,2.473,30.481,17.569,30.481,35.112c0,19.58-15.937,35.509-35.52,35.509H97.391
                              v7.025h44.761c23.459,0,42.538-19.079,42.538-42.535C184.69,71.545,169.884,53.901,149.968,50.186z"
                                                style="fill:#010002;"></path>
                                        </g>
                                        <g>
                                            <path d="M108.586,90.201c1.406-1.403,1.406-3.672,0-5.075L88.541,65.078
                              c-0.701-0.698-1.614-1.045-2.534-1.045l-0.064,0.011c-0.018,0-0.036-0.011-0.054-0.011c-0.931,0-1.85,0.361-2.534,1.045
                              L63.31,85.127c-1.403,1.403-1.403,3.672,0,5.075c1.403,1.406,3.672,1.406,5.075,0L82.296,76.29v97.227
                              c0,1.99,1.603,3.597,3.593,3.597c1.979,0,3.59-1.607,3.59-3.597V76.165l14.033,14.036
                              C104.91,91.608,107.183,91.608,108.586,90.201z" style="fill:#010002;"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p>Đưa ảnh gia sư vào đây</p>
                    </div>

                </label>
                <input class="input imge_anh" name="image" id="file" type="file" />
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-8 pt-2">

                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Số điện thoại</label>
                        <input type="number" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Ngày tháng năm sinh</label>
                        <input type="date" name="date_of_birth" class="form-control "
                            value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Giới tính</label>
                        <select name="gender" id="gender" class="form-control ">
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                            <option value="2">Khác</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Địa chỉ</label>
                        <input type="text" name="address" class="form-control " value="{{ old('address') }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Trình độ học vấn</label>
                        <input type="text" name="qualification" class="form-control "
                            value="{{ old('qualification') }}">
                        @error('qualification')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Số năm kinh nghiệm giảng dạy</label>
                        <input type="number" min="0" name="experience_years" class="form-control "
                            value="{{ old('experience_years') }}">
                        @error('experience_years')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                </div>


            </div>

            <div class="col-lg-4 pt-2">
                <label for="name">Mật khẩu</label>
                <input type="password" name="password" class="form-control " value="{{ old('password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-4 pt-2">
                <label for="name">Số môn gia sư có thể giảng dạy</label>
                <input type="text" name="subjects" class="form-control " value="{{ old('subjects') }}">
                @error('subjects')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-4 pt-2">
                <label for="name">Mức phí theo giờ của gia sư</label>
                <input type="number" name="hourly_rate" class="form-control " value="{{ old('hourly_rate') }}">
                @error('hourly_rate')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <div class="col-lg-12 pt-2">
                <textarea name="bio" id="content" cols="30" rows="10">{{ old('bio') }}</textarea>

                @error('bio')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Thêm mới</button>
        </form>
    </div>
    <script>
        document.getElementById('file').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    document.getElementById('svg-none').style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
