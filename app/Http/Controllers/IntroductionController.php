<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Introduction;
use App\Models\Web_config;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function introduction(Request $request)
    {
        $webConfig = Web_config::find(1);
        $introduction = Introduction::find(1);
        $classes = Classes::where('status', 1)->get();
        return view('introduction.index', compact('introduction','webConfig','classes'));
    }
}
