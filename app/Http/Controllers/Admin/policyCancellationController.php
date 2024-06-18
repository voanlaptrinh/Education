<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PolicyCancellation;
use Illuminate\Http\Request;

class policyCancellationController extends Controller
{
    public function index(){
        $cancellation = PolicyCancellation::find(1);
        return view('admin.chinh-sach.cancellation.index', compact('cancellation'));
    }
    public function update(Request $request){
        $cancellation = PolicyCancellation::find(1);
        $request->validate([
            'description' => 'required',
        ], [
            'description.required' => 'Chính sách là bắt buộc.',

        ]);
        $cancellation->update([
            'description' => $request->input('description'),
        ]);
        $cancellation->save();
        return redirect()->back()->with('success', 'Đã update thành công!');

    }
}
