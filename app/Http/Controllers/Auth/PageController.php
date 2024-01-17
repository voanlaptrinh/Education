<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $classes = Classes::all();
        return View('pages.index',compact('classes') );
    }
}
