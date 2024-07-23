<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = Employee::all();

        foreach($employees as $employee) {
            $salary = Salary::create([
                "base_salary" => rand(500, 600),
                "housing_allowance" => rand(50, 100),
                "transport_allowance" => rand(30, 50),
                "tax_deduction" => rand(40, 60),
                "health_insurance_deduction" => rand(50, 60),
            ]);
            $employee->update([
                "salary_id" => $salary->id
            ]);
        }
    }
}
