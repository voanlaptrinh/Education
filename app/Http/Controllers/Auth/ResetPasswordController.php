<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Web_config;
// use Dotenv\Exception\ValidationException;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        $classes = Classes::where('status', 1)->orderBy('id', 'asc')->get();
        $webConfig = Web_config::find(1);
        return view('auth.passwords.reset', compact('classes','webConfig'))->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ResetPassEmail(Request $request)
    {
      
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:8',
        ]);
        
        try {
            $response = $this->broker()->reset(
                $this->credentials($request),
                function ($user, $password) {
                    $this->resetPassword($user, $password);
                }
            );
        } catch (\Exception $e) {
            Log::error('Error resetting password: ' . $e->getMessage());
        }
        // dd(Password::PASSWORD_RESET , $response);
        if (!empty($response)) {
            // Quá trình đặt lại mật khẩu thành công
            return redirect('/login')->with('success', 'Mật khẩu đã được đổi thành công!');
        } else {
            // Xử lý lỗi nếu có
            throw ValidationException::withMessages(['email' => [trans($response)]]);
        }
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}
