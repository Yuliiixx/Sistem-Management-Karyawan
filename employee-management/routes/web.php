<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php





Route::resource('employees', EmployeeController::class);
Route::resource('attendances', AttendanceController::class);