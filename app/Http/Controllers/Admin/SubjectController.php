<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.index', compact('subjects'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
        ]);

        Subject::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect('/admin/subjects')->with('success', 'Thêm mới khóa học thành công!');
    }
}
