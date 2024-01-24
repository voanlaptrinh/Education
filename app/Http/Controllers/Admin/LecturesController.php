<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index(Lesson $lesson)
    {
        $lectures = $lesson->lectures;

        return view('admin.lectures.index', compact('lesson', 'lectures'));
    }
    public function create()
    {
        // Retrieve lessons for the dropdown
        $lessons = Lesson::all();

        return view('admin.lectures.create', compact('lessons'));
    }
    public function store(Request $request)
    {
        // dd($request->file('video'));
        $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string',
            'video' => 'required|mimes:mp4,avi,wmv',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lesson_id' => 'required|exists:lessons,id',
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        $lecture = new Lecture([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
            'video' => $videoPath,
            'lesson_id' => $request->input('lesson_id'),
        ]);

      $lecture->save();

        return redirect()->route('lectures.index')->with('success', 'Lecture created successfully.');
    }
}
