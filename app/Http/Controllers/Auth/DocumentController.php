<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Document;
use App\Models\Web_config;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Classes $class, Request $request)
    {
        // Retrieve the search query from the request
        $searchQuery = $request->input('query');
    
        // Retrieve the class and its associated documents
        $documentsQuery = $class->documents()->latest();
    
        // If a search query is provided, filter the documents
        if ($searchQuery) {
            $documentsQuery->where('name', 'like', '%' . $searchQuery . '%');
        }
    
        // Paginate the results (5 items per page)
        $documents = $documentsQuery->paginate(6);
    
        // Retrieve all classes (you may adjust this based on your needs)
        $classes = Classes::all();
    
        // Get the name of the current class
        $clss = $class->name;
    
        // Retrieve the web configuration (you may adjust this based on your needs)
        $webConfig = Web_config::find(1);
    
        return view('document.index', compact('class', 'classes', 'clss', 'webConfig', 'documents', 'searchQuery'));
    }
    public function detail($id)
    {
        $document = Document::findOrFail($id);
        $classes = Classes::all();
        $webConfig = Web_config::find(1);
        // $news->increment('is_views'); // Tăng giá trị is_views
        return view('document.detail', compact('document','classes','webConfig'));  //Trả về view có tên 'blog.detail' và truyền biến $news, $fullUrl, và $otherNews vào view.
    }
    
}
