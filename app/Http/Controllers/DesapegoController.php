<?php

namespace App\Http\Controllers;


// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
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


    protected $redirectTo = '/desapegoOfertasUsuario';


    /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'idProdutosDesapego' => ['required', 'unique:product'],
            'segment' => ['required', 'string'],
            'typeEquipament' => ['required', 'string', 'max:15'],
            'stateProduct' => ['required', 'string', 'max:50'],
            'titleProduct' => ['required', 'string', 'max:256'],
            'descriptionProduct' => ['required', 'string', 'max:360'],
            'priceProduct' => ['required', 'string', 8, 2],
            'withdrawalState' => ['required', 'string', 'max:45'],
            'withdrawalCity' => ['required', 'string', 'max:45'],
            'withdrawalNeighborhood' => ['required', 'string', 'max:45'],
            'idUser' => ['required', 'integer', 'unique'],
            'Users_id' => ['required', 'integer', 'unique'],
            'vendasDesapego_idVendasDesapego' => ['required', 'integer', 'unique'],
        ]);
    }

    
    protected function create(array $data)
    {
        return User::create([
            'idProdutosDesapego' => $data['idProdutosDesapego'],
            'segment' => $data['segment'],
            'typeEquipament' => $data['typeEquipament'],
            'stateProduct' => $data['stateProduct'],
            'titleProduct' => $data['titleProduct'],
            'descriptionProduct' => $data['descriptionProduct'],
            'priceProduct' => $data['priceProduct'],
            'withdrawalState' => $data['withdrawalState'],
            'withdrawalCity' => $data['withdrawalCity'],
            'withdrawalNeighborhood' => $data['withdrawalNeighborhood'],
            'idUser' => $data['idUser'],
            'Users_id' => $data['Users_id'],
            'vendasDesapego_idVendasDesapego' => $data['vendasDesapego_idVendasDesapego'],
        ]);
    }
 */
    
}
