<?php

namespace Database\Seeders;

use App\Models\Approval;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CampusSeeder;
use Database\Seeders\SalarySeeder;
use Database\Seeders\PayrollSeeder;
use Database\Seeders\EmployeeSeeder;
use Database\Seeders\EmploymentStatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CampusSeeder::class,
            EmploymentStatusSeeder::class,
            EmployeeSeeder::class,
            SalarySeeder::class,
            PayrollSeeder::class,
            ApprovalSeeder::class,
        ]);
    }
}
