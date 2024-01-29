<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use App\Models\Classes;
use App\Models\Web_config;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
 
    public function showLinkRequestForm()
    {
        $webConfig = Web_config::find(1);
        $classes = Classes::all();
        return view('auth.passwords.email', compact('webConfig','classes'));
    }
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Phải nhập email',
            'email.email' => 'Email không hợp lệ',
            'email.exists' => 'Email này chưa được đăng ký',
        ]);
    
        // Kiểm tra xem email có tồn tại trong hệ thống không
        $user = \App\Models\User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors(['email' => 'Email này chưa được đăng ký']);
        }

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response == Password::RESET_LINK_SENT) {
            $userEmail = $request->email;
            $resetLink = URL::to('/reset-password/'.$response); // sử dụng response trả về từ hàm sendResetLink

            \Mail::to($userEmail)->send(new ResetPasswordMail($resetLink));

            return back()->with(['status' => 'Reset link sent successfully']);
        }

        return $response == Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($response)])
                    : back()->withErrors(['email' => __($response)]);
    }
    
}
