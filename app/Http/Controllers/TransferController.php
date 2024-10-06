<?php

namespace App\Http\Controllers;

use App\Models\PackageType;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    // Method to display the form for creating and viewing transfers
    public function create()
    {
        $packageTypes = PackageType::all(); // Retrieve all transfer types
        return view('admin.transfer.create_transfer', compact('packageTypes'));
    }

    // Method to store a new transfer type
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dimensions' => 'required|string|max:255',
        ]);

        PackageType::create($validatedData);

        return redirect()->back()->with('success', 'Transfer type added successfully!');
    }

    // Method to delete a transfer type
    public function destroy($id)
    {
        $packageType = PackageType::findOrFail($id);
        $packageType->delete();

        return redirect()->back()->with('success', 'Transfer type deleted successfully!');
    }

    // Method to show the edit form for a specific transfer type
    public function edit($id)
    {
        $packageType = PackageType::findOrFail($id);
        return view('admin.transfer.edit_transfer', compact('packageType'));
    }

    // Method to update a transfer type
    public function update(Request $request, $id)
    {
        $packageType = PackageType::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'dimensions' => 'required|string|max:255',
        ]);

        // Update the transfer type
        $packageType->name = $request->input('name');
        $packageType->dimensions = $request->input('dimensions');
        $packageType->save();

        return redirect()->route('admin.transfers.create')->with('success', 'Transfer type updated successfully!');
    }
}
