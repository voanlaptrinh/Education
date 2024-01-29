<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Lesson;
use App\Models\Web_config;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $classes = Classes::all();
        $bai_hoc = Lesson::all();
        $webConfig = Web_config::find(1);
        return View('pages.index',compact('classes','webConfig','bai_hoc') );
    }
}
