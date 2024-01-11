<!-- Trong resources/views/quiz/groups/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Nhóm Mới</title>
</head>
<body>
    <div>
        <h2>Thêm Nhóm Mới</h2>
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <form action="{{ route('quiz.groups.store') }}" method="post">
            @csrf
            <div>
                <label for="name">Tên Nhóm:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <button type="submit">Thêm Nhóm</button>
            </div>
        </form>
    </div>
</body>
</html>
