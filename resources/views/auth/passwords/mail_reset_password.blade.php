<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    
    <p>Click on the button below to reset your password:</p>
    
    <a href="{{ $resetLink }}" target="_blank" style="display: inline-block; background-color: #3490dc; color: #ffffff; text-decoration: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; margin-top: 10px;">Reset Password</a>
    
    <p>If you did not request a password reset, no further action is required.</p>
    
    <p>Thanks,<br>
    {{ config('app.name') }}</p>
</body>
</html>
