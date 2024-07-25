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
        $classes = Classes::where('status', 1)->get();
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
    
        $user = \App\Models\User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors(['email' => 'Email này chưa được đăng ký']);
        }
    
        // Create a password reset token for the user
        $token = Password::createToken($user);
    
        // Generate the reset link with email parameter
        $resetLink = URL::to('/reset-password/' . $token . '?email=' . urlencode($user->email));
    
        // Send the reset password email
       \Mail::to($user->email)->send(new ResetPasswordMail($resetLink));
    
        return back()->with('success', 'Email xác nhận đã được gửi vui lòng vào Email của bạn để xác nhận!');
    }
    
}
