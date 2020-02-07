@extends('layouts.templateSurf')

@section('titulo')
Desapego Oferta
@endsection

@section('conteudo')
    <section class="d-flex">
        <div class="despegoBannerIndividual">
            <div class = "frontBanner">
                <h1 class="caronaTextoBanner">Estão Desapegando</h1>
            </div>
        </div>
    </section>
    <section class="d-flex p-3 ofertaIndivid">
       
            <div class="d-flex" style="margin-top: 18px;">
                @foreach($ofertas as $oferta)
                
                    <div class="row col-xl-6 col-lg-12 col-sm-12 w-50 h-50  mr-2">
                        <img src="{{asset('storage/'.$oferta->image)}}" class="img-fluid border border-dark img-oferta-individual">
                    </div>
                   
                 
            
                    <!-- informacoes oferta -->
                    <div class="row col-xl-6 col-lg-12 col-sm-12 d-flex flex-column">
                        <h1 class="font-italic font-weight-bold">{{$oferta->descriptionProduct}}</h1>
                        <p class="card-text">R$ {{$oferta->priceProduct}} <br><br> Data oferta:<br>{{$oferta->created_at}} </p>
                        <p class="card-text">Fone: {{$oferta->phone}}</p>
                    </div>
                @endforeach        
            </div>
        
    </section>

        <!-- botão voltar -->
        <div class="container text-center mt-5 mb-5">
            <!-- botao voltar -->
            <a href='/desapego'><button class='btn encontreBotao'>Voltar</button></a>
        </div>


@endsection