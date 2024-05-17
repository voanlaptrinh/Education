<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
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
        $users = User::where('user_type', 1)->get();
        $purchases = Purchase::where('transaction_status', 00)->get();

        return view('admin.admin-dashboard', compact('webConfig','totalContact','users', 'purchases', 'reviews', 'totalLectures', 'totalUser', 'totalReviews'));
    }
public function banner(){
    $banner = Banner::find(1);
    return view('admin.banner.index', compact('banner'));
    
}
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|max:255',
            'name' => 'required|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // Thêm các validation cho các trường khác nếu cần
        ]);

        $banner = Banner::find($id);
        $banner->description = $request->input('description');
        $banner->name = $request->input('name');
        $banner->link_button = $request->input('link_button');
        $banner->link_video = $request->input('link_video');
        // Cập nhật các trường khác nếu cần
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $banner->image_path = $imagePath;
        }
        $banner->save();

        return redirect('admin/banners')->with('success', 'Dữ liệu banner đã được cập nhật thành công!');
    }
}
