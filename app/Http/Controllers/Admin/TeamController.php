<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Teams;
use App\Models\Web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $query = Teams::query();
        $search = $request->input('search');

        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        }

        $teams = $query->paginate(10);
        $webConfig = Web_config::find(1);

        return view('admin.teams.index', compact('teams', 'webConfig', 'search'));
    }


    public function create()
    {
        $classes = Classes::all();
        return view('admin.teams.create', compact('classes'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'cuisine' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'web' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'name.string' => 'Tên phải là một chuỗi ký tự.',
            'name.max' => 'Tên không được dài quá 255 ký tự.',
            'cuisine.required' => 'Môn giảng dạy là bắt buộc.',
            'cuisine.string' => 'Môn giảng dạy phải là một chuỗi ký tự.',
            'cuisine.max' => 'Môn giảng dạy không được dài quá 255 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'email.max' => 'Email không được dài quá 255 ký tự.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
            'phone.max' => 'Số điện thoại không được dài quá 15 ký tự.',
            'web.string' => 'Trang web phải là một chuỗi ký tự.',
            'web.max' => 'Trang web không được dài quá 255 ký tự.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được dài quá 255 ký tự.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'facebook.string' => 'Facebook phải là một chuỗi ký tự.',
            'facebook.max' => 'Facebook không được dài quá 255 ký tự.',
            'instagram.string' => 'Instagram phải là một chuỗi ký tự.',
            'instagram.max' => 'Instagram không được dài quá 255 ký tự.',
            'twitter.string' => 'Twitter phải là một chuỗi ký tự.',
            'twitter.max' => 'Twitter không được dài quá 255 ký tự.',
            'linkedin.string' => 'LinkedIn phải là một chuỗi ký tự.',
            'linkedin.max' => 'LinkedIn không được dài quá 255 ký tự.',
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, jpeg, hoặc png.',
            'image.max' => 'Hình ảnh không được lớn hơn 2048 KB.',
            'content.string' => 'Nội dung phải là một chuỗi ký tự.',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imageName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('images', $imageName, 'public');
        } else {
            $imagePath = null;
        }
        // Create a new team member
        Teams::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'web' => $request->web,
            'address' => $request->address,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'image' => $imagePath,
            'content' => $request->content,
            'cuisine' => $request->cuisine,
        ]);

        return redirect()->route('teams.admin')->with('success', 'Team member added successfully!');
    }
    public function edit($id)
    {
        $team = Teams::find($id);
        return view('admin.teams.edit', compact('team'));
    }
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'cuisine' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
            'web' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'content' => 'nullable|string',
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'name.string' => 'Tên phải là một chuỗi ký tự.',
            'name.max' => 'Tên không được dài quá 255 ký tự.',
            'cuisine.required' => 'Môn giảng dạy là bắt buộc.',
            'cuisine.string' => 'Môn giảng dạy phải là một chuỗi ký tự.',
            'cuisine.max' => 'Môn giảng dạy không được dài quá 255 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ.',
            'email.max' => 'Email không được dài quá 255 ký tự.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.min' => 'Số điện thoại phải có ít nhất 10 ký tự.',
            'phone.max' => 'Số điện thoại không được dài quá 15 ký tự.',
            'web.string' => 'Trang web phải là một chuỗi ký tự.',
            'web.max' => 'Trang web không được dài quá 255 ký tự.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được dài quá 255 ký tự.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'facebook.string' => 'Facebook phải là một chuỗi ký tự.',
            'facebook.max' => 'Facebook không được dài quá 255 ký tự.',
            'instagram.string' => 'Instagram phải là một chuỗi ký tự.',
            'instagram.max' => 'Instagram không được dài quá 255 ký tự.',
            'twitter.string' => 'Twitter phải là một chuỗi ký tự.',
            'twitter.max' => 'Twitter không được dài quá 255 ký tự.',
            'linkedin.string' => 'LinkedIn phải là một chuỗi ký tự.',
            'linkedin.max' => 'LinkedIn không được dài quá 255 ký tự.',
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng jpg, jpeg, hoặc png.',
            'image.max' => 'Hình ảnh không được lớn hơn 2048 KB.',
            'content.string' => 'Nội dung phải là một chuỗi ký tự.',
        ]);

        // Find the team to update
        $team = Teams::findOrFail($id);

        // Update the team's attributes
        $team->name = $validatedData['name'];
        $team->email = $validatedData['email'];
        $team->phone = $validatedData['phone'];
        $team->web = $validatedData['web'];
        $team->address = $validatedData['address'];
        $team->description = $validatedData['description'];
        $team->facebook = $validatedData['facebook'];
        $team->instagram = $validatedData['instagram'];
        $team->twitter = $validatedData['twitter'];
        $team->linkedin = $validatedData['linkedin'];
        $team->content = $validatedData['content'];
        $team->cuisine = $validatedData['cuisine'];

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($team->image && Storage::exists('public/images/' . $team->image)) {
                Storage::delete('public/images/' . $team->image);
            }

            // Generate a new random name for the image
            $imageName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            // Store the new image
            $imagePath = $request->file('image')->storeAs('images', $imageName, 'public');

            // Update the image path
            $team->image = $imagePath;
        }

        // Save the updated team
        $team->save();

        // Redirect or return a response
        return redirect()->route('teams.admin')->with('success', 'Team updated successfully.');
    }
    public function destroy($id)
    {
        // Find the team by ID or fail if not found
        $team = Teams::findOrFail($id);

        // Check if the team has an image and delete it if it exists
        if ($team->image && Storage::exists('public/images/' . $team->image)) {
            Storage::delete('public/images/' . $team->image);
        }

        // Delete the team record from the database
        $team->delete();

        // Redirect back to the teams index with a success message
        return redirect()->route('teams.admin')->with('success', 'Team deleted successfully.');
    }
    public function detail($id)
    {
        $teamsItem = Teams::findOrFail($id);
   
        return view('admin.teams.detail', compact('teamsItem'));
    }

}
