<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use App\Models\Payroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReportsController extends Controller
{
    public function index() {
        $payrolls = Payroll::all();

        return view('reports', [
            "payrolls" => $payrolls,
        ]);
    }

    public function payrollReport(Payroll $payroll) {
        $payments = $payroll->payments;

        $header = "<h1>Payroll date: $payroll->payment_date</h1><table style=\"border: 1px solid black;\"><thead style=\"border: 1px solid black;\"><tr><th style=\"border: 1px solid black;\">Employee Name</th><th style=\"border: 1px solid black;\">Gross Pay</th><th style=\"border: 1px solid black;\">Deductions</th><th style=\"border: 1px solid black;\">Bonuses</th></tr></thead> <tbody> ";

        foreach($payments as $payment) {
            $fullname = $payment->employee->full_name;
            $grossPay = $payment->employee->grossSalary();
            $deductions = $payment->deductions;
            $bonuses = $payment->bonuses;

            $header = $header . "<tr style=\"border: 1px solid black;\"><th style=\"border: 1px solid black;\">$fullname</th><td style=\"border: 1px solid black;\">$grossPay $</td><td style=\"border: 1px solid black;\">$deductions $</td><td style=\"border: 1px solid black;\">$bonuses $</td></tr>";
        }

        $footer = "</tbody></table>";

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($header . $footer);
        return $pdf->stream();
    }
    public function salaryAdjustment() {
        $header = "<h1 >Salary adjustment report</h1>
<table  style=\"border: 1px solid black;\">
    <thead  style=\"border: 1px solid black;\">
        <tr  style=\"border: 1px solid black;\">
            <th  style=\"border: 1px solid black;\">Employee Name</th>
            <th  style=\"border: 1px solid black;\">Adjusted amount</th>
            <th  style=\"border: 1px solid black;\">Adjusted at</th>
        </tr>
    </thead  style=\"border: 1px solid black;\">
    <tbody  style=\"border: 1px solid black;\">";

        $adjustments = Approval::where('approved', '=', 1)->get();
        
        foreach($adjustments as $adjustment) {
            $fullname = $adjustment->employee->full_name;
            $amount = $adjustment->amount;
            $at = $adjustment->updated_at->toDateString();
            $header = $header . "<tr  style=\"border: 1px solid black;\"><th  style=\"border: 1px solid black;\">$fullname</th><td  style=\"border: 1px solid black;\">$amount $</td><td  style=\"border: 1px solid black;\">$at</td></tr>";
        }

        $footer = "    </tbody>
</table>";
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($header . $footer);
        return $pdf->stream();
    }
}
