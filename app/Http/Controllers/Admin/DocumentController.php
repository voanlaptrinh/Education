<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(Request $request, $class = null)
    {
        $searchQuery = $request->input('query'); // Capture the search query
    $class = $request->input('class'); // Capture the class ID if needed

    $documents = Document::query();

    // Filter by class if provided
    if ($class) {
        $documents->where('classes_id', $class);
    }

    // Filter by search query if provided
    if ($searchQuery) {
        $documents->where('name', 'like', '%' . $searchQuery . '%');
    }

    // Sort by latest and paginate with 5 items per page
    $documents = $documents->latest()->paginate(10);

    // Append query parameters to pagination links
    $documents->appends(['query' => $searchQuery, 'class' => $class]);
    
        return view('admin.document.index', compact('documents', 'searchQuery'));
    }
    
    public function create()
    {
        $classes = Classes::all();
        return view('admin.document.create', compact('classes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'classes_id' => 'required|exists:classes,id',
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:pdf', // Giới hạn kích thước tệp PDF (đơn vị KB)
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'access_level' => 'required',
            'price' => 'required_if:access_level,paid',
        ], [
            'name.required' => 'Bắt buộc nhập tiêu đề',
            'classes_id.required' => 'Bắt buộc nhập tiêu đề',
            'classes_id.exists' => 'ID phải tồn tại ở lớp học',
            'description.required' => 'Bắt buộc nhập mô tả',
            'file.required' => 'Bắt buộc upload file PDF',
            'file.mimes' => 'Filde up lên phải là dạng PDF',
            'image.required' => 'Bắt buộc upload ảnh',
            'image.image' => 'File phải là hình ảnh',
            'image.mimes' => 'File ảnh phải có định dạng jpeg, png, jpg hoặc gif',
        ]);
        if ($request->access_level == 'paid' && empty($request->price)) {
            return redirect()->back()->with('error', 'Giá là bắt buộc khi chọn tùy chọn "Paid"');
        }
        $classes = Classes::findOrFail($request->input('classes_id', old('classes_id')));

        $file = $request->file('file');
        $filePath = $file->store('documents', 'public');
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
        }
        $document = new Document([
            'name' => $request->input('name', old('name')),
            'description' => $request->input('description', old('description')),
            'file_path' => $filePath,
            'image_path' => $imagePath,
            'access_level' => $request->input('access_level', old('access_level')),
            'price' => $request->input('price', old('price')),
        ]);
        $classes->documents()->save($document);

        return redirect()->route('document.admin')->with('success', 'Tài liệu được thêm thành công');
    }
    public function edit($id)
    {
        $document = Document::findOrFail($id);
        $classes = Classes::all();

        return view('admin.document.edit', compact('document', 'classes'));
    }
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'classes_id' => 'required|exists:classes,id',
            'name' => 'required',
            'description' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048', // Giới hạn kích thước tệp PDF
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn kích thước hình ảnh
            'access_level' => 'required',
            'price' => 'required_if:access_level,paid',
        ], [
            'name.required' => 'Bắt buộc nhập tiêu đề',
            'classes_id.required' => 'Bắt buộc chọn lớp học',
            'classes_id.exists' => 'ID phải tồn tại ở lớp học',
            'description.required' => 'Bắt buộc nhập mô tả',
            'file.mimes' => 'File upload phải là định dạng PDF',
            'file.max' => 'Kích thước tệp PDF không được vượt quá 2MB',
            'image.image' => 'File phải là hình ảnh',
            'image.required' => 'Bắt buộc upload ảnh',
            'image.mimes' => 'File ảnh phải có định dạng jpeg, png, jpg hoặc gif',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB',
            'access_level.required' => 'Bắt buộc chọn cấp quyền truy cập',
            'price.required_if' => 'Giá là bắt buộc khi chọn tùy chọn "Paid"',
        ]);

        // Lưu trữ đường dẫn file cũ trước khi cập nhật
        $oldFilePath = $document->file_path;

        // Cập nhật các trường thông tin của tài liệu
        $document->update([
            'classes_id' => $request->input('classes_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'access_level' => $request->input('access_level'),
            'price' => $request->input('price'),
        ]);

        // Kiểm tra xem có file mới được tải lên không
        if ($request->hasFile('file')) {
            // Xóa file cũ
            if ($oldFilePath) {
                Storage::disk('public')->delete($oldFilePath);
            }

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
    public function getDocumentDetails($id)
    {
        $document = Document::find($id);

        if (!$document) {
            return response()->json(['error' => 'document not found'], 404);
        }

        return response()->json($document);
    }
}
