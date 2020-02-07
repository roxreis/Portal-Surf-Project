<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desapego;
use File;
use Illuminate\Http\UploadedFile; 
use Auth; 
use App\User;

class CrudDesapegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ofertas = Desapego::all();
        return view('desapegoOfertasUsuario')->with(['ofertas'=>$ofertas]);
       
    

       


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $oferta = new Desapego();
        // $oferta->segment = $request->segment;
        // $oferta->typeEquipament = $request->typeEquipament;
        // $oferta->stateProduct = $request->stateProduct;
        // $oferta->titleProduct = $request->titleProduct;
        // $oferta->descriptionProduct = $request->descriptionProduct;
        // $oferta->priceProduct = $request->priceProduct;
        // $oferta->withdrawalState = $request->withdrawalState;
        // $oferta->withdrawalCity = $request->withdrawalCity;
        // $oferta->withdrawalNeighborhood = $request->withdrawalNeighborhood;
        // $oferta->imgProduct = $request->imgProduct;
       
        // $result = $oferta->save();
        //     return view('desapegoEditarOferta')->with(["result"=>$result]);

        return view('desapegoCadastroOferta');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()){
            $ofertas = new Desapego();
           
            $ofertas->descriptionProduct = $request->input('descriptionProduct');
            $ofertas->priceProduct = $request->input('priceProduct');
            $ofertas->withdrawalState = $request->input('withdrawalState');
            $ofertas->withdrawalState = $request->input('withdrawalState');
            $ofertas->withdrawalCity = $request->input('withdrawalCity');
            $ofertas->withdrawalNeighborhood = $request->input('withdrawalNeighborhood');
            $ofertas->image = $request->input('image');
            $ofertas->phone = $request->input('phone');
            $ofertas['user_id'] = Auth::user()->id;
           

           if($request->hasFile('image')){
               $ofertas->image = $request->image->store('imagens');
           }
          
            $ofertas->save();

            
        
        return redirect()->route('ofertaDesapego.index');
        }else{
            return redirect()->route('login');
        }
    }

        // if($request->hasFile('image')){
        //     $path = $request->image->store('imagens');
        //     Image::create(['path'=> $path]);

        // }
        
        // return redirect()->route('ofertaDesapego.index');


        



    //       // Define o valor default para a variável que contém o nome da imagem 
    // $nameFile = null;
 
    // // Verifica se informou o arquivo e se é válido
    // if ($request->hasFile('imgProduct') && $request->file('imgProduct')->isValid()) {
         
    //     // Define um aleatório para o arquivo baseado no timestamps atual
    //     $name = uniqid(date('HisYmd'));
 
    //     // Recupera a extensão do arquivo
    //     $extension = $request->imgProduct->extension();
 
    //     // Define finalmente o nome
    //     $nameFile = "{$name}.{$extension}";
 
    //     // Faz o upload:
    //     $upload = $request->imgProduct->storeAs('imagens', $nameFile);
    //     // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
        
        
 
    //     // Verifica se NÃO deu certo o upload (Redireciona de volta)
    //     if ( !$upload )
    //         return redirect()
    //                     ->back()
    //                     ->with('error', 'Falha ao carregar a imagem')
    //                     ->withInput();
 
    // }
      
       
      
      
      
        // $file = $request->hasFile('imgProduct');
 
        // // Se é válido, retorna um boolean
        // $file = $request->file('imgProduct')->isValid();
        // $extension = $img->getClientOriginalExtension();
        // if($extension != 'jpeg' && $extension != 'jpg' && $extension != 'png'){
        //       return back()->with('erro', 'Erro: A foto do produto deve ter extensão jpeg, jpg ou png!');
        // }



        // $images = $request->file('imgProduct');

        // if($images){
        //     foreach ($images as $image){
        //         $image->store('images', 'public');
        //     }
        // }
        
    //    if(isset($request['imgProduct'])){
    //     $img = $request['imgProduct']; 
    //     $extension = $img->getClientOriginalExtension();
    //     if($extension != 'jpeg' && $extension != 'jpg' && $extension != 'png'){
    //         return back()->with('erro', 'Erro: A foto do produto deve ter extensão jpeg, jpg ou png!');
    //     }

   
    // }

    // if(isset($request['imgProduct']))
    // {
    //     $img = $request['imgProduct']; 
    //     File::move($img, public_path().'/imagens/img-desapego/image-id_'. $request->id.'.'.$extension);
    //     $request->imgProduct = public_path().'/imagens/img-desapego/image-id_'. $request->id.'.'.$extension;
    //     // $request->save();
    // }


    


       
        
  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // try{
            //         $oferta = $this->Desapego->findOrFail($id);
        
                    
        
                // } catch(\Exception $e) {
                //     if(env('APP_DEBUG')) {
                //         return redirect()->back();
                //     }
        
        }    
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id=0){
        $ofertas = Desapego::find($id);
        if($ofertas){
            return view('desapegoEditarOferta')->with(["ofertas"=>$ofertas]);
        }else{
            return view('desapegoEditarOferta');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validaDados = $request->validate([
          
        //     'descriptionProduct' => 'required',
        //     'priceProduct' => 'required',
        //     'withdrawalState'=> 'required',
        //     'withdrawalCity'=> 'required',
        //     'withdrawalNeighborhood'=> 'required',
        //     'image' => 'required',
        //     'phone' => 'required',
        // ]);

        $ofertas = Desapego::find($id);
           
        $ofertas->descriptionProduct = $request->input('descriptionProduct');
        $ofertas->priceProduct = $request->input('priceProduct');
        $ofertas->withdrawalState = $request->input('withdrawalState');
        $ofertas->withdrawalState = $request->input('withdrawalState');
        $ofertas->withdrawalCity = $request->input('withdrawalCity');
        $ofertas->withdrawalNeighborhood = $request->input('withdrawalNeighborhood');
        $ofertas->image = $request->input('image');
        $ofertas->phone = $request->input('phone');

       if($request->hasFile('image')){
           $ofertas->image = $request->image->store('imagens');
       }
      
        $ofertas->save();
        
       return redirect()->route('ofertaDesapego.index')->with('success', "Atualizado com Sucesso" );
              // $ofertas = Desapego::find($request->id);
        // $ofertas->segment = $request->segment;
        // $ofertas->typeEquipament = $request->typeEquipament;
        // $ofertas->stateProduct = $request->stateProduct;
        // $ofertas->titleProduct = $request->titleProduct;
        // $ofertas->descriptionProduct = $request->descriptionProduct;
        // $ofertas->priceProduct = $request->priceProduct;
        // $ofertas->withdrawalState = $request->withdrawalState;
        // $ofertas->withdrawalCity = $request->withdrawalCity;
        // $ofertas->withdrawalNeighborhood = $request->withdrawalNeighborhood;
        // $ofertas->imgProduct = $request->imgProduct;
        // $ofertas->phone = $request->phone;
        // // // apagada a linha de id usuario porque nao posso alterar essa informacao original
        // //auth eh uma classe global que possui um metodo proprio chamado user que me retorna os atributos dele, por isso posso apenas solicitar o id direto.
        // //agora precisa salvar este objeto que geramos:
        // $result = $ofertas->save();
    }  
        // try{
                    // $data = $request->all();
        
    //                 $oferta = $this->Desapego->findOrFail($id);
    //                 $oferta->update($data);
        
    //                 return redirect()->route('ofertaDesapego.index');
        
    //             } catch(\Exception $e) {
    //                 if(env('APP_DEBUG')) { 
    //                     return redirect()->back();
    //                 }
                    
    //             }
    // }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Desapego::where('id',$id)->delete();
        return redirect()->route('ofertaDesapego.index')->with('delete', 'Oferta deletada');

       
    }
     
}

 
