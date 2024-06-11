<?php

namespace App\Http\Controllers;

use App\Models\ChildClass;
use App\Models\Child;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class ChildClassController extends Controller
{
    public function index()
    {
        $childClasses = ChildClass::with(['child', 'class'])->paginate(10);
        return view('child_classes.index', compact('childClasses'));
    }

    public function create()
    {
        $children = Child::all();
        $classes = ClassModel::all();
        return view('child_classes.create', compact('children', 'classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:children,child_id',
            'class_id' => 'required|exists:classes,class_id',
        ]);

        ChildClass::create($request->all());

        return redirect()->route('child_classes.index')
                        ->with('success', 'Child Class created successfully.');
    }

    public function show(ChildClass $childClass)
    {
        return view('child_classes.show', compact('childClass'));
    }

    public function edit(ChildClass $childClass)
    {
        $children = Child::all();
        $classes = ClassModel::all();
        return view('child_classes.edit', compact('childClass', 'children', 'classes'));
    }

    public function update(Request $request, ChildClass $childClass)
    {
        $request->validate([
            'child_id' => 'required|exists:children,child_id',
            'class_id' => 'required|exists:classes,class_id',
        ]);

        $childClass->update($request->all());

        return redirect()->route('child_classes.index')
                        ->with('success', 'Child Class updated successfully.');
    }

    public function destroy(ChildClass $childClass)
    {
        $childClass->delete();

        return redirect()->route('child_classes.index')
                        ->with('success', 'Child Class deleted successfully.');
    }
}
