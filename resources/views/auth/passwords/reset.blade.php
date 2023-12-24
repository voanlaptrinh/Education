<!-- resources/views/auth/passwords/reset.blade.php -->

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="mb-4">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $email ?? old('email') }}" required>
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
</form>
