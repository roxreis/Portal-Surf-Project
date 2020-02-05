@extends('layouts.templateSurf')

@section('titulo')
Encontre
@endsection

@section('conteudo')

<!-- banner -->
<section class="d-flex">
    <div class="encontreBanner">
        <div class="frontBanner">
            <h1 class="mx-auto caronaTextoBanner">Encontre</h1>
        </div>
    </div>
</section>

<section class="container">
    <!-- titulo da pagina -->
    <h1 id="encontreTopo" class="mt-5 text-center">Encontre lojas com produtos e serviços de <br> surf aonde
        você estiver:</h1>

    <!-- campos de busca -->
    <section class="container mt-5">
        <div class="row align-items-center">

            <h2 class="font-weight-bold encontreSelecao">O que você procura?</h2><br>
<form action="">
            <div class="col-lg-3 col-md-3 ml-5">
                <select class="form-control" id="encontreLocal">
                    <option disabled selected>Selecione uma praia!</option>
                    <option id="encontreLocal" value="riviera">Riviera</option>
                    <option id="encontreLocal" value="maresias">Maresias</option>
                    <option id="encontreLocal" value="baleia">Baleia</option>
                    <option id="encontreLocal" value="barra">Barra do Una</option>
                    <option id="encontreLocal" value="juquehy">Juquehy</option>
                    <option id="encontreLocal" value="cambury">Cambury</option>
                </select>
            </div>

            <div class="ml-5 mr-5">
                <input type="hidden" name="encontreServico" id="encontreServico">
                <!-- <div><img src="{{asset('icn/prancha-de-surfe.svg')}}" alt="equipamentos" class="encontreIcones chip">Equipamentos</div> -->
                <img src="{{asset('icn/prancha-de-surfe.svg')}}" alt="equipamentos" class="encontreIcones" id="encontrePrancha">
                <img src="{{asset('icn/neoprene.svg')}}" alt="surfwear" class="encontreIcones" id="encontreSurfwear">
                <img src="{{asset('icn/surfar.svg')}}" alt="aulas" class="encontreIcones" id="encontreAulas">
            </div>
            
            <!-- botao de enviar -->
            <button type="submit" class="btn encontreBotao" id="botao">Dropar</button>
            </form>
        </div>

        <!-- mapa do google -->
        <div id="map" class="encontreMapa mt-5"></div>
        <!-- <div id="map"></div> -->

    </section>

    <!-- botao topo -->
    <div class="container text-center mt-5 mb-5">
        <a href="#encontreTopo" class="btn encontreBotao">Topo</a>
    </div>

    <!-- script para api -->
    <script src="{{asset('js/encontre.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs&callback=iniciarMap"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQwuBUVSLoBivCe5CLvcZK7u3izeTmVRs"></script>
    
    @endsection
