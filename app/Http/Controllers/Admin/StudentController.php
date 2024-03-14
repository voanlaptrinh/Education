<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = User::where('user_type' ,1)->paginate(5);
        $totalStudent = User::where('user_type', '!=', 0)->count();
        $totalStudent_1 = User::where('user_type', '!=', 0)
        ->where('status', 1)
        ->count();
        $totalStudent_2 = User::where('user_type', '!=', 0)
        ->where('status', 0)
        ->count();

        return view('admin.student.index',compact('student','totalStudent_2','totalStudent_1','totalStudent'));
    }
    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);

        // Đảo ngược trạng thái
        $user->status = $user->status == 1 ? 0 : 1;

        $user->save();

        return redirect()->back()->with('success', 'Trạng thái tài khoản đã được cập nhật.');
    }
}
