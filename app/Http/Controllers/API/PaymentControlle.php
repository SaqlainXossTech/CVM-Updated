<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentControlle extends Controller
{
    public function nagadPayment()
    {
        $payment = Payment::where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->first();
        return response()->json([
            'data' => $payment,
        ], 200);
    }
}
