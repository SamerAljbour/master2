<?php

namespace App\Http\Controllers;

use App\Models\PackageType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $packageTypes = PackageType::all();
        return view('frontend.packeg.packeg', compact('packageTypes'));
    }

public function show($id)
{
    $packageType = PackageType::findOrFail($id);
    return view('frontend.service.index', compact('packageType'));
}

}
