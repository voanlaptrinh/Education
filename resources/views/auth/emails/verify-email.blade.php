<!-- resources/views/emails/verify-email.blade.php -->
<!-- Xác nhận email -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email xác thực</title>
</head>
<body>
    <h2>Email xác thực</h2>
    <p>Xin chào {{ $user }},</p>
    <p>Vui lòng nhấp vào liên kết sau để xác minh email của bạn:</p>
    <a href="{{ $verificationLink }}">Xác thực Email</a>
</body>
</html>
