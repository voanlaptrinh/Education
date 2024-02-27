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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $vnp_TmnCode = "B74W6JJL"; //Mã website tại VNPAY 
        $vnp_HashSecret = "VAFRSXAANYQCBJDPQOYDDZPUGGTTOFPR"; //Chuỗi bí mật

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
        dd($request->session()->get('subscription_id'));
        // $data =  $request->except("_token");
        try {
            $user = auth()->user();
            $this->upgradeToPro($user);

            $this->savePurchase($request, $user);
            $classes = Classes::all();
            $totalLessons= Lesson::count();
            $totalLectures= Lecture::count();
          
            $bai_hoc = Lesson::all();
            $webConfig = Web_config::find(1);
            return view('pages.index',compact('user', 'classes', 'totalLessons', 'totalLectures','bai_hoc','webConfig'));
        } catch (\Exception $e) {
            // Xử lý ngoại lệ và trả về thông báo lỗi nếu cần
            return view('subscriptions.error')->with('error', $e->getMessage());
        }
    }
    protected function upgradeToPro(User $user)
    {
        if (!$user->is_pro) {
            $user->update(['is_pro' => true]);
        }
    }

    protected function savePurchase(Request $request, User $user)
    {
        dd($request->all());
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
        $purchase->save();
    }
}
