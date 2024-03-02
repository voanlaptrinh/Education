<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Review;
use App\Models\User;
use App\Models\Web_config;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $webConfig = Web_config::find(1);
   

		$totalUser = User::where('user_type', 1)->count();
		$totalReviews = Review::all()->count();
		$totalLectures = Lecture::all()->count();
		$reviews = Review::orderBy('id', 'asc')->get();
		   
		
        return view('admin.admin-dashboard',compact('webConfig','reviews','totalLectures','totalUser','totalReviews'));
    }
}
