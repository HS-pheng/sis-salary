<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;

class ApprovalsController extends Controller
{
    public function index() {
        $approvals = Approval::where('approved', '=', '0')->get();

        return view("approvals", [
            "approvals" => $approvals
        ]);
    }

    public function reject(Approval $approval) {
        $approval->delete();

        return $this->index();
    }

    public function approve(Approval $approval) {
        $employee = $approval->employee;

        $employee->salary->update([
            "base_salary" => $approval->employee->salary->base_salary + $approval->amount,
        ]);

        $approval->update([
            "approved" => true,
        ]);

        return $this->index();
    }
}
