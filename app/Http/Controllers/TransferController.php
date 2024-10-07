<?php

namespace App\Http\Controllers;

use App\Models\PackageType;
use Illuminate\Http\Request;
use App\Models\PackagePricing; 
class TransferController extends Controller
{
    // Method to display the form for creating and viewing transfers
    public function create()
    {
        $packageTypes = PackageType::with("packagePricing")->get() ;
        
        // Retrieve all transfer types
        return view('admin.transfer.create_transfer', compact('packageTypes'));
    }

    // Method to store a new transfer type
public function store(Request $request)
{
    // التحقق من القيم المدخلة
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'dimensions' => 'required|string|max:255',
        'price' => 'required|numeric',
        'duration' => 'required|string|max:255',
        'space_dimensions' => 'required|string|max:255',
        'max_items' => 'required|integer',
        'surveillance' => 'required|string|in:yes,no', // قبول "yes" أو "no"
        'rental_duration' => 'required|string|max:255',
        'delivery_service' => 'required|string|in:yes,no',

    ]);


    // إنشاء نوع الحزمة
    $packageType = PackageType::create([
        'name' => $validatedData['name'],
        'dimensions' => $validatedData['dimensions'],
    ]);

    // إنشاء تسعير الحزمة مع القيم المحققة
    PackagePricing::create([
        'package_type_id' => $packageType->id,
        'price' => $validatedData['price'],
        'duration' => $validatedData['duration'],
        'space_dimensions' => $validatedData['space_dimensions'],
        'max_items' => $validatedData['max_items'],
        'surveillance' => $validatedData['surveillance'], 
        'rental_duration' => $validatedData['rental_duration'], 
        'delivery_service' => $validatedData['delivery_service'], 

    ]);

    // إعادة توجيه أو رد بعد نجاح الحفظ
    return redirect()->back()->with('success', 'Package pricing saved successfully.');
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
        'price' => 'required|numeric',
        'duration' => 'required|string|max:255',
        'space_dimensions' => 'required|string|max:255',
        'max_items' => 'required|integer',
        'surveillance' => 'required|string|in:yes,no', // قبول "yes" أو "no"
        'rental_duration' => 'required|string|max:255',
        'delivery_service' => 'required|string|in:yes,no',
    ]);

    // Update the package type
    $packageType->name = $request->input('name');
    $packageType->dimensions = $request->input('dimensions');
    $packageType->save(); // احفظ التحديثات لنموذج PackageType

    // تحديث التسعير
    $packagePricing = PackagePricing::where('package_type_id', $packageType->id)->first();
    if ($packagePricing) {
        $packagePricing->price = $request->input('price');
        $packagePricing->duration = $request->input('duration');
        $packagePricing->space_dimensions = $request->input('space_dimensions');
        $packagePricing->max_items = $request->input('max_items');
        $packagePricing->surveillance = $request->input('surveillance') === 'yes' ? 'yes' : 'no'; // تخزين "yes" أو "no"
        $packagePricing->rental_duration = $request->input('rental_duration');
        $packagePricing->delivery_service = $request->input('delivery_service') === 'yes' ? 'yes' : 'no'; // تخزين "yes" أو "no"
        $packagePricing->save(); // احفظ التحديثات لنموذج PackagePricing
    }

    return redirect()->route('admin.transfers.create')->with('success', 'Transfer type updated successfully!');
}

}
