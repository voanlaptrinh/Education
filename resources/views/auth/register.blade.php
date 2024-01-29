@extends('auth.index')
@section('contentlogin')
        <!-- Title -->
        <h2>Sign up for your account!</h2>
        <p class="lead mb-4">Nice to see you! Please Sign up with your account.</p>

        <!-- Form START -->
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <!-- Email -->
            <div class="row mb-4">
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Name *</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                class="bi bi-person-fill-add"></i></span>
                        <input type="text" name="name" 
                            class="form-control border-0 bg-light rounded-end ps-1" placeholder="Họ"
                            id="exampleInputEmail1">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label">Full Name *</label>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                class="bi bi-person-fill-add"></i></span>
                        <input type="text" name="username" 
                            class="form-control border-0 bg-light rounded-end ps-1" placeholder="Tên "
                            id="exampleInputEmail1">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Email address *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email"  class="form-control border-0 bg-light rounded-end ps-1"
                        placeholder="E-mail" id="exampleInputEmail1">
                   
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
                <label for="inputPassword5" class="form-label">Password *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="fas fa-lock"></i></span>
                    <input type="password" name="password"  class="form-control border-0 bg-light rounded-end ps-1"
                        placeholder="*********" id="inputPassword5">

                </div>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="inputPassword6" class="form-label">Confirm Password *</label>
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                            class="fas fa-lock"></i></span>
                    <input type="password" name="password_confirmation" 
                        class="form-control border-0 bg-light rounded-end ps-1" placeholder="*********" id="inputPassword6">
                </div>
            </div>
            <!-- Check box -->
            <div class="mb-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-1">
                    <label class="form-check-label" for="checkbox-1">By signing up, you agree to the<a href="#"> terms
                            of service</a></label>
                </div>
            </div>
            <!-- Button -->
            <div class="align-items-center mt-0">
                <div class="d-grid">
                    <button class="btn btn-primary mb-0" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
        <!-- Form END -->

        {{-- <!-- Social buttons -->
    <div class="row">
        <!-- Divider with text -->
        <div class="position-relative my-4">
            <hr>
            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
        </div>
        <!-- Social btn -->
        <div class="col-xxl-6 d-grid">
            <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                    class="fab fa-fw fa-google text-white me-2"></i>Signup with Google</a>
        </div>
        <!-- Social btn -->
        <div class="col-xxl-6 d-grid">
            <a href="#" class="btn bg-facebook mb-0"><i
                    class="fab fa-fw fa-facebook-f me-2"></i>Signup with Facebook</a>
        </div>
    </div> --}}

        <!-- Sign up link -->
        <div class="mt-4 text-center">
            <span>Already have an account?<a href="{{ route('login') }}"> Sign in here</a></span>
        </div>
    @endsection
