<?php
namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Child;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::with('child')->paginate(10);
        return view('assessments.index', compact('assessments'));
    }

    public function create()
    {
        $children = Child::all();
        return view('assessments.create', compact('children'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:children,child_id',
            'date' => 'required|date',
            'result' => 'required',
        ]);

        Assessment::create($request->all());
        return redirect()->route('assessments.index')->with('success', 'Assessment created successfully.');
    }

    public function show($id)
    {
        $assessment = Assessment::with('child')->find($id);
        return view('assessments.show', compact('assessment'));
    }

    public function edit($id)
    {
        $assessment = Assessment::find($id);
        $children = Child::all();
        return view('assessments.edit', compact('assessment', 'children'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'child_id' => 'required|exists:children,child_id',
            'date' => 'required|date',
            'result' => 'required',
        ]);

        $assessment = Assessment::find($id);
        $assessment->update($request->all());
        return redirect()->route('assessments.index')->with('success', 'Assessment updated successfully.');
    }

    public function destroy($id)
    {
        $assessment = Assessment::find($id);
        $assessment->delete();
        return redirect()->route('assessments.index')->with('success', 'Assessment deleted successfully.');
    }
}
