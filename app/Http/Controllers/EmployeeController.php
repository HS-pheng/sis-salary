<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Salary;
use App\Models\Employee;
use App\Models\EmploymentStatus;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        $offset = $request->query('offset') ?? 0;

        $search = $request->query('search') ?? '';

        // Perform the search query with pagination
        $employees = Employee::where('full_name', 'LIKE', '%' . $search . '%') // Replace 'name' with the column you want to search
            ->skip($offset)
            ->take(10)
            ->get();

        return view("employees/employees", [
            "employees" => $employees,
            "total_employees" => Employee::all()->count(),
        ]);
    }

    public function create() {
        $campuses = Campus::all();
        $statuses = EmploymentStatus::all();

        return view("employees/create-employee", [
            "campuses" => $campuses,
            "statuses" => $statuses,
        ]);
    }

    public function store(Request $request) {
        $body = $request->all();
        
        $salary = Salary::create([
            "base_salary" => $body["base_salary"],
            "housing_allowance" => $body["housing_allowance"],
            "transport_allowance" => $body["transport_allowance"],
            "tax_deduction" => $body["tax_deduction"],
            "health_insurance_deduction" => $body["health_insurance_deduction"],
        ]);

        $employee = Employee::create([
            "full_name" => $body["full_name"],
            "date_of_birth" => $body["dob"],
            "gender" => $body["gender"],
            "email" => $body["email"],
            "contact_number" => $body["phone_number"],
            "position" => $body["position"],
            "campus_id" => $body["campus"],
            "salary_id" => $salary->id,
            "employment_status" => $body["status"]
        ]);

        return view('employees/show-employee', [
            "employee" => $employee,
        ]);
    }

    public function show(Request $request, Employee $employee) {
        return view('employees/show-employee', [
            "employee" => $employee,
        ]);
    }

    public function edit(Employee $employee) {
        $campuses = Campus::all();
        $statuses = EmploymentStatus::all();

        return view('employees/edit-employee', [
            "employee" => $employee,
            "campuses" => $campuses,
            "statuses" => $statuses,
        ]);
    }

    public function update(Employee $employee, Request $request) {
        $body = $request->all();

        $employee->salary->update([
            "base_salary" => $body["base_salary"],
            "housing_allowance" => $body["housing_allowance"],
            "transport_allowance" => $body["transport_allowance"],
            "tax_deduction" => $body["tax_deduction"],
            "health_insurance_deduction" => $body["health_insurance_deduction"],
        ]);

        $employee->update([
            "full_name" => $body["full_name"],
            "date_of_birth" => $body["dob"],
            "gender" => $body["gender"],
            "email" => $body["email"],
            "contact_number" => $body["phone_number"],
            "position" => $body["position"],
            "campus_id" => $body["campus"],
            "salary_id" => $employee->salary->id,
            "employment_status" => $body["status"]
        ]);

        return view('employees/show-employee', [
            "employee" => $employee,
        ]);
    }

    public function delete(Employee $employee) {
        $employee->delete();

        $offset = 0;

        $employees = Employee::skip($offset)->take(10)->get();

        return view("employees/employees", [
            "employees" => $employees,
            "total_employees" => Employee::all()->count(),
        ]);
    }
}
