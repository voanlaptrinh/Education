<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PolicyGuarantees;
use Illuminate\Http\Request;

class policyGuaranteeController extends Controller
{
    public function index(){
        $guarantee = PolicyGuarantees::find(1);
        return view('admin.chinh-sach.guarantee.index', compact('guarantee'));
    }
    public function update(Request $request){
        $guarantee = PolicyGuarantees::find(1);
        $request->validate([
            'description' => 'required',
        ], [
            'description.required' => 'Chính sách là bắt buộc.',

        ]);
        $guarantee->update([
            'description' => $request->input('description'),
        ]);
        $guarantee->save();
        return redirect()->back()->with('success', 'Đã update thành công!');

    }
}
