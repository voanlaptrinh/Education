<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomPasswordResetController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('auth.custom-passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $reset = DB::table('users')->where('email', $request->email)->first();

        if (!$reset || !Hash::check($request->token, $reset->password_reset_token) || Carbon::now()->gt($reset->password_reset_expires_at)) {
            // Invalid token or expired
            return redirect()->back()->with('error', 'Invalid or expired password reset token');
        }

        // Update the user's password and reset token
        DB::table('users')
            ->where('email', $request->email)
            ->update([
                'password' => Hash::make($request->password),
                'password_reset_token' => null,
                'password_reset_expires_at' => null,
            ]);

        return redirect('/login')->with('success', 'Password reset successfully');
    }
}
