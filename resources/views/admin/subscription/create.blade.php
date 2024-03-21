@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm gói khóa học</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('subscriptions.store') }}">
            @csrf



            <div class="form-group">
                <label for="name">Tên của gói</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="row pt-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="price">Giá của gói (VNĐ)</label>
                        <input type="text" name="price" class="form-control" value="{{ number_format(old('price'), 0, ',', '.') }}">
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="duration_months">Nhập thời giạn tháng (Số tháng)</label>
                        <input type="text" name="duration_months" class="form-control" value="{{old('duration_months')}}">
                        @error('duration_months')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            

            

            <button type="submit" class="btn btn-primary mt-3">Thêm mới</button>
        </form>
    </div>
@endsection
