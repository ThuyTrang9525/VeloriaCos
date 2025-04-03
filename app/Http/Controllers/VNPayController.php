<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class VNPayController extends Controller
{
    public function payment(Request $request)
    {
        // Thông tin đơn hàng
        $order_id = time();
        $amount = 10000; // Số tiền thanh toán (VND)

        $vnpayData = [
            "vnp_TmnCode" => config('services.vnpay.merchant_id'),
            "vnp_Amount" => $amount * 100, // VNPay yêu cầu đơn vị là xu (1 VND = 100 xu)
            "vnp_CurrCode" => "VND",
            "vnp_TxnRef" => $order_id,
            "vnp_OrderInfo" => "Thanh toán đơn hàng #" . $order_id,
            "vnp_OrderType" => "billpayment",
            "vnp_Locale" => "vn",
            "vnp_ReturnUrl" => route('vnpay.return'), // URL trả về sau khi thanh toán
            "vnp_IpAddr" => $request->ip(),
            "vnp_CreateDate" => Carbon::now()->format('YmdHis'),
        ];

        // Tạo chữ ký
        ksort($vnpayData);
        $query = http_build_query($vnpayData);
        $hashData = urldecode($query);
        $secureHash = hash_hmac('sha512', $hashData, config('services.vnpay.secret_key'));

        // Thêm chữ ký vào dữ liệu gửi đi
        $vnpayData['vnp_SecureHash'] = $secureHash;

        // URL gửi tới VNPay
        $url = config('services.vnpay.url') . "?" . http_build_query($vnpayData);

        return Redirect::to($url);
    }

    public function return(Request $request)
    {
        // Lấy dữ liệu trả về từ VNPay
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount') / 100; // VNPay trả về số tiền tính theo xu

        // Kiểm tra trạng thái thanh toán
        if ($vnp_ResponseCode == '00') {
            // Thanh toán thành công
            // Xử lý lưu giao dịch vào cơ sở dữ liệu hoặc gửi thông báo cho người dùng
            return view('payment.success', compact('vnp_TxnRef', 'vnp_Amount'));
        } else {
            // Thanh toán không thành công
            return view('payment.fail');
        }
    }
}
