<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desapego;

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
        return view('desapegoOfertasUsuario')->with(['ofertas'=> $ofertas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        Desapego::create($request->all());
        return redirect()->route('ofertaDesapego.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
                    $oferta = $this->Desapego->findOrFail($id);
        
                    return view('ofertaDesapego.edit');
        
                } catch(\Exception $e) {
                    if(env('APP_DEBUG')) {
                        return redirect()->back();
                    }
        
        }    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
                try{
                    $data = $request->all();
        
                    $oferta = $this->Desapego->findOrFail($id);
                    $oferta->update($data);
        
                    return redirect()->route('ofertaDesapego.index');
        
                } catch(\Exception $e) {
                    if(env('APP_DEBUG')) { 
                        return redirect()->back();
                    }
                    
                }
    }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $oferta = Desapego::find($id)->delete();
        // return redirect()->route('ofertaDesapego.index');

        try {

            $oferta = Desapego::findOrFail($id)->delete();
            return redirect()->route('ofertaDesapego.index');
        
                } catch(\Exception $e) {
                    if(env('APP_DEBUG')) {
                        return redirect()->back();
                    }
                }
    }

}

