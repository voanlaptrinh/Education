@extends('auth.index')
@section('contentlogin')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Mật khẩu *</label>
            <div class="input-group input-group-lg">
                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                    class="fas fa-lock"></i></span>
                <input class="form-control border-0 bg-light rounded-end ps-1"
                type="password" name="password" required id="ddd">
                <span class="input-group-text p-0 bg-transparent">
                    <i class="far fa-eye cursor-pointer p-2 w-40px" onclick="togglePassword('ddd')"> </i>
                </span>
            </div>
        </div>
        {{-- <input type="password" name="password" required id="ddd"> --}}
        
        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu *</label>
            <div class="input-group input-group-lg">
                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                    class="fas fa-lock"></i></span>
                <input class="form-control border-0 bg-light rounded-end ps-1"
                type="password" name="password_confirmation" id="ddd1" required>
                <span class="input-group-text p-0 bg-transparent">
                    <i class="far fa-eye cursor-pointer p-2 w-40px" onclick="togglePassword('ddd1')"> </i>
                </span>
            </div>
        </div>
        {{-- <label for="password_confirmation">Nhập lại mật khẩu:</label>
        <input type="password" name="password_confirmation" required> --}}

        <button type="submit" class="btn btn-success">Đặt lại mật khẩu</button>
    </form>
@endsection
