<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('admin.userReportExcel', [
            'allUsers' => User::latest()->get(),
            'totalUsers' => User::count() - 19,
            'date' => date('d/m/Y')
        ]);
    }
}
