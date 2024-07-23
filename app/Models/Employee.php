<?php

namespace App\Models;

use App\Models\Salary;
use App\Models\EmploymentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function status() {
        return $this->hasOne(EmploymentStatus::class, "id", "employment_status");
    }

    public function campus() {
        return $this->hasOne(Campus::class, "id", "campus_id");
    }

    public function salary() {
        return $this->hasOne(Salary::class, "id", "salary_id");
    }

    public function grossSalary() {
        return $this->salary->base_salary + $this->salary->housing_allowance + $this->salary->transport_allowance - $this->salary->tax_deduction - $this->salary->health_insurance_deduction;
    }
}
