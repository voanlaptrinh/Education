<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\Classes;
use App\Models\ExamHistory;
use App\Models\Purchase;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Web_config;
use App\Providers\RouteServiceProvider;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $classes = Classes::where('status', 1)->orderBy('id', 'asc')->get();
        $webConfig = Web_config::find(1);
        $message = $request->session()->all();

        return View('auth.login', compact('message', 'webConfig', 'classes'));
    }
    public function postLogin(Request $request)
    {
        // Kiểm tra và xác nhận dữ liệu đầu vào
        $request->validate(
            [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ],
            [
                'email.required' => 'Phải nhập email',
                'email.email' => 'Email không hợp lệ',
                'password.required' => 'Phải nhập mật khẩu',
            ]
        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->checkSubscriptionStatus();
            //sử lí tình trạng khi bị khóa
            if (($user->status) == 0) {
                Auth::logout();
                return redirect()->route('login')->with('warning', 'Tài khoản của bạn đã bị tạm khóa.');
            }
            if (($user->user_type) == 0) {
                //khi Người dụng là admin sẽ route tiwois trang admin
                return redirect()->route('admin.index')->with('success', 'Đăng nhập quản trị thành công!');
            }
            if (!is_null($user->email_verified_at)) {
                return redirect()->intended('/')->with('success', 'Bạn đã đăng nhập thành công!');
            } else {
                // Người dùng đã đăng nhập nhưng chưa xác nhận email
                // Lưu thông báo vào session
                Auth::logout();
                return redirect()->route('login')->with('warning', 'Bạn vui lòng xác nhận tài khoản của mình trong email.');
            }
        }

        return redirect('/login')->with('error', 'Thông tin đăng nhập không đúng.');
    }
    public function postLoginTutor(Request $request)
    {
        // Kiểm tra và xác nhận dữ liệu đầu vào
        $request->validate(
            [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ],
            [
                'email.required' => 'Phải nhập email',
                'email.email' => 'Email không hợp lệ',
                'password.required' => 'Phải nhập mật khẩu',
            ]
        );

        if (Auth::guard('tutor')->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công.');
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không đúng.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('tutor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/tutor/login');
    }

    public function register(Request $request)
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        return View('auth.register', compact('classes', 'webConfig'));
    }
    public function postRegister(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string', // chỉ áp dụng trong bang users
            'email' => 'required|string|email|unique:users',
            'phone' => 'nullable|string', //cho phép để trống
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
            'gender.in' => 'Giới tính không hợp lệ.', //Nếu giá trị của trường "gender" không thuộc danh sách giá trị hợp lệ,
            // hiển thị thông báo lỗi "Giới tính không hợp lệ".
            'birthday.required' => 'Vui lòng nhập ngày sinh của bạn',
        ]);

        $user = new User(); // tạo users mới
        $user->name = $request->input('name'); // lấy từ ô input trg đó có name
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone =  $request->input('phone');
        $user->password =  Hash::make($request->input('password'));
        $user->gender =  $request->input('gender');
        $user->birthday =  $request->input('birthday');
        $user->address =  $request->input('address');
        $user->status =  1;
        $user->user_type =  1;
        $user->verification_token = Str::random(40); // Gán một chuỗi ngẫu nhiên có độ dài 40 ký tự cho thuộc tính "verification_token"
        //. Thường được sử dụng để xác nhận email hoặc các quá trình xác minh khác.


        $user->save(); // lưu bản ghi mới vào db
        $verificationLink = route('verify.email', ['token' => $user->verification_token]);

        // Create an instance of VerifyEmail class
        $verificationEmail = new VerifyEmail($user->name, $verificationLink);

        // Send the email
        Mail::to($user->email)->send($verificationEmail);
        return redirect('/login')->with('success', 'Vui lòng vào Email của bạn để xác nhận đăng kí!');
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
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        return view('auth.profile_account', compact('user', 'classes', 'webConfig'));
    }
    public function update(Request $request, User $user)

    {

        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255|regex:/^[0-9]{10}$/',
      
            'address' => 'nullable|string|max:255',
            'gender' => 'required|in:0,1',
            'birthday' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Trường tên không được bỏ trống.',
            'name.string' => 'Trường tên phải là chuỗi.',
            'name.max' => 'Trường tên không được vượt quá 255 ký tự.',

            'username.required' => 'Trường tên người dùng không được bỏ trống.',
            'username.string' => 'Trường tên người dùng phải là chuỗi.',
            'username.max' => 'Trường tên người dùng không được vượt quá 255 ký tự.',

            'phone.string' => 'Trường số điện thoại phải là chuỗi.',
            'phone.max' => 'Trường số điện thoại không được vượt quá 255 ký tự.',
            'phone.regex' => 'Số điện thoại phải có đúng 10 chữ số.',
            'address.string' => 'Trường địa chỉ phải là chuỗi.',
            'address.max' => 'Trường địa chỉ không được vượt quá 255 ký tự.',

            'gender.required' => 'Trường giới tính không được bỏ trống.',
            'gender.in' => 'Trường giới tính không hợp lệ.',

            'birthday.date' => 'Trường ngày sinh phải là kiểu ngày.',

            'profile_picture.image' => 'Trường hình đại diện phải là hình ảnh.',
            'profile_picture.mimes' => 'Trường hình đại diện phải có định dạng jpeg, png, jpg, gif.',
            'profile_picture.max' => 'Trường hình đại diện không được vượt quá 2048 KB.',
        ]);

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
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
     

        $user->save();
        return redirect()->route('profile', compact('user'))->with('success', 'Sửa thông tin tài khoản thành công.');
    }
    public function changePassword(Request $request)
    {
        try {
            $user = Auth::user(); //à phương thức được sử dụng để trả về đối tượng đại diện cho người dùng đang đăng nhập (hoặc null nếu không có người dùng nào đang đăng nhập).

            $validatedData = $request->validate([
                'old_password' => 'required|string',
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            if (!Hash::check($validatedData['old_password'], $user->password)) {
                return redirect()->back()->with('error', 'Mật khẩu không đúng');
            }

            // Update the user's password
            $user->update(['password' => Hash::make($validatedData['new_password'])]);
            return redirect()->route('profile', ['user' => $user->id])->with('success', 'Đổi mật khẩu thành công.');
        } catch (\Exception $e) {
            \Log::error('Change password error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi đổi mật khẩu.');
        }
    }

    public function examHistory()
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);


        if (!empty(auth()->user())) {

            $examHistory = ExamHistory::where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc') // Assuming you want to order by creation date
                ->paginate(10); // Adjust the number based on your requirements


            // Calculate and update remaining time for each exam history record
            foreach ($examHistory as $exam) {
                if ($exam->completed_at === null) {
                    // If the exam is not completed yet, calculate the remaining time
                    $startedAt = Carbon::parse($exam->started_at);
                    $currentTime = Carbon::now();
                    $elapsedTimeInSeconds = $currentTime->diffInSeconds($startedAt);
                    $remainingTimeInSeconds = $exam->time_limit - $elapsedTimeInSeconds;
                    // Ensure remaining time is not negative
                    $exam->remaining_time = max(0, $remainingTimeInSeconds);
                    $exam->save();
                }
            }
            return view('users.exam_history', compact('examHistory', 'webConfig', 'classes'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem thông tin tài khoản');
        }
    }
    public function subscriptionHistory()
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        if (!empty(auth()->user())) {

            $subscriptionHistory = Purchase::where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
                $user = Auth::user();
                $expirationDate = Carbon::parse($user->subscription_expiration_date);
                $formattedDate = $expirationDate->format('d-m-Y');
            return view('users.subscription_history', compact('subscriptionHistory','formattedDate', 'webConfig', 'classes'));
        } else {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để xem thông tin tài khoản');
        }
    }
    public function destroy($id)
    {
        $examHistory = ExamHistory::findOrFail($id);
        $examHistory->delete();

        return redirect()->back()->with('success', 'Xoá thành công!');
    }
}
