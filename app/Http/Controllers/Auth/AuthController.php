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
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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
            if (($user->status) == 0) {
                $this->logout();
                session()->flash('warning', 'Tài khoản của bạn đã bị tạm khóa.');
                return redirect()->route('login');
            }
            if (($user->user_type) == 0) {
                //khi Người dụng là admin sẽ route tiwois trang admin
                return redirect()->route('admin.index');
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
        return redirect('/login')->withErrors(['login_error' => 'Thông tin đăng nhập không đúng.']);
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
            'gender' => 'required|in:0,1',
            'birthday' => 'nullable|string',
            'address' => 'nullable|string',
            'money' => 'nullable|string',

        ], [
            'name.required' => 'Vui lòng nhập tên của bạn',
            'username.required' => 'Vui lòng nhập tên người dùng',
            'email.required' => 'Vui lòng nhập email của bạn',
            'password.required' => 'Vui lòng nhập mật khẩu của bạn',
            'password.min' => 'Vui lòng nhập mật khẩu tối thiểu 8 kí tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'gender.required' => 'Vui lòng chọn giới tính',
            'gender.in' => 'Giới tính không hợp lệ.',
            'birthday.required' => 'Vui lòng nhập ngày sinh của bạn',
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
        $user->status =  1;
        $user->user_type =  1;
        $user->verification_token = Str::random(40);


        $user->save();
        $verificationLink = route('verify.email', ['token' => $user->verification_token]);

        // Create an instance of VerifyEmail class
        $verificationEmail = new VerifyEmail($user->name, $verificationLink);

        // Send the email
        Mail::to($user->email)->send($verificationEmail);
        return redirect('/login')->with('success', 'Đăng ký thành công!');
    }

    public function profilelogout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Đã đăng xuất thành công.');
    }

    public function profile(Request $request, User $user)
    {

        if (!$user) {
            return redirect()->route('login');
        }
        return view('auth.profile_account', compact('user'));
    }
    public function update(Request $request)
    {
        try {
            // Validate data, including file validation if needed
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'phone' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
                'gender' => 'required|in:0,1',
                'birthday' => 'nullable|date',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Update text fields
            $user = Auth::user();
            $user->update([
                'name' => $validatedData['name'],
                'username' => $validatedData['username'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'gender' => $validatedData['gender'],
                'birthday' => $validatedData['birthday'],
            ]);

            // Handle profile picture update
            if ($request->hasFile('profile_picture')) {
                // Delete the old profile picture if it exists
                if ($user->image) {
                    Storage::delete($user->image);
                }

                // Store the new profile picture and update the database column
                $path = $request->file('profile_picture')->storeAs('public/profile_pictures', $user->id . '.' . $request->file('profile_picture')->extension());
                $user->update(['image' => 'profile_pictures/' . $user->id . '.' . $request->file('profile_picture')->extension()]);
            }

            return redirect()->route('profile', compact('user'))->with('success', 'Profile updated successfully.');
        } catch (\Exception $e) {
            \Log::error('Update profile error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the profile.');
        }
    }
    public function changePassword(Request $request)
    {
        try {
            $user = Auth::user();

            $validatedData = $request->validate([
                'old_password' => 'required|string',
                'new_password' => 'required|string|min:8|confirmed',
            ]);
 dd(Hash::check($validatedData['old_password']));
            // Check if the old password matches the user's current password
            if (!Hash::check($validatedData['old_password'], $user->password)) {
                return redirect()->back()->with('error', 'Mật khẩu không đúng');
            }

            // Update the user's password
            $user->update(['password' => Hash::make($validatedData['new_password'])]);

            return redirect()->route('profile')->with('success', 'Password changed successfully.');
        } catch (\Exception $e) {
            \Log::error('Change password error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while changing the password.');
        }
    }
}
