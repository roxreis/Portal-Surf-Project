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

            <div class="encontreSelecao col-md-1 col-sm-1">
                <h3 class="font-weight-bold">O que você procura?</h3><br>
            </div>

            <div class="col-lg-4 col-md-4">
                <div>
                    <label for="encontreLocal">Selecione um local:</label>
                    <select class="form-control" id="encontreLocal">
                        <option disabled selected> </option>
                        <option id="encontreLocal" value="riviera">Riviera</option>
                        <option id="encontreLocal" value="maresias">Maresias</option>
                        <option id="encontreLocal" value="pauba">Paúba</option>
                        <option id="encontreLocal" value="baleia">Baleia</option>
                        <option id="encontreLocal" value="barra">Barra do Una</option>
                        <option id="encontreLocal" value="guaeca">Guaecá</option>
                        <option id="encontreLocal" value="juquehy">Juquehy</option>
                        <option id="encontreLocal" value="santiago">Santiago</option>
                        <option id="encontreLocal" value="cambury">Cambury</option>
                    </select>
                </div><br>

                <div>
                    <div class="column">
                        <button type="button" class="btn encontreBotao" data-toggle="tooltip" data-placement="top"
                            title="Surfshop" id="encontreLocal" value="surfshop">Surfshop</button><br><br>

                        <button type="button" class="btn encontreBotao" data-toggle="tooltip" data-placement="top"
                            title="Surfshop" id="encontreLocal" value="equipamentos">Equipamentos</button><br><br>

                        <button type="button" class="btn encontreBotao" data-toggle="tooltip" data-placement="top"
                            title="Surfshop" id="encontreLocal" value="aulas">Aulas</button><br><br>
                    </div>

                    <!-- <select class="form-control" id="encontreServico">
                    <option disabled selected> </option>
                    <option id="encontreServico" value=”surfshop”>Surf Shop</option>
                    <option id="encontreServico" value=”aulas”>Aulas</option>
                    <option id="encontreServico" value=”equipamentos”>Equipamentos</option>
                    <option id="encontreServico" value=”manutenção”>Manutenção</option>
                </select> -->
                </div><br>
                <div class="col-lg-1">
                    <button type="submit" class="btn encontreBotao">Encontre</button>
                </div>
            </div>
            <!-- </div> -->
            <!-- </section> -->

            <!-- mapa do google -->
            <!-- <section class="container"> -->
            <div class="col-lg-7 col-md-7">
                <img src="imagens/img-encontre/mapa.png" alt="mapa" class="encontreMapa">
            </div>
    </section>

    <!-- botao topo -->
    <div class="container text-center mt-5 mb-5">
        <a href="#encontreTopo" class="btn encontreBotao">Topo</a>
    </div>

    @endsection
