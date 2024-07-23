<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Payroll;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;


class PayrollsController extends Controller
{
    public function current() {
        $payrolls = Payroll::all();

        return view('/payrolls/payrolls', [
            "current" => true,
            "payrolls" => $payrolls
        ]);
    }

    public function history() {
        $payrolls = Payroll::all();

        return view('/payrolls/payrolls', [
            "current" => false,
            "payrolls" => $payrolls
        ]);
    }

    public function show(Payroll $payroll) {
        return view('/payrolls/show-payroll', [
            "payroll" => $payroll,
            "total" => $payroll->payments->count(),
            "payments" => $payroll->payments,
            "processed" => $payroll->processed,
        ]);
    }

    public function editPayment(Payment $payment) {
        return view('/payrolls/edit-payment', [
            "payment" => $payment,
        ]);
    }

    public function updatePayment(Payment $payment, Request $request) {
        $body = $request->all();
        $payment->update([
            "bonuses" => $body["bonuses"],
            "deductions" => $body["deductions"],
        ]);
    }

    public function downloadSlip(Payment $payment, Request $request) {
        $employee = $payment->employee->full_name;
        $grossPay = $payment->employee->grossSalary();
        $deductions = $payment->deductions;
        $bonuses = $payment->bonuses;
        $netPay = $grossPay - $deductions + $bonuses;
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML("<h1>Salary for $employee</h1><h2>Gross Pay: $grossPay$</h2><h2>Deductions: $deductions$</h2><h2>Bonuses: $bonuses$</h2><br/><br/><h2>Net pay: $netPay$</h2>");
        return $pdf->stream();
    }

    public function submit(Payroll $payroll) {
        $payroll->update([
            "processed" => true,
        ]);

        return $this->history();
    }
}
