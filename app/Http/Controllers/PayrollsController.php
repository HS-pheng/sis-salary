<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollsController extends Controller
{
    public function current() {
        return view('/payrolls/payrolls', [
            "current" => true
        ]);
    }

    public function history() {
        return view('/payrolls/payrolls', [
            "current" => false
        ]);
    }
}
