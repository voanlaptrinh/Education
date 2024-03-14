@extends('auth.index')
@section('contentlogin')
    <!-- Title -->
    <span class="mb-0 fs-1">👋</span>
    <h1 class="fs-2">Đăng nhập {{ $webConfig->name }}</h1>
    <p class="lead mb-4">Rất vui được gặp bạn! Vui lòng đăng nhập bằng tài khoản của bạn.</p>

    <!-- Form START -->
    <form action="{{ route('login') }}" method="post">
        @csrf
        <!-- Email -->
        <div class="mb-4">

            {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
            @if ($errors->has('login_error'))
                <div class="alert alert-danger">
                    {{ $errors->first('login_error') }}
                </div>
            @endif --}}
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label">Email *</label>
            <div class="input-group input-group-lg">
                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                        class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="E-mail"
                    type="email" name="email" >
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <label class="error" id="name_error" for="name">{{ $message }}</label>
            </span>
        @enderror
        </div>
        <!-- Password -->
        <div class="mb-4">
            <label for="inputPassword5" class="form-label">Mật khẩu *</label>
            <div class="input-group input-group-lg">
                <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                        class="fas fa-lock"></i></span>
                <input type="password" class="form-control border-0 bg-light rounded-end ps-1" placeholder="Password"
                    type="password" name="password" >
            </div>
            <div id="passwordHelpBlock" class="form-text">
                Mật khẩu của bạn phải có ít nhất 8 ký tự
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <label class="error" id="name_error" for="name">{{ $message }}</label>
            </span>
        @enderror
        </div>
        <!-- Check box -->
        <div class="mb-4 d-flex justify-content-between mb-4">
            <div class="form-check">
             
            </div>
            <div class="text-primary-hover">
                <a href="{{ route('password.request') }}" class="text-secondary">
                    <u>Quên mật khẩu?</u>
                </a>
            </div>
        </div>
        <!-- Button -->
        <div class="align-items-center mt-0">
            <div class="d-grid">
                <button class="btn btn-primary mb-0" type="submit">Đăng nhập</button>
            </div>
        </div>
    </form>

    <!-- Sign up link -->
    <div class="mt-4 text-center">
        <span>Không có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></span>
    </div>
@endsection
