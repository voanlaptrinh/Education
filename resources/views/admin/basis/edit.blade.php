@extends('admin.index')
@section('contentadmin')

<div class="page-content-wrapper border">
    <div class="row mb-3">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Sửa cơ sở</h1>
        </div>
    </div>
    <form method="post" action="{{ route('basis.update', ['basis' => $basis->id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group pt-3">
            <label for="title">Tên cơ sở</label>
            <input type="text" name="name" class="form-control" value="{{$basis->name}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pt-3">
            <label for="title">Địa chỉ</label>
            <input type="text" name="address" class="form-control" value="{{$basis->address}}">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pt-3">
            <label for="title">Địa chỉ google map</label>
            <input type="text" name="gg_map" class="form-control" value="{{$basis->gg_map}}">
            @error('gg_map')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pt-3">
            <label for="title">Số điện thoại liên hệ</label>
            <input type="number" name="phone" class="form-control" value="{{$basis->phone}}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pt-3">
            <label for="title">Email</label>
            <input type="email" name="email" class="form-control" value="{{$basis->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pt-3">
            <label for="title">Thời gian </label>
            <input type="text" name="open_time" class="form-control" value="{{$basis->open_time}}">
            @error('open_time')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
       
     
        <button type="submit" class="btn btn-primary mt-2 float-end">Sửa</button>
    </form>
</div>

@endsection