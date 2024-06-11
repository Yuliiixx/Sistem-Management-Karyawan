<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Package;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::with('package')->paginate(10);
        return view('children.index', compact('children'));
    }

    public function create()
    {
        $packages = Package::all();
        return view('children.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'parent_name' => 'required|max:100',
            'address' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:100',
            'package_id' => 'required|exists:packages,package_id',
        ]);

        Child::create($request->all());
        return redirect()->route('children.index')->with('success', 'Child created successfully.');
    }

    public function show(Child $child)
    {
        return view('children.show', compact('child'));
    }

    public function edit(Child $child)
    {
        $packages = Package::all();
        return view('children.edit', compact('child', 'packages'));
    }

    public function update(Request $request, Child $child)
    {
        $request->validate([
            'name' => 'required|max:100',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'parent_name' => 'required|max:100',
            'address' => 'required|max:255',
            'phone' => 'required|max:15',
            'email' => 'required|email|max:100',
            'package_id' => 'required|exists:packages,package_id',
        ]);

        $child->update($request->all());
        return redirect()->route('children.index')->with('success', 'Child updated successfully.');
    }

    public function destroy(Child $child)
    {
        $child->delete();
        return redirect()->route('children.index')->with('success', 'Child deleted successfully.');
    }
}
