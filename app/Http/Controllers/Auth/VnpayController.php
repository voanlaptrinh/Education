<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Lecture;
use App\Models\Lesson;
use App\Models\Purchase;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Web_config;
use App\Models\Banner;
use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class VnpayController extends Controller
{
    public static function generateOrderCode($length = 8)
    {
        return 'ORD' . Str::random($length);
    }
    public function vnpay_payment(Request $request)
    {
        $data = $request->all();
        $subscriptionId = $request->input('subscription_id');

        // Save subscription_id to session
        $request->session()->put('subscription_id', $subscriptionId);

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('Getvnpayment');
        $vnp_TmnCode = env('VNP_TMNCODE'); //Mã website tại VNPAY 
        $vnp_HashSecret = env('VNP_HASHSECRET'); //Chuỗi bí mật

        $vnp_TxnRef = $this->generateOrderCode(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán hoá đơn';
        $vnp_OrderType = "education";
        $vnp_Amount =  $data['total'] * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url, 'subscription_id' => $data['subscription_id']
        );
        if (isset($_POST['redirect'])) {
            return redirect()->away($vnp_Url);
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }

    public function Getvnpayment(Request $request, Subscription $subscription)
    {
        // $data =  $request->except("_token");
        try {
            $user = auth()->user();
            $banner = Banner::find(1);
            $classes = Classes::all();
            $totalLessons = Lesson::count();
            $totalLectures = Lecture::count();
            $bai_hoc = Lesson::all();
            $webConfig = Web_config::find(1);
            $purchase = new Purchase();
            $purchase->user_id = $user->id;
            $purchase->package_name = $request->vnp_OrderInfo;
            $purchase->amount = $request->vnp_Amount;
            $purchase->bank_code = $request->vnp_BankCode;
            $purchase->bank_tran_no = $request->vnp_BankTranNo;
            $purchase->card_type = $request->vnp_CardType;
            $purchase->order_info = $request->vnp_OrderInfo;
            $purchase->pay_date = \Carbon\Carbon::createFromFormat('YmdHis', $request->vnp_PayDate);
            $purchase->response_code = $request->vnp_ResponseCode;
            $purchase->tmn_code = $request->vnp_TmnCode;
            $purchase->transaction_no = $request->vnp_TransactionNo;
            $purchase->transaction_status = $request->vnp_TransactionStatus;
            $purchase->txn_ref = $request->vnp_TxnRef;
            $purchase->secure_hash = $request->vnp_SecureHash;
            $purchase->subscription_id = $request->session()->get('subscription_id');
            $userSubscription = Subscription::find($request->session()->get('subscription_id'));
            if ($userSubscription) {
                $currentDateTime = Carbon::now();
                $expirationDate = $currentDateTime->addDays($userSubscription->duration_months);
                $user->subscription_expiration_date = $expirationDate;
                $user->is_pro = true;
                $user->save();
            }

            $purchase->save();

            return view('pages.index', compact('user', 'banner', 'classes', 'totalLessons', 'totalLectures', 'bai_hoc', 'webConfig'));
        } catch (\Exception $e) {
            // Xử lý ngoại lệ và trả về thông báo lỗi nếu cần
            return view('subscriptions.error')->with('error', $e->getMessage());
        }
    }
    public function Vnpay_Document(Request $request)
    {
        $data = $request->all();
        $document_id = $request->input('document_id');

        // Save subscription_id to session
        $request->session()->put('document_id', $document_id);

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('GetvnpayDocument');
        $vnp_TmnCode = env('VNP_TMNCODE'); //Mã website tại VNPAY 
        $vnp_HashSecret = env('VNP_HASHSECRET'); //Chuỗi bí mật

        $vnp_TxnRef = $this->generateOrderCode(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán hoá đơn';
        $vnp_OrderType = "education";
        $vnp_Amount =  $data['total'] * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url, 'document_id' => $data['document_id']
        );
        if (isset($_POST['redirect_document'])) {
            return redirect()->away($vnp_Url);
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }

    public function GetvnpayDocument(Request $request)
    {
        $document = Document::find($request->session()->get('document_id'));
        if (!$document) {
            abort(404);
        }
        $filePath = 'public/' . $document->file_path;
        $file = storage_path('app/' . $filePath);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $document->name . '.pdf"',
        ];
        $response = (new BinaryFileResponse($file, 200, $headers))->setContentDisposition('attachment', $document->name . '.pdf');

        return $response;
    }
}
