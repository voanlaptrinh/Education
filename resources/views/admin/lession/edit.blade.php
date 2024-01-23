<h1>Edit Lesson</h1>

<form action="{{ route('lessons.update', ['lesson' => $lesson]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Sử dụng method PUT cho việc sửa đổi -->
    
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $lesson->title }}" required>

    <label for="description">Description:</label>
    <textarea name="description" required>{{ $lesson->description }}</textarea>

    <label for="content">Content:</label>
    <textarea name="content" required>{{ $lesson->content }}</textarea>

    <label for="image">Image:</label>
    <input type="file" name="image" accept="image/*">

    <!-- Hiển thị ảnh hiện tại -->
    @if($lesson->image)
        <img src="{{ asset('storage/' . $lesson->image) }}" alt="{{ $lesson->title }}">
    @else
        <p>No image available</p>
    @endif

    <!-- Thêm trường select để chọn môn học -->
    <label for="subject_id">Select Subject:</label>
    <select name="subject_id" required>
        @foreach($subjects as $subject)
            <option value="{{ $subject->id }}" {{ $subject->id == $lesson->subject_id ? 'selected' : '' }}>{{ $subject->name }}</option>
        @endforeach
    </select>

    <!-- Thêm trường select để chọn khóa học -->
    <label for="course_id">Select Course:</label>
    <select name="course_id" required>
        @foreach($courses as $course)
            <option value="{{ $course->id }}" {{ $course->id == $lesson->course_id ? 'selected' : '' }}>{{ $course->title }}</option>
        @endforeach
    </select>

    <!-- Thêm các trường dữ liệu khác nếu cần -->

    <button type="submit">Update Lesson</button>
</form>