<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(){
        $student = User::where('user_type' , 1)->paginate(10);
        $totalStudent = User::where('user_type', '!=', 0)->count();
        $totalStudent_1 = User::where('user_type', '!=', 0)
        ->where('status', 1)
        ->count();
        $totalStudent_2 = User::where('user_type', '!=', 0)
        ->where('status', 0)
        ->count();

        return view('admin.student.index',compact('student','totalStudent_2','totalStudent_1','totalStudent'));
    }
    public function index2(){
        $student = User::where('user_type' ,1)->paginate(10);
        $totalStudent = User::where('user_type', '!=', 0)->count();
        $totalStudent_1 = User::where('user_type', '!=', 0)
        ->where('status', 1)
        ->count();
        $totalStudent_2 = User::where('user_type', '!=', 0)
        ->where('status', 0)
        ->count();

        return [$student, $totalStudent];
    }
    
    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);

        // Đảo ngược trạng thái
        $user->status = $user->status == 1 ? 0 : 1;

        $user->save();

        return redirect()->back()->with('success', 'Trạng thái tài khoản đã được cập nhật.');
    }
    public function show($studentS)
    {
        $user = User::findOrFail($studentS);

        return response()->json($user);
    }
    public function edit ($id){
        $user = User::find($id);
        return view('admin.student.edit', compact('user'));
    }
    public function update(Request $request, User $user)

    {

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
        $passdecode = bcrypt( $request->input('password'));
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->password = $passdecode;
        

        if ($request->hasFile('image')) {
            $logoPath = $request->file('image')->store('profile_pictures', 'public');
            $user->image = $logoPath;
        }

        $user->save();
        return redirect()->route('student.index', compact('user'))->with('success', 'Sửa thông tin tài khoản thành công.');
    }
}
