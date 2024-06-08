<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index(Request $request, $class = null)
    {
        $searchQuery = $request->input('query'); // Capture the search query
        // $class = $request->input('class_id'); // Capture the class_id if needed
    
        $tutor = Tutor::query();
    // dd($class);
        // Filter by class if provided
    
        // Filter by search query if provided
        if ($searchQuery) {
            $tutor->where('name', 'like', '%' . $searchQuery . '%');
        }
    
        // Sort by latest and paginate with 5 items per page
        $tutor = $tutor->latest()->paginate(10);
    
        // Append query parameters to pagination links
        $tutor->appends(['query' => $searchQuery]);

      
        return view('admin.tutor.index', compact('tutor','searchQuery'));
    }
    public function create(){
        return view('admin.tutor.create');
    }
}
