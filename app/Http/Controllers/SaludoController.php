<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function inicio(Request $request)
    {
        $nom = $request->input('nom');
        $cognom = $request->input('cognom');
        $data["nom"]=$nom;
        $data["cognom"]=$cognom;
        return view("quetal", $data);
    }
}
