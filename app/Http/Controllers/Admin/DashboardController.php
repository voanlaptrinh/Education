<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Web_config;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $webConfig = Web_config::find(1);
        return view('admin.admin-dashboard',compact('webConfig'));
    }
}
