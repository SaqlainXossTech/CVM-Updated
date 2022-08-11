<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NagadPayment;

class NagadPaymentController extends Controller
{
    public function pay() {
        $id = '1';
        $amount = "10";
        $redirectUrl = NagadPayment::tnxID($id)
                 ->amount($amount)
                 ->getRedirectUrl();
       //return response()->json($redirectUrl);
       return redirect($redirectUrl);
    }
    public function callback()
    {
        $verify = (object) NagadPayment::verify();
        if($verify->status === 'Success'){
            $order = json_decode($verify->additionalMerchantInfo);
            $oid = $order->tnx_id;
        }
        if ($verify->status === 'Aborted') {
            return response()->json([
                'success' => false,
                'message' => 'Payment Failed',
                'data' => ['payment data' => $verify],
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Payment Successful',
            'data' => ['payment data' => $verify],
        ], 200);
    }
}
