<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(Request $request)
    {

        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery

        $classes = Classes::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('name', 'like', '%' . $searchQuery . '%');
        })->latest()->paginate(10);
        $totalClasses = Classes::count();
        $activeClasses = Classes::where('status', '1')->count();
        $unactiveClasses = Classes::where('status', '0')->count();
        return view('admin.classes.index', compact('classes', 'searchQuery', 'totalClasses', 'activeClasses', 'unactiveClasses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
        ]);

        Classes::create([
            'name' => $request->name,
            'status' => $request->status,

        ]);

        return redirect('/admin/classes')->with('success', 'Thêm mới lớp học thành công!');
    }
    public function toggleStatus($id)
    {
        $user = Classes::findOrFail($id);

        // Đảo ngược trạng thái
        $user->status = $user->status == 1 ? 0 : 1;

        $user->save();

        return redirect()->back()->with('success', 'Trạng thái lớp học đã được cập nhật.');
    }
    public function destroy(Classes $class)
    {
        $class->delete();

        return redirect('/admin/classes')->with('success', 'Xóa lớp học thành công!');
    }
    // Trong file app/Http/Controllers/Admin/ClassController.php

    public function show($id)
    {
        $class = Classes::findOrFail($id);
        if (!$class) {
            return response()->json(['error' => 'Class not found'], 404);
        }
        return response()->json($class);
    }
    public function update(Request $request, $id)
    {
        $class = Classes::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
            // Thêm các quy tắc kiểm tra khác nếu cần
        ]);

        $class->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật thông tin lớp học thành công!');
    }
}
