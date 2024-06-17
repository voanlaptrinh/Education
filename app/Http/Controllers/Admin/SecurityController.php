<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\security;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function index(){
        $security = security::find(1);
        return view('admin.chinh-sach.securi.index', compact('security'));
    }
    public function update(Request $request){
        $security = security::find(1);
        $request->validate([
            'description' => 'required',
        ], [
            'description.required' => 'Chính sách là bắt buộc.',

        ]);
        $security->update([
            'description' => $request->input('description'),
        ]);
        $security->save();
        return redirect()->back()->with('success', 'Đã update thành công!');

    }
}
