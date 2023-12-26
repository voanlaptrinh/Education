<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $message = $request->session()->all();
        return View('auth.login', compact('message'));
    }
    public function postLogin(Request $request)
    {
        // Kiểm tra và xác nhận dữ liệu đầu vào
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if(($user->status)== 0){
                $this->logout();
                session()->flash('warning', 'Tài khoản của bạn đã bị tạm khóa.');
                return redirect()->route('login');
            }
    
            if (!is_null($user->email_verified_at)) {
                // Người dùng đã xác nhận email và đăng nhập thành công
                return redirect()->intended('/');
            } else {
                // Người dùng đã đăng nhập nhưng chưa xác nhận email
                // Lưu thông báo vào session
                $this->logout();
                session()->flash('warning', 'Bạn vui lòng xác nhận tài khoản của mình trong email.');
                return redirect()->route('login')->with('success', 'Đã trở về trang chủ!');
            }
        }
    
        // Người dùng không đăng nhập thành công
        return redirect('/login')->withErrors(['email' => 'Thông tin đăng nhập không đúng.']);
    }
    
    public function register(Request $request)
    {

        return View('auth.register');
    }
    public function postRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'phone' => 'nullable|string',
            'password' => 'required|string|min:8|confirmed',
            'gender' => 'nullable|string',
            'birthday' => 'nullable|string',
            'address' => 'nullable|string',
            'money' => 'nullable|string',
            'user_type' => 'nullable|integer',
        ]);
       
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone =  $request->input('phone');
        $user->password =  Hash::make($request->input('password'));
        $user->gender =  $request->input('gender');
        $user->birthday =  $request->input('birthday');
        $user->address =  $request->input('address');
        $user->user_type =   $request->input('user_type');
        $user->status =  1;
        $user->verification_token = Str::random(40);
       
    
        $user->save();
        $verificationLink = route('verify.email', ['token' => $user->verification_token]);

        // Create an instance of VerifyEmail class
        $verificationEmail = new VerifyEmail($user->name, $verificationLink);

        // Send the email
        Mail::to($user->email)->send($verificationEmail);
        return redirect('/login')->with('success', 'Đăng ký thành công!');
    }

    public function logout()
    {
        Auth::logout();

        // Nếu bạn muốn chuyển hướng sau khi đăng xuất, bạn có thể sử dụng hàm redirect
        return redirect('/')->with('success', 'Đã đăng xuất thành công.');
    }

    public function comment(){
        return View('blog.detail');

    }
}
