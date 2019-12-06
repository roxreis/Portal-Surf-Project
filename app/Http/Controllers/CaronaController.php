<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaronaController extends Controller
{
    public function viewCarona(Request $request){
        return view('carona');
    }
}
