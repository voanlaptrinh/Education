<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PolicyLies;
use Illuminate\Http\Request;

class policyLieController extends Controller
{
    public function index(){
        $lie = PolicyLies::find(1);
        return view('admin.chinh-sach.lie.index', compact('lie'));
    }
    public function update(Request $request){
        $lie = PolicyLies::find(1);
        $request->validate([
            'description' => 'required',
        ], [
            'description.required' => 'Chính sách là bắt buộc.',

        ]);
        $lie->update([
            'description' => $request->input('description'),
        ]);
        $lie->save();
        return redirect()->back()->with('success', 'Đã update thành công!');

    }
    }
