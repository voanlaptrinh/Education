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
    public function create()
    {
        return view('test.subscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_in_days' => 'required|numeric',
            'can_do_exercises' => 'required|boolean',
            'can_view_lectures' => 'required|boolean',
        ]);

        $subscriptionData = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'duration_in_days' => $request->input('duration_in_days'),
            'can_do_exercises' => $request->input('can_do_exercises'),
            'can_view_lectures' => $request->input('can_view_lectures'),
        ];

        Subscription::create($subscriptionData);

        return redirect()->route('subscriptions.index')->with('success', 'Subscription added successfully!');
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
