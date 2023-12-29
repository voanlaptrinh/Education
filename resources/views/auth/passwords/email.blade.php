<!-- resources/views/auth/passwords/email.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Send Password Reset Link</button>
    </form>
</body>
</html>
