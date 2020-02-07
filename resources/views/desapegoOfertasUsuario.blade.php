@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Seu histórico de ofertas 
@endsection

@section('conteudo')

<section class="container d-flex align-items-center flex-column" style="height:357vh;" >

@if(session('delete'))
        <div class=" col-2 alert alert-success d-table" style="margin-top: 21vh;">
            <p>{{session('delete')}}</p>
        </div>
     @endif

    <div class="img-ofertaDesapegoHistorico">
       
        
            

                @foreach($ofertas as $oferta)

                    @if(Auth::user()->id == $oferta ->user_id)
                                
                    <div class="card col-4 cardOfertaDesapego">

                        <img src="{{asset('storage/'.$oferta->image)}}" style="height:55vh; margin-bottom: 10px;margin-top: 10px;" alt="">
                            
                                <p class="card-titlle">ID {{$oferta ->id}}</p>
                                <h5 class="card-title">{{$oferta -> descriptionProduct}}</h5>
                                <p class="card-text">R$ {{$oferta -> priceProduct}} <br><br> Data oferta:<br>{{$oferta ->created_at}} </p>
                                <p class="card-text">Fone: {{$oferta -> phone}}</p>
                                <div class="d-flex flex-row">
                                    <a href="{{route('ofertaDesapego.edit', $oferta -> id)}}" class="btn encontreBotao mr-1">Editar</a>
                                    <form action="{{route('ofertaDesapego.destroy', $oferta -> id)}}" method="post">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Excluir</button>
                                    </form>    
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <p>{{session('success')}}</p>
                                    </div>
                                @endif
                                
                                <!-- <a href="#" class="btn encontreBotao">Desativar</a> -->
                    

                    </div>
                             
                    @endif        

                @endforeach
           

          
    
    


    
    
   
    </div>


</section>

<!-- botao voltar e topo -->
<div class="container mt-3">
<a href='#historicoOfertasTopo' class="btn encontreBotao">Topo</a>
<a href="/desapego" class="btn encontreBotao">Voltar</a>
</div>


@endsection