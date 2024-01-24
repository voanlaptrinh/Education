<!-- resources/views/lectures/create.blade.php -->

@extends('admin.index')

@section('contentadmin')
    <div class="container">
        <h2>Create Lecture</h2>

        <form method="POST" action="{{ route('lectures.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="video">Video File</label>
                <input type="file" name="video" accept="video/*" required>
            </div>

            <div class="form-group">
                <label for="image">Image File</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <label for="lesson_id">Lesson</label>
                <select name="lesson_id" class="form-control" required>
                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Lecture</button>
        </form>
    </div>
@endsection
