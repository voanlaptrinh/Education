<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordMail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
 
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

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
