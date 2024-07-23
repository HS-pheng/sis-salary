<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Payroll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentProcessed = Payroll::create([
            "payment_date" => "30/10/2024",
            "processed" => true,
        ]);

        $employees = Employee::all();
        foreach($employees as $employee) {
            $paymentProcessed->payments()->create([
                "employee_id" => $employee->id,
                "deductions" => 0,
                "bonuses" => 0,
            ]);
        }

        $paymentUnprocessed = Payroll::create([
            "payment_date" => "30/11/2024",
            "processed" => false,
        ]);

        $employees = Employee::all();
        foreach($employees as $employee) {
            $paymentUnprocessed->payments()->create([
                "employee_id" => $employee->id,
                "deductions" => 0,
                "bonuses" => 0,
            ]);
        }
    }
}
