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
}
