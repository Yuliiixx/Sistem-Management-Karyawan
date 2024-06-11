<?php
namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Child;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('child')->paginate(10);
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        $children = Child::all();
        return view('reports.create', compact('children'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required',
            'date' => 'required|date',
            'description' => 'required',
        ]);

        Report::create($request->all());
        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }

    public function show($id)
    {
        $report = Report::with('child')->find($id);
        return view('reports.show', compact('report'));
    }

    public function edit($id)
    {
        $report = Report::find($id);
        $children = Child::all();
        return view('reports.edit', compact('report', 'children'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'child_id' => 'required',
            'date' => 'required|date',
            'description' => 'required',
        ]);

        $report = Report::find($id);
        $report->update($request->all());
        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy($id)
    {
        Report::find($id)->delete();
        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}
