<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'file' => 'required|mimes:pdf', // Giới hạn kích thước tệp PDF (đơn vị KB)
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
    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('admin.document.edit', compact('document'));
    }
    public function update(Request $request, Document $document)
{
    $request->validate([
        'classes_id' => 'required|exists:classes,id',
        'name' => 'required',
        'description' => 'required',
        'file' => 'nullable|mimes:pdf', // Nếu bạn muốn cho phép không cập nhật file
    ]);

    $classes = Classes::findOrFail($request->input('classes_id'));

    // Cập nhật các trường thông tin của tài liệu
    $document->update([
        'classes_id' => $request->input('classes_id'),
        'name' => $request->input('name'),
        'description' => $request->input('description'),
    ]);

    // Kiểm tra xem có file mới được tải lên không
    if ($request->hasFile('file')) {
        // Xóa file cũ
        Storage::disk('public')->delete($document->file_path);

        // Tải lên file mới
        $file = $request->file('file');
        $filePath = $file->store('documents', 'public');
        
        // Cập nhật đường dẫn của file mới
        $document->update(['file_path' => $filePath]);
    }

    return redirect()->route('document.admin')->with('success', 'Tài liệu được cập nhật thành công');
}
    public function destroy(Document $document)
    {
       
        $document->delete();

        return redirect()->route('document.admin')
            ->with('success', 'Xóa thành công.');
    }
}
