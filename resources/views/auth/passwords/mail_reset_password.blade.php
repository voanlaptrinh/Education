<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
</head>
<body>
    <h1>Đặt lại mật khẩu</h1>
    
    <p>Nhấp vào nút bên dưới để đặt lại mật khẩu của bạn:</p>
    
    <a href="{{ $resetLink }}" target="_blank" style="display: inline-block; background-color: #3490dc; color: #ffffff; text-decoration: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; margin-top: 10px;">Đặt lại mật khẩu</a>
    
    <p>Nếu bạn không yêu cầu đặt lại mật khẩu thì không cần thực hiện thêm hành động nào.</p>
    
    <p>Cảm ơn bạn,<br>
    {{ config('app.name') }}</p>
</body>
</html>
