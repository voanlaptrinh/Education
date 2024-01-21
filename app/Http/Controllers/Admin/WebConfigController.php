<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Web_config;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    public function index(Request $request)
    {
        $webConfig = Web_config::all()->find(1);
        return view('admin.web_config.index', compact('webConfig'));
    }
    public function update(Request $request)
    {

        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'code' => 'nullable|string',
            'gg_map' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Thêm quy tắc cho trường logo
            'facebook_id' => 'nullable',
            'zalo' => 'nullable',
            'pinterest' => 'nullable',
            'youtube' => 'nullable',
            'dribbble' => 'nullable',
            'tiktok' => 'nullable',
            'telegram' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'reddit' => 'nullable',
            'linkedin' => 'nullable',
            'google' => 'nullable',
            // Add validation for other fields
        ]);

        // Find the existing WebConfig model based on some criteria (you might use ID or some unique identifier)
        $webConfig = Web_config::find(1); // Replace 1 with the appropriate identifier

        // Update other fields
        $webConfig->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'code' => $request->input('code'),
            'gg_map' => $request->input('gg_map'),
            'facebook_id' => $request->input('facebook_id'),
            'zalo' => $request->input('zalo'),
            'pinterest' => $request->input('pinterest'),
            'youtube' => $request->input('youtube'),
            'dribbble' => $request->input('dribbble'),
            'tiktok' => $request->input('tiktok'),
            'telegram' => $request->input('telegram'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'reddit' => $request->input('reddit'),
            'linkedin' => $request->input('linkedin'),
            'google' => $request->input('google'),
            // Add update for other fields
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $webConfig->logo = $logoPath;
            $webConfig->save();
        }

        // Redirect back or to a specific route after the update
        return redirect()->back()->with('success', 'Đã update thành công!');
    }
}
