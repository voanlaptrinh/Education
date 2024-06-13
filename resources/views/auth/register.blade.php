@extends('auth.index')
@section('contentlogin')
        <!-- Title -->
        <h2>Đăng ký tài khoản của bạn!</h2>
        <p class="lead mb-4">Rất vui được gặp bạn! Vui lòng Đăng ký bằng tài khoản của bạn.</p>

        <!-- Form START -->
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <!-- Email -->
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Tên *</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                class="bi bi-person-fill-add"></i></span>
                        <input type="text" name="name" 
                            class="form-control border-0 bg-light rounded-end ps-1" value="{{old('name')}}" placeholder="Tên..."
                            id="exampleInputEmail1">
                       
                    </div>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Tên đầy đủ *</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                class="bi bi-person-fill-add"></i></span>
                        <input type="text" name="username" 
                            class="form-control border-0 bg-light rounded-end ps-1" value="{{old('username')}}" placeholder="Tên... "
                            id="exampleInputEmail1">
                      
                    </div>
                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email" value="{{old('email')}}"  class="form-control border-0 bg-light rounded-end ps-1"
                        placeholder="E-mail..." id="exampleInputEmail1">
                   
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <label for="exampleInputEmail1" class="form-label">Giới tính *</label>
                    <select class="form-select" name="gender" aria-label="Default select example">
                        <option selected>Giới tính</option>
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
               
            </div>
            <!-- Password -->

            <div class="mb-4">
                <label for="inputPassword5" class="form-label">Mật khẩu *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="fas fa-lock"></i></span>
                    <input type="password" name="password"  class="form-control border-0 bg-light rounded-end ps-1"
                        placeholder="*********" id="inputPassword5">
                        <span class="input-group-text p-0 bg-transparent">
                            <i class="far fa-eye cursor-pointer p-2 w-40px" onclick="togglePassword('inputPassword5')">
                            </i>
                        </span>
                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="inputPassword6" class="form-label">Nhập lại mật khẩu *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="fas fa-lock"></i></span>
                    <input type="password" name="password_confirmation" 
                        class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword6">
                        <span class="input-group-text p-0 bg-transparent">
                            <i class="far fa-eye cursor-pointer p-2 w-40px" onclick="togglePassword('inputPassword6')">
                            </i>
                        </span>
                </div>
            </div>
            <!-- Check box -->
        
            <!-- Button -->
            <div class="align-items-center mt-0">
                <div class="d-grid">
                    <button class="btn btn-primary mb-0" type="submit">Đăng ký</button>
                </div>
            </div>
        </form>
   
        <div class="mt-4 text-center">
            <span>Bạn có sẵn một tài khoản?<a href="{{ route('login') }}"> Đăng nhập tại đây</a></span>
        </div>
    @endsection
