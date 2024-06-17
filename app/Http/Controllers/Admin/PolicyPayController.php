<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\policyPay;
use Illuminate\Http\Request;

class PolicyPayController extends Controller
{
     public function index(){
        $policyPay = policyPay::find(1);
        return view('admin.chinh-sach.pay.index', compact('policyPay'));
    }
    public function update(Request $request){
        $policyPay = policyPay::find(1);
        $request->validate([
            'description' => 'required',
        ], [
            'description.required' => 'Chính sách là bắt buộc.',

        ]);
        $policyPay->update([
            'description' => $request->input('description'),
        ]);
        $policyPay->save();
        return redirect()->back()->with('success', 'Đã update thành công!');

    }
}
