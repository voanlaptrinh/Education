<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(Request $request, $class = null)
    {
        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery

        // $subjects = Subject::when($searchQuery, function ($query) use ($searchQuery) {
        //     return $query->where('name', 'like', '%'.$searchQuery.'%');
        // })->latest()->get();
        $subjects = Subject::query();

        // Nếu có class được truyền, lọc theo class
        if ($class) {
            $subjects->where('class_id', $class);
        }
  
    
        // Lọc theo query tìm kiếm nếu có
        if ($searchQuery) {
            $subjects->where('name', 'like', '%' . $searchQuery . '%');
        }
    
        // Sắp xếp theo thứ tự mới nhất và phân trang
        $subjects = $subjects->latest()->paginate(5);

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
            'description' => 'required|string',
            'class_id' => 'required|exists:classes,id',
        ],[
            'name.required' => 'Tên môn học là bắt buộc',
            'status.required' => 'Trạng thái là bắt buộc',
            'description.required' => 'Mô tả là bắt buộc',
            'class_id.exists' => 'ID phải tồn tại ở lớp học',
         ]);

        Subject::create([
            'name' => $request->name,
            'status' => $request->status,
            'description' => $request->description,
            'class_id' => $request->class_id,
        ]);

        return redirect('/admin/subjects')->with('success', 'Thêm mới môn học thành công!');
    }
    public function toggleStatus($id)
    {
        $user = Subject::findOrFail($id);
        $user->status = $user->status == 1 ? 0 : 1;

        $user->save();

        return redirect()->back()->with('success', 'Trạng thái môn học đã được cập nhật.');
    }
    public function show($id)
    {
        $class = Subject::findOrFail($id);
        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }
        return response()->json($class);
    }
    public function update(Request $request, $id)
    {
        $class = Subject::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
            'description' => 'required',
            'class_id' => 'required|exists:classes,id',

            // Thêm các quy tắc kiểm tra khác nếu cần
        ],[
            'name.required' => 'Tên môn học là bắt buộc',
            'status.required' => 'Trạng thái là bắt buộc',
            'description.required' => 'Mô tả là bắt buộc',
            'class_id.exists' => 'ID phải tồn tại ở lớp học',
         ]);

        $class->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật thông tin môn học thành công!');
    }
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect('/admin/subjects')->with('success', 'Xóa môn học thành công!');
    }
}
