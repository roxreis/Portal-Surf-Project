<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesapegoController extends Controller
{
    public function viewDesapego(Request $request){
        return view('desapego');
    }

    public function viewDesapegoCadastroOferta(Request $request){
        return view('desapegoCadastroOferta');
    }

    public function viewDesapegoOfertasUsuario(Request $request){
        return view('desapegoOfertasUsuario');
    }

    public function viewDesapegoOfertaIndividual(Request $request){
        return view('desapegoOfertaIndividual');
    }
}
