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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dimensions' => 'required|string|max:255',
        ]);

        // Create a new PackageType using mass assignment
        PackageType::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Transfer type added successfully!');
    }

    // Method to delete a transfer type
    public function destroy($id)
    {
        // Find the PackageType by id and delete it
        $packageType = PackageType::findOrFail($id);
        $packageType->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Transfer type deleted successfully!');
    }

    // Method to show the edit form for a specific transfer type
    public function edit($id)
    {
        // Find the PackageType by id
        $packageType = PackageType::findOrFail($id);

        // Return the edit view with the specific PackageType
        return view('admin.transfer.edit_transfer', compact('packageType'));
    }

    // Method to update a transfer type
    public function update(Request $request, $id)
    {
        // Find the PackageType by id
        $packageType = PackageType::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'dimensions' => 'required|string|max:255',
        ]);

        // Update the PackageType data
        $packageType->name = $request->input('name');
        $packageType->dimensions = $request->input('dimensions');
        $packageType->save();

        // Redirect to the create page with success message
        return redirect()->route('admin.transfers.create')->with('success', 'Transfer type updated successfully!');
    }
}
