<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $name = "abc";
        $age = 19;
        $address = "Pati";
        return view('biodata', [
            'name' => $name,
            'age' => $age,
            'address' => $address
        ]);
    }
}
