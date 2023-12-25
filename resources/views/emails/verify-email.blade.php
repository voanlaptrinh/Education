<!-- File: resources/views/emails/verify-email.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <p>{{$user}}</p>
    <p>Thank you for registering with us. Please click on the link below to verify your email:</p>
    <a href="{{ $verificationLink }}">Verify Email</a>
    <p>If you did not register on our website, you can safely ignore this email.</p>
</body>
</html>

