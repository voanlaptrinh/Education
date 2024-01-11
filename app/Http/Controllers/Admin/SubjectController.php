<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('test.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('test.subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Subject::create([
            'name' => $request->name,
        ]);

        return redirect('/subjects')->with('success', 'Subject created successfully!');
    }
}
