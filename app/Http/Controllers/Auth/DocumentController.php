<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Document;
use App\Models\Web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DocumentController extends Controller
{
    public function index(Classes $class, Request $request)
    {
        $searchQuery = $request->input('query');
        $documentsQuery = $class->documents()->latest();
        if ($searchQuery) {
            $documentsQuery->where('name', 'like', '%' . $searchQuery . '%');
        }
        $documents = $documentsQuery->paginate(6);
        $classes = Classes::where('status', 1)->get();
        $clss = $class->name;
        $webConfig = Web_config::find(1);

        return view('document.index', compact('class', 'classes', 'clss', 'webConfig', 'documents', 'searchQuery'));
    }
    public function detail($id)
    {
        $document = Document::findOrFail($id);
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        $user = Auth::user();
        if ($document->access_level == 'free' || ($document->access_level == 'pro' && $user && $user->is_pro == 1)) {
            return view('document.detail', compact('document', 'classes', 'webConfig'));
        } elseif ($document->access_level == 'paid') {
            return redirect()->back()->with('error', 'Bạn vui lòng thanh toán số tiền để tải về');
        } else {
            // Chuyển hướng đến trang subscription nếu không đủ quyền
            return redirect()->route('subscriptions.index')->with('error', 'Bạn cần là người dùng Pro để xem tài liệu này.');
        }

        // $news->increment('is_views'); // Tăng giá trị is_views
    }
    public function download($documentId)
    {
        $document = Document::find($documentId);
        if (!$document) {
            abort(404);
        }
        $filePath = 'public/' . $document->file_path;
        $file = storage_path('app/' . $filePath);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $document->name . '.pdf"',
        ];
        return new BinaryFileResponse($file, 200, $headers);
    }
   
}
