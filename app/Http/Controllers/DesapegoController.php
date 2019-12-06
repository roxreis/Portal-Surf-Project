<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesapegoController extends Controller
{
    public function viewDesapego(Request $request){
        return view('desapego');
    }
}
