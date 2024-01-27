<!-- resources/views/curriculum/edit.blade.php -->
@extends('admin.index')
@section('contentadmin')
    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Sửa chương trình học</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('curriculum.update', ['chapter' => $chapter]) }}">
            @csrf
            @method('PUT') <!-- Sử dụng method PUT khi chỉnh sửa -->

            <!-- Các trường của form sửa -->

            <div class="form-group">
                <label for="title" class="form-label">Tiêu đề chương trình học</label>
                <input type="text" name="title" class="form-control" value="{{ $chapter->title }}" required>
            </div>
            <div class="row mb-4 pt-3">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Bài học *</label>
                    <select class="form-select" name="lesson_id" aria-label="Default select example">
                        @foreach ($lessons as $lesson)
                            <option value="{{ $lesson->id }}" {{ $chapter->lesson_id == $lesson->id ? 'selected' : '' }}>
                                {{ $lesson->title }}</option>
                        @endforeach

                    </select>
                    @error('lesson_id')
                        <span class="invalid-feedback" role="alert">
                            <label class="error" id="name_error" for="name">{{ $message }}</label>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="form-group pb-3">
                <label for="content">Nội dung</label>
                <textarea name="content" class="form-control" rows="4">{{ $chapter->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
@endsection
