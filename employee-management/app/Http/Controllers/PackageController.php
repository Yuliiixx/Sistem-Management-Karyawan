<?php
namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required|max:50',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Package::create($request->all());

        return redirect()->route('packages.index')
                         ->with('success', 'Package created successfully.');
    }

    public function show(Package $package)
    {
        return view('packages.show', compact('package'));
    }

    public function edit(Package $package)
    {
        return view('packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'package_name' => 'required|max:50',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $package->update($request->all());

        return redirect()->route('packages.index')
                         ->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index')
                         ->with('success', 'Package deleted successfully.');
    }
}
