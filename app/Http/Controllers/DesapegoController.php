<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DesapegoController extends Controller
{


    public function create(Request $request){
        // metodo acima 'create' fica responsavel por cadastrar um produto

        // metodo abaixo sujo, substituido pelo proximo:
        // if($request->isMethod('GET')){
        //     return view('formulario');
        // }else{
        //     // faco o cadastro do produto
        // }
        
    }

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

    public function viewDesapegoOfertaIndividual(Request $request){
        return view('desapegoOfertaIndividual');
    }


    
}
