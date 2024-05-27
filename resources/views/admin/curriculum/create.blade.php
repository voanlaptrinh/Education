<!-- resources/views/chapters/create.blade.php -->
@extends('admin.index')
@section('contentadmin')

    <div class="page-content-wrapper border">
        <div class="row mb-3">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Thêm video bài giảng</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('curriculum.store') }}">
            @csrf

            

            <div class="form-group">
                <label for="title">Tiêu đề chương trình học</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <div class="row mb-4 pt-3">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Bài học *</label>
                    <select class="form-control lesson_name" name="lesson_id" value="{{old('lesson_id')}}" aria-label="Default select example" data-live-search="true">
                        @foreach ($lessons as $lesson)
                            <option data-tokens="{{$lesson->title}}" value="{{ $lesson->id }}">{{ $lesson->title }} ({{$lesson->subject->class->name}})</option>
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
                <textarea name="content" class="form-control" rows="4" value="{{old('content')}}"></textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary pt-2">Thêm mới</button>
        </form>
    </div>
@endsection
