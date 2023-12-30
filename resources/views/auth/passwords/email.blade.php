@extends('auth.index')
@section('contentlogin')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Email *</label>
            <div class="input-group input-group-lg">
                <span
                    class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                        class="bi bi-envelope-fill"></i></span>
                <input class="form-control border-0 bg-light rounded-end ps-1"
                    placeholder="E-mail" name="email" value="{{ old('email') }}" required>
            </div>
        </div>

        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <div class="align-items-center mt-0">
            <div class="d-grid">
                <button class="btn btn-primary mb-0" type="submit">Send Password Reset Link</button>
            </div>
        </div>
        
    </form>
@endsection
