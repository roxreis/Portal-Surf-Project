@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Seu histórico de ofertas 
@endsection

@section('conteudo')



<section class="container d-flex" style="height:398vh;">

    <div class="img-ofertaDesapegoHistorico">
   
        @foreach($ofertas as $oferta)
            <div class="card col-4">                
                    <img src="{{$oferta -> imgProduct}}" class="card-img-top" alt="imagem prancha">
                <div class="card-body">
                        <h5 class="card-title">{{$oferta -> titleProduct}}</h5>
                        <p class="card-text">R$ {{$oferta -> priceProduct}} <br> Descrição: {{$oferta -> descriptionProduct}} <br> Data oferta:{{$oferta ->created_at}} </p>
                        <a href="#" class="btn encontreBotao">Editar</a>
                    <a href= "#" class="btn btn-danger">Excluir</a> 
                    <a href="#" class="btn encontreBotao">Desativar</a>
                </div>
            </div>
        @endforeach
   
    </div>


</section>

<!-- botao voltar e topo -->
<div class="container mt-3">
<a href='#historicoOfertasTopo' class="btn encontreBotao">Topo</a>
<a href="/desapego" class="btn encontreBotao">Voltar</a>
</div>


@endsection