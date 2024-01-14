<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery

        $subjects = Subject::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('name', 'like', '%'.$searchQuery.'%');
        })->get();
        $classes = Classes::all();
        $totalSubjects = Subject::count();
        $activeSubjects = Subject::where('status', '1')->count();
        $unactiveSubjects = Subject::where('status', '0')->count();
        return view('admin.subjects.index', compact('subjects','classes','totalSubjects','activeSubjects','unactiveSubjects','searchQuery'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
            'class_id' => 'required|exists:classes,id',
        ]);

        Subject::create([
            'name' => $request->name,
            'status' => $request->status,
            'class_id' => $request->class_id,
        ]);

        return redirect('/admin/subjects')->with('success', 'Thêm mới khóa học thành công!');
    }
    
}
