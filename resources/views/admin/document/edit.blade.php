@extends('admin.index')
@section('contentadmin')
<div class="page-content-wrapper border">
    <div class="row mb-3">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Sửa Tài liệu học</h1>
        </div>
    </div>
    <form method="POST" action="{{ route('document.update', ['document' => $document->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Tiêu đề </label>
            <input type="text" name="name" class="form-control" value="{{ $document->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>

        <div class="row mb-4 pt-3">
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label">Lớp học *</label>
                <select class="form-select" name="classes_id" aria-label="Default select example">
                    @foreach ($classes as $classe)
                        <option value="{{ $classe->id }}" {{ $document->classes_id == $classe->id ? 'selected' : '' }}>{{ $classe->name }}</option>
                    @endforeach
                </select>
                @error('classes_id')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label">File PDF *</label>
                <input type="file" class="form-control" name="file">
                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (Optional)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group pb-3">
            <label for="content">Mô tả</label>
            <textarea name="description" class="form-control" rows="4">{{ $document->description }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="access_level">Access Level:</label>
            <select name="access_level" id="access_level" class="form-control">
                <option value="free" {{ $document->access_level == 'free' ? 'selected' : '' }}>Free</option>
                <option value="paid" {{ $document->access_level == 'paid' ? 'selected' : '' }}>Paid</option>
                <option value="pro" {{ $document->access_level == 'pro' ? 'selected' : '' }}>Pro</option>
            </select>
        </div>

        <div class="form-group" id="priceField" style="{{ $document->access_level == 'paid' ? 'display: block;' : 'display: none;' }}">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ $document->price }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
    </form>
</div>

@endsection
