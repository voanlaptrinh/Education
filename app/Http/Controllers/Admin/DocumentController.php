<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery
        $documents = Document::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('name', 'like', '%' . $searchQuery . '%');
        })->latest()->paginate(5);
        return view('admin.document.index', compact('documents', 'searchQuery'));
    }
    public function create()
    {
        $classes = Classes::all();
        return view('admin.document.create',compact('classes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'classes_id' => 'required|exists:classes,id',
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf|max:10240', // Giới hạn kích thước tệp PDF (đơn vị KB)
        ],[
            'name.required' =>'Bắt buộc nhập tiêu đề',
            'classes_id.required' =>'Bắt buộc nhập tiêu đề',
            'classes_id.exists' =>'ID phải tồn tại ở lớp học',
            'description.required' =>'Bắt buộc nhập mô tả',
            'file.required' =>'Bắt buộc upload file PDF',
            'file.mimes' =>'Filde up lên phải là dạnh PDF',
        ]);

        $classes = Classes::findOrFail($request->input('classes_id'));

        $file = $request->file('file');
        $filePath = $file->store('documents', 'public');
        $document = new Document([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'file_path' => $filePath,
        ]);
        $classes->documents()->save($document);

        return redirect()->route('document.admin')->with('success', 'Tài liệu được thêm thành công');
    }
    public function destroy(Document $document)
    {
       
        $document->delete();

        return redirect()->route('document.admin')
            ->with('success', 'Xóa thành công.');
    }
}
