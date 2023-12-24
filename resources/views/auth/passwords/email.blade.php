<!-- resources/views/auth/passwords/email.blade.php -->

<form method="POST" action="{{ route('password.request') }}">
    @csrf
    <div class="mb-4">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </div>
</form>
