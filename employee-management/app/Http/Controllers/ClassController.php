<?php
namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::all();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|max:50',
            'schedule' => 'required|max:255',
        ]);

        ClassModel::create($request->all());

        return redirect()->route('classes.index')
                         ->with('success', 'Class created successfully.');
    }

    public function show(ClassModel $class)
    {
        return view('classes.show', compact('class'));
    }

    public function edit(ClassModel $class)
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, ClassModel $class)
    {
        $request->validate([
            'class_name' => 'required|max:50',
            'schedule' => 'required|max:255',
        ]);

        $class->update($request->all());

        return redirect()->route('classes.index')
                         ->with('success', 'Class updated successfully.');
    }

    public function destroy(ClassModel $class)
    {
        $class->delete();

        return redirect()->route('classes.index')
                         ->with('success', 'Class deleted successfully.');
    }
}
