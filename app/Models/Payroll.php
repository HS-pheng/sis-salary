<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payroll extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function payments() {
        return $this->belongsToMany(Payment::class, "payment_payrolls", "payroll_id", "payment_id");
    }
}
