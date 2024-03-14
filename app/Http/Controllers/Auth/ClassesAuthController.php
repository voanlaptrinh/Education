<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Web_config;
use Illuminate\Http\Request;

class ClassesAuthController extends Controller
{
    public function show(Classes $class)
    {
        $webConfig = Web_config::find(1);
        $classes = Classes::where('status', 1)->get();
        return view('classes.show', compact('class','classes','webConfig'));
    }
}
