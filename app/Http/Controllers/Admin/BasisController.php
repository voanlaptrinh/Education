<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basis;

class BasisController extends Controller
{
    public function index(Basis $basis)
    {
        $basis = Basis::all();
        return view('admin.basis.index',compact('basis'));
    }
    public function create()
    {
        return view('admin.basis.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'gg_map' => 'nullable|string',
            'address' => 'required|string',
            'open_time' => 'required|string',

        ], [
            'name.required' => 'Vui lòng nhập tên.',
            'name.string' => 'Tên phải là một chuỗi.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.string' => 'Số điện thoại phải là một chuỗi.',
            'phone.regex' => 'Số điện thoại phải có đúng 10 chữ số.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'gg_map.string' => 'Google Map URL phải là một chuỗi.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'open_time.required' => 'Vui lòng nhập địa chỉ.',
        ]);
        Basis::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gg_map' => $request->gg_map,
            'address' => $request->address,
            'open_time' => $request->open_time,
        ]);
        return redirect()->route('basis.index')->with('success', 'Thêm mới cơ sở thành công!');;
    }
    public function edit($id)
    {
        $basis = Basis::findOrFail($id);
     

        return view('admin.basis.edit', compact('basis'));
    }
    public function update(Request $request,Basis $basis ){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'gg_map' => 'nullable|string',
            'address' => 'required|string',
            'open_time' => 'required|string',

        ], [
            'name.required' => 'Vui lòng nhập tên.',
            'name.string' => 'Tên phải là một chuỗi.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.string' => 'Số điện thoại phải là một chuỗi.',
            'phone.regex' => 'Số điện thoại phải có đúng 10 chữ số.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'gg_map.string' => 'Google Map URL phải là một chuỗi.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'open_time.required' => 'Vui lòng nhập địa chỉ.',
        ]);
        $basis->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'gg_map' => $request->input('gg_map'),
            'address' => $request->input('address'),
            'open_time' => $request->input('open_time'),
        ]);
        return redirect()->route('basis.index')->with('success', 'Cơ sở được cập nhật thành công');
    }
    public function show($id)
    {
        $basis = Basis::findOrFail($id);
        if (!$basis) {
            return response()->json(['error' => 'basis not found'], 404);
        }
        return response()->json($basis);
    }
    public function destroy(Basis $basis)
    {

        $basis->delete();

        return redirect()->route('basis.index')
            ->with('success', 'Xóa thành công.');
    } 
}
