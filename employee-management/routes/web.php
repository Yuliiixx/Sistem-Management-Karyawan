<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ChildClassController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AssessmentController;


Route::get('/', function () {
    return view('welcome');
});

// routes/web.php





Route::resource('employees', EmployeeController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('salaries', SalaryController::class);
Route::resource('classes', ClassController::class);
Route::resource('packages', PackageController::class);
Route::resource('children', ChildController::class);
Route::resource('child_classes', ChildClassController::class);
Route::resource('reports', ReportController::class);
Route::resource('assessments', AssessmentController::class);
