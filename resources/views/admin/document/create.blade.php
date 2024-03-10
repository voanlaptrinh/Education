@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm Tài liệu học</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
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

            <div class="row mb-4 pt-3">
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Lớp học *</label>
                    <select class="form-select" name="classes_id" aria-label="Default select example">
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->name }}</option>
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
                <textarea name="description" class="form-control" rows="4"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="access_level">Access Level:</label>
                <select name="access_level" id="access_level" class="form-control">
                    <option value="free">Free</option>
                    <option value="paid">Paid</option>
                    <option value="pro">Pro</option>
                </select>
            </div>
            
            <div class="form-group" id="priceField" style="display: none;">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Thêm mới</button>
        </form>
    </div>
    <!-- resources/views/pdf/create.blade.php -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var accessLevelSelect = document.getElementById('access_level');
        var priceField = document.getElementById('priceField');

        accessLevelSelect.addEventListener('change', function () {
            if (accessLevelSelect.value === 'paid') {
                priceField.style.display = 'block';
            } else {
                priceField.style.display = 'none';
            }
        });
    });
</script>

@endsection
