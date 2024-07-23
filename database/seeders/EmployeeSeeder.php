<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            "full_name" => "Hongsreng",
            "date_of_birth" => "17/08/2003",
            "gender" => "Male",
            "email" => "Hongsreng.pheng@gmail.com",
            "contact_number" => "077691333",
            "position" => "Application Developer",
            "campus_id" => 1,
            "employment_status" => 1,
        ]);

        Employee::create([
            "full_name" => "Pisey",
            "date_of_birth" => "17/08/2003",
            "gender" => "Male",
            "email" => "Hongsreng.pheng@gmail.com",
            "contact_number" => "077691333",
            "position" => "Application Developer",
            "campus_id" => 1,
            "employment_status" => 1,
        ]);

        Employee::create([
            "full_name" => "Eath",
            "date_of_birth" => "17/08/2003",
            "gender" => "Male",
            "email" => "Hongsreng.pheng@gmail.com",
            "contact_number" => "077691333",
            "position" => "Application Developer",
            "campus_id" => 1,
            "employment_status" => 1,
        ]);

        for($i = 1; $i < 30; $i++) {
            Employee::create([
                "full_name" => "Eath" . rand(1,100),
                "date_of_birth" => "17/08/2003",
                "gender" => "Male",
                "email" => "Hongsreng.pheng@gmail.com",
                "contact_number" => "077691333",
                "position" => "Application Developer",
                "campus_id" => 1,
                "employment_status" => 1,
            ]);
        }
    }
}
