<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesapegoController extends Controller
{

    protected $redirectTo = '/desapegoOfertasUsuario';


    public function viewDesapego(Request $request){
        return view('desapego');
    }

    public function viewDesapegoCadastroOferta(Request $request){
        return view('desapegoCadastroOferta');

    }

    public function viewDesapegoOfertasUsuario(Request $request){
        return view('desapegoOfertasUsuario');
    }
}
