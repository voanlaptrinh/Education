<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Subscription;
use App\Models\Web_config;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\Png;

use BaconQrCode\Writer;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();
        $webConfig = Web_config::find(1);
        $classes = Classes::all();
        return view('subscriptions.index', compact('classes', 'subscriptions', 'webConfig'));
    }
    public function indexAdmin()
    {
        $subscriptions = Subscription::orderBy('id', 'asc')->get();

        return view('admin.subscription.index', compact( 'subscriptions'));
    }
    public function create()
    {
        return view('admin.subscription.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|numeric',
           
        ],[
            'name.required' => 'Tên gói là bắt buộc',
            'price.required' => 'Giá là bắt buộc',
            'duration_months.required' => 'Tháng là bắt buộc',
            'price.numeric' => 'Giá phải là số',
            'duration_months.numeric' => 'Tháng phải là số',
        ]);

        $subscriptionData = [
            'name' => $request->input('name'),
            'price' => $request->input('price') ,
            'duration_months' => $request->input('duration_months') *30,
            
        ];

        Subscription::create($subscriptionData);

        return redirect()->route('subscriptions.indexAdmin')->with('success', 'Thêm mới thành công!');
    }
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('subscriptions.indexAdmin')->with('success', 'Xóa gói thành công!');
    }
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|numeric',
           
        ],[
            'name.required' => 'Tên gói là bắt buộc',
            'price.required' => 'Giá là bắt buộc',
            'duration_months.required' => 'Tháng là bắt buộc',
            'price.numeric' => 'Giá phải là số',
            'duration_months.numeric' => 'Tháng phải là số',
        ]);

        $lecture = Subscription::findOrFail($id);

        
        // Cập nhật các trường khác
        $lecture->name = $request->input('name');
        $lecture->price = $request->input('price');
        $lecture->duration_months = $request->input('duration_months') *30;


        // Lưu bản ghi vào cơ sở dữ liệu
        $lecture->save();

        // Chuyển hướng về trang index của lectures với thông báo thành công
        return redirect()->route('subscriptions.indexAdmin', )
            ->with('success', 'Sửa gói thành công');
    }

    public function edit(Subscription $subscription)
    {
        return view('admin.subscription.edit', compact('subscription'));
    }
    public function purchase($packageId)
    {
        $package = Subscription::findOrFail($packageId);

        // Tạo mã QR
        $qrCode = $this->generateQRCodeData(route('subscriptions.confirmPurchase', $package->id));

        return view('subscriptions.purchase', [
            'package' => $package,
            'qrCode' => $qrCode,
        ]);
    }
  
}
