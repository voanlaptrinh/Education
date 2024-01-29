<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            return redirect('/login')->with('success', 'Email xác nhận thành công!');
        } else {
            return redirect('/login')->with('error', 'Mã xác nhận không hợp lệ.');
        }
    }
}
