<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function store(Request $request){
        $request->validate([
            'yourName' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ],[
            'yourName.required' => 'Vui lòng nhập tên của bạn',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.regex' => 'Vui lòng nhập đúng định số điện thoại',
            'email.required' => 'Vui lòng nhập email của bạn',
            'content.required' => 'Vui lòng nhập nội dung mong muốn của bạn',
        ]);
        $contact = new Contact;
        $contact->name = $request->input('yourName');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();
        return redirect()->route('contact.index')->with('success', 'Contact created successfully!');
    }


}
