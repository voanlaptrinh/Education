<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Contact;
use App\Models\Web_config;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        return view('contact.index',compact('classes','webConfig'));
    }
    public function default()
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        return view('default.index',compact('classes','webConfig'));
    }
    public function success()
    {
        $classes = Classes::where('status', 1)->get();
        $webConfig = Web_config::find(1);
        if (session('success')) {
            return view('contact.success',compact('classes','webConfig'));
        } else {
            return redirect()->route('default',compact('classes','webConfig'));
        }
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
        // if ($request->fails()) {
        //     return redirect()->route('contact.index')->withErrors($request)->withInput();
        // }
        $contact = new Contact;
        $contact->name = $request->input('yourName');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();
        return redirect()->route('contact.success')->with('success', 'Liên hệ của bạn đã được gửi thành công!');
    }
    public function adminContact(Request $request){
        $searchQuery = $request->input('query'); // Thay đổi tên biến thành $searchQuery
        $totalContact = Contact::count();
        $contacts = Contact::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('name', 'like', '%' . $searchQuery . '%');
        }) ->orderBy('created_at', 'desc') ->paginate(10);
        return view('admin.contact.index', compact('contacts','totalContact', 'searchQuery'));
    }
     public function getContactDetails($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['error' => 'Contact not found'], 404);
        }

        return response()->json($contact);
    }

}
