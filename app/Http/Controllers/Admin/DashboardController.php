<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Lecture;
use App\Models\Purchase;
use App\Models\Review;
use App\Models\User;
use App\Models\Web_config;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $webConfig = Web_config::find(1);


        $totalUser = User::where('user_type', 1)->count();
        $totalReviews = Review::all()->count();
        $totalLectures = Lecture::all()->count();
        $totalContact = Contact::all()->count();
        $reviews = Review::orderBy('id', 'asc')->get();
        $purchases = Purchase::where('transaction_status', 00)->get();

        return view('admin.admin-dashboard', compact('webConfig','totalContact', 'purchases', 'reviews', 'totalLectures', 'totalUser', 'totalReviews'));
    }
}
