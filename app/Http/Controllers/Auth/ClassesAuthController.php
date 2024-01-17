<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesAuthController extends Controller
{
    public function show(Classes $class)
    {
        return view('classes.show', compact('class'));
    }
}
