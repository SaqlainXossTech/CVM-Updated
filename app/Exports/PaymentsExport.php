<?php

namespace App\Exports;

use App\Models\Payment;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PaymentsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('admin.paymentReportExcel', [
            'payments' => Payment::latest()->get(),
            'total_payment' => Payment::sum('amount'),
            'date' => date('d/m/Y')
        ]);
    }
}
