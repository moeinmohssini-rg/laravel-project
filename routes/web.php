
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\ReportController;

Route::get('/index', function () {
    return view('index');
});

Route::resource('employees', EmployeeController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('payroll', PayrollController::class);
Route::resource('payslips', PayslipController::class);
Route::resource('reports', ReportController::class);