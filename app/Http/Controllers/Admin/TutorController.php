<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index(Request $request)
    {
        $searchQuery = $request->input('query'); // Capture the search query
        // $class = $request->input('class_id'); // Capture the class_id if needed

        $tutors = Tutor::query();
        // dd($class);
        // Filter by class if provided

        // Filter by search query if provided
        if ($searchQuery) {
            $tutors->where('email', 'like', '%' . $searchQuery . '%');
        }
        $tutors = $tutors->latest()->paginate(10);

        $tutors->appends(['query' => $searchQuery]);


        return view('admin.tutor.index', compact('tutors', 'searchQuery'));
    }
    public function create()
    {
        return view('admin.tutor.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'last_name' => 'required',
            'email' => 'required|string|email|unique:tutors',
            'phone_number' =>  'required|regex:/^[0-9]{10,15}$/',
            'date_of_birth' => 'required|date',
            'password' => 'required|string|min:8',
            'gender' => 'required|in:0,1,2',
            'address' => 'required',
            'qualification' => 'required',
            'experience_years' => 'required|integer',
            'subjects' => 'required|string',
            'hourly_rate' => 'nullable|numeric',
            'bio' => 'nullable|string',
        ], [
            'first_name.required' => 'Vui lòng nhập tên.',
            'image.image' => 'File tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không được vượt quá 2MB.',
            'image.required' => 'Hình ảnh là bắt buộc',
            'last_name.required' => 'Vui lòng nhập họ.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone_number.required' => 'Vui lòng nhập số điện thoại.',
            'phone_number.regex' => 'Số điện thoại phải chứa từ 10 đến 15 chữ số.',
            'date_of_birth.required' => 'Vui lòng nhập ngày sinh.',
            'date_of_birth.date' => 'Ngày sinh không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'gender.required' => 'Vui lòng chọn giới tính.',
            'gender.in' => 'Giới tính không hợp lệ.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'qualification.required' => 'Vui lòng nhập trình độ.',
            'experience_years.required' => 'Vui lòng nhập số năm kinh nghiệm.',
            'experience_years.integer' => 'Số năm kinh nghiệm phải là số nguyên.',
            'subjects.required' => 'Vui lòng nhập môn học.',
            'subjects.string' => 'Môn học phải là chuỗi ký tự.',
            'hourly_rate.numeric' => 'Giá theo giờ phải là số.',
            'bio.string' => 'Tiểu sử phải là chuỗi ký tự.',
        ]);


        // Xử lý lưu dữ liệu vào database
        $tutor = new Tutor();
        // Assign the validated data to the Tutor instance
        $tutor->first_name = $request->first_name;
        $tutor->last_name = $request->last_name;
        $tutor->email = $request->email;
        // Xử lý lưu ảnh (nếu có)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tutor'), $imageName);
            $tutor->image = $imageName;
        }
        $tutor->phone_number = $request->phone_number;
        $tutor->date_of_birth = $request->date_of_birth;
        $tutor->password = bcrypt($request->password); // Encrypt the password before saving
        $tutor->gender = $request->gender;
        $tutor->address = $request->address;
        $tutor->qualification = $request->qualification;
        $tutor->experience_years = $request->experience_years;
        $tutor->subjects = $request->subjects;
        $tutor->hourly_rate = $request->hourly_rate;
        $tutor->bio = $request->bio;
        $tutor->save();

        return redirect()->route('tutor.index')->with('success', 'Thêm mới gia sư thành công!');
    }
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        return view('admin.tutor.edit', compact('tutor'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'last_name' => 'required',
            'email' => 'required|string|email|unique:tutors',
            'phone_number' => 'required|regex:/^[0-9]{10,15}$/',
            'date_of_birth' => 'required|date',
            'password' => 'nullable|string|min:8',
            'gender' => 'required|in:0,1,2',
            'address' => 'required',
            'qualification' => 'required',
            'experience_years' => 'required|integer',
            'subjects' => 'required|string',
            'hourly_rate' => 'nullable|numeric',
            'bio' => 'nullable|string',
        ], [
            'first_name.required' => 'Vui lòng nhập tên.',
            'image.image' => 'File tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Hình ảnh không được vượt quá 2MB.',
            'last_name.required' => 'Vui lòng nhập họ.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone_number.required' => 'Vui lòng nhập số điện thoại.',
            'phone_number.regex' => 'Số điện thoại phải chứa từ 10 đến 15 chữ số.',
            'date_of_birth.required' => 'Vui lòng nhập ngày sinh.',
            'date_of_birth.date' => 'Ngày sinh không hợp lệ.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'gender.required' => 'Vui lòng chọn giới tính.',
            'gender.in' => 'Giới tính không hợp lệ.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'qualification.required' => 'Vui lòng nhập trình độ.',
            'experience_years.required' => 'Vui lòng nhập số năm kinh nghiệm.',
            'experience_years.integer' => 'Số năm kinh nghiệm phải là số nguyên.',
            'subjects.required' => 'Vui lòng nhập môn học.',
            'subjects.string' => 'Môn học phải là chuỗi ký tự.',
            'hourly_rate.numeric' => 'Giá theo giờ phải là số.',
            'bio.string' => 'Tiểu sử phải là chuỗi ký tự.',
        ]);
        $tutor = Tutor::findOrFail($id);
        $tutor->first_name = $request->first_name;
        $tutor->last_name = $request->last_name;
        $tutor->email = $request->email;

        if ($request->hasFile('image')) {
            if ($tutor->image) {
                $oldImagePath = public_path('images/tutor/' . $tutor->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/tutor'), $imageName);
            $tutor->image = $imageName;
        }
        $tutor->phone_number = $request->phone_number;
        $tutor->date_of_birth = $request->date_of_birth;
        if ($request->password) {
            $tutor->password = bcrypt($request->password); // Encrypt the password before saving
        }
        $tutor->gender = $request->gender;
        $tutor->address = $request->address;
        $tutor->qualification = $request->qualification;
        $tutor->experience_years = $request->experience_years;
        $tutor->subjects = $request->subjects;
        $tutor->hourly_rate = $request->hourly_rate;
        $tutor->bio = $request->bio;
        $tutor->save();

        return redirect()->route('tutor.index')->with('success', 'Cập nhật gia sư thành công!');
    }


    // app/Http/Controllers/TutorController.php
public function destroy($id)
{
   
    $tutor = Tutor::findOrFail($id);

    if ($tutor->image) {
        $imagePath = public_path('images/tutor/' . $tutor->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    $tutor->delete();

  
    return redirect()->route('tutor.index')->with('success', 'Xóa gia sư thành công!');
}

}
