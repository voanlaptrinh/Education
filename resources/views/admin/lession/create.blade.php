@extends('admin.index')

@section('contentadmin')
    <h1>Create New Lesson</h1>

    <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <!-- Thêm trường select để chọn khóa học -->
        <label for="subject_id">Select Course:</label>
        <select name="subject_id" required>
            @foreach($subject as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }} ({{$subject->class->name }}) </option>
            @endforeach
        </select>

        <!-- Thêm các trường dữ liệu khác nếu cần -->

        <button type="submit">Create Lesson</button>
    </form>
@endsection
