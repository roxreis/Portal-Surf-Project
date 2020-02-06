@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Seu histórico de ofertas 
@endsection

@section('conteudo')



<section class="container d-flex justify-content-center align-items-center " >
     @if(session('delete'))
        <div class=" col-6 alert alert-success h-25 d-flex" style="margin-top: 21vh;justify-content: center;">
            <p>{{session('delete')}}</p>
        </div>
     @endif


</section>

<section class="container d-flex" >

   

    <div class="img-ofertaDesapegoHistorico">
       
        @if(isset($ofertas))

            @foreach($ofertas as $oferta)
            
                <div class="card col-4"> 
                                
                        <img src="{{url('imagens/{$oferta->imgProduct}')}}" class="card-img-top" alt="imagem prancha">
                
                    <div class="card-body">
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

                </div>
                    

            @endforeach

            @else
                <h2>Não há Produtos para Exibir</h2>

        @endif
    
    


    
    
   
    </div>


</section>

<!-- botao voltar e topo -->
<div class="container mt-3">
<a href='#historicoOfertasTopo' class="btn encontreBotao">Topo</a>
<a href="/desapego" class="btn encontreBotao">Voltar</a>
</div>


@endsection