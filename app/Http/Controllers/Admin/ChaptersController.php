<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('query');
        $lessonId = $request->input('lesson_id');

        $itemsPerPage = 5;

        // Trang hiện tại
        $currentPage = $request->input('page', 1);

        // Tính tổng số mục
        $totalItems = Chapter::count();

        // Tính tổng số trang
        $totalPages = ceil($totalItems / $itemsPerPage);

        // Lấy dữ liệu của trang hiện tại
        $curriculum = Chapter::when($request->input('query'), function ($query) use ($request) {
            return $query->where('title', 'like', '%' . $request->input('query') . '%');
        })->when($request->input('lesson_id'), function ($query) use ($request) {
            return $query->where('lesson_id', $request->input('lesson_id'));
        })->skip(($currentPage - 1) * $itemsPerPage)
            ->take($itemsPerPage)
            ->get();
        $lessons = Lesson::all();

        return view('admin.curriculum.index', compact('searchQuery', 'lessonId', 'lessons', 'curriculum', 'totalPages', 'curriculum', 'currentPage'));
    }
    public function create()
    {
        $lessons = Lesson::all(); // Lấy danh sách bài học

        return view('admin.curriculum.create', compact('lessons'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'lesson_id' => 'required|exists:lessons,id',
            'title' => 'required|string',
            'content' => 'nullable|string',
        ], [
            'title.required' => 'Tiêu đề hương chình học',
            'exists' => 'The selected :attribute does not exist in the lessons table.',
            'string' => 'The :attribute must be a string.',
        ]);

        $chapter = new Chapter([
            'lesson_id' => $request->input('lesson_id'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        $chapter->save();

        return redirect()->route('curriculum.index')->with('success', 'Thêm mới thành công.');
    }
    public function edit(Chapter $chapter)
    {
        $lessons = Lesson::all();
        return view('admin.curriculum.edit', compact('lessons', 'chapter'));
    }
    public function update(Request $request, Chapter $chapter)
    {
        $request->validate([
            'lesson_id' => 'required',
            'title' => 'required|string',
            'content' => 'required|string',
        ],[
           'lesson_id.required' => 'Trường này là bắt buộc',
           'title.required' => 'Tiêu đề là bắt buộc',
           'content.required' => 'Mô tả là bắt buộc',
        ]);

        $chapter->update([
            'lesson_id' => $request->input('lesson_id'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('curriculum.index')
            ->with('success', 'Cập nhật thành công.');
    }
    public function search(Request $request)
    {
        $query = Chapter::query();
        if ($request->has('lesson_id')) {
            $query->where('lesson_id', $request->input('lesson_id'));
        }
        $searchQuery = $request->input('query');
        $itemsPerPage = 5;
        $currentPage = $request->input('page', 1);
        $totalItems = $query->count();
        $curriculum = $query->skip(($currentPage - 1) * $itemsPerPage)
            ->take($itemsPerPage)
            ->get();
        $lessons = Lesson::all();

        // Tính tổng số trang
        $totalPages = ceil($totalItems / $itemsPerPage);
        return view('admin.curriculum.index', compact('searchQuery', 'currentPage', 'totalPages', 'lessons', 'curriculum'));
    }
    public function destroy(Chapter $chapter)
    {
       
        $chapter->delete();

        return redirect()->route('curriculum.index')
            ->with('success', 'Xóa thành công.');
    }
}
