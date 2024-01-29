<!-- resources/views/emails/verify-email.blade.php -->
<!-- Xác nhận email -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h2>Email Verification</h2>
    <p>Hello {{ $user }},</p>
    <p>Please click the following link to verify your email:</p>
    <a href="{{ $verificationLink }}">Verify Email</a>
</body>
</html>
