<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::get('/employees', [EmployeeController::class, "index"])->middleware(['auth'])->name('employees');
Route::get('/employees/create', [EmployeeController::class, "create"])->middleware(['auth'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, "store"])->middleware(['auth'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, "show"])->middleware(['auth'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, "edit"])->middleware(['auth'])->name('employees.edit');
Route::post('/employees/{employee}', [EmployeeController::class, "update"])->middleware(['auth'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, "delete"])->middleware(['auth'])->name('employees.delete');

Route::get('/payrolls/current', [PayrollsController::class, "current"])->middleware(['auth'])->name('payrolls.current');
Route::get('/payrolls/history', [PayrollsController::class, "history"])->middleware(['auth'])->name('payrolls.history');

// Route::get('/payrolls', function () {
//     return view('/payrolls');
// })->middleware(['auth'])->name('payrolls');

Route::get('/approvals', function () {
    return view('approvals');
})->middleware(['auth'])->name('approvals');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth'])->name('reports');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';