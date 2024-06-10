<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        $salaries = Salary::with('employee')->paginate(10);
        return view('salaries.index', compact('salaries'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('salaries.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,employee_id',
            'month' => 'required|integer',
            'year' => 'required|integer',
            'total_hours' => 'required|integer',
            'bonus' => 'required|numeric',
            'deductions' => 'required|numeric',
            'total_salary' => 'required|numeric',
        ]);

        Salary::create($request->all());

        return redirect()->route('salaries.index')->with('success', 'Salary created successfully.');
    }

    public function show(Salary $salary)
    {
        return view('salaries.show', compact('salary'));
    }

    public function edit(Salary $salary)
    {
        $employees = Employee::all();
        return view('salaries.edit', compact('salary', 'employees'));
    }

    public function update(Request $request, Salary $salary)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,employee_id',
            'month' => 'required|integer',
            'year' => 'required|integer',
            'total_hours' => 'required|integer',
            'bonus' => 'required|numeric',
            'deductions' => 'required|numeric',
            'total_salary' => 'required|numeric',
        ]);

        $salary->update($request->all());

        return redirect()->route('salaries.index')->with('success', 'Salary updated successfully.');
    }

    public function destroy(Salary $salary)
    {
        $salary->delete();

        return redirect()->route('salaries.index')->with('success', 'Salary deleted successfully.');
    }
}
