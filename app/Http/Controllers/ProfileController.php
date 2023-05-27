<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($name)
    {
        $age = 19;
        $address = "Pati";
        return view('biodata', [
            'name' => $name,
            'age' => $age,
            'address' => $address
        ]);
    }
}
