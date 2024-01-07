<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = User::paginate(5);
        $totalStudent = User::where('user_type', '!=', 0)->count();
        return view('admin.student.index',compact('student','totalStudent'));
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
