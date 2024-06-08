@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm mới gia sư</h1>
            </div>
        </div>
        <form class="row g-3">
            @csrf


            <div class="form-group col-lg-4">
                <label for="name">Họ gia sư</label>
                <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group col-lg-4">
                <label for="name">Tên gia sư</label>
                <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            
            <div class="form-group col-lg-4">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
           
            

            <button type="submit" class="btn btn-primary mt-3">Thêm mới</button>
        </form>
    </div>
@endsection
