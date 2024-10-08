<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showEstimateForm() {
        $user = Auth::user();
        return view('frontend.storage.storage', [
            'name' => $user->name,
            'email' => $user->email
        ]);
    }
}
