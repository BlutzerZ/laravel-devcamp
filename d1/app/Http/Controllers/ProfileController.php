<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProfileController extends Controller
{
    public function index($name)
    {
        $profils = Profil::all();
        
        $data = [
            'profils' => $profils,
        ];

        return view('profil', $data);
    }
}
