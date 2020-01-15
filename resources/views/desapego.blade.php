@extends('layouts.templateSurf')

@section('titulo')
    Desapego
@endsection

@section('conteudo')


        <!-- busca -->
        <!-- <div>
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center col-lg-6">
                <input class="form-control mr-sm-4 col-lg-8" type="search" placeholder="Encontre no Portal do Surf!"
                    aria-label="Search">
                <button class="btn encontreBotao my-2 my-sm-0 col-lg-2" type="submit">Busca</button>
            </form>
        </div><br><br> -->

        <!-- segmentos -->
    <section class="d-flex">
        <div class="despegoBanner ">
            <div class = "frontBanner">
                <h1 class="caronaTextoBanner">Desapego</h1>
            </div>
        </div>
    </section>

    <section  style="background-color: #cbcece75;" >
        <div class="shadow-lg container" id="desapego">

            <!-- <div>
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center align-items-center col-lg-6">
                <input class="form-control mr-sm-4 col-lg-8" type="search" placeholder="Encontre no Portal do Surf!"
                    aria-label="Search">
                <button class="btn encontreBotao my-2 my-sm-0 col-lg-2" type="submit">Busca</button>
            </form>
            </div><br><br> -->

            <div class="titulodeSecaoDesapego"> 
                <h3>Pranchas e Equipamentos</h3>
            </div>
            <div class="card-deck p-3"> 
                <div class="card cards-desapego border-0">
                  <img src="/imagens/img-desapego/prancha_2.jpg" class="imagemcards-desapego card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                   
                </div>
                <div class="card cards-desapego border-0">
                    <img src="/imagens/img-desapego/prancha_6.jpg" class="imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                   
                </div>
                <div class="card cards-desapego border-0 ">
                    <img src="/imagens/img-desapego/acessorios1.jpg" class=" imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                  
                </div>
            </div>

            <div class="titulodeSecaoDesapego"> 
                <h3>Body Board, Stand Up Paddle e Windsurf </h3>
            </div>
            <div class="card-deck  p-3"> 
                <div class="card cards-desapego border-0 ">
                  <img src="/imagens/img-desapego/Body Board.jpg" class="imagemcards-desapego card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                   
                </div>
                <div class="card cards-desapego border-0 ">
                    <img src="/imagens/img-desapego/Windsurf.jfif" class="imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                           
                        </div>
                   
                </div>
                <div class="card cards-desapego border-0">
                    <img src="/imagens/img-desapego/Standuppaddle.jfif" class=" imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                  
                </div>
            </div>

            <div class="titulodeSecaoDesapego"> 
                <h3>Vestuários</h3>
            </div>
            <div class="card-deck  p-3"> 
                <div class="card cards-desapego border-0">
                  <img src="/imagens/img-desapego/roupas3.jpg" class="imagemcards-desapego card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                   
                </div>
                <div class="card cards-desapego border-0">
                    <img src="/imagens/img-desapego/oculos_3.jpg" class="imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                   
                </div>
                <div class="card cards-desapego border-0">
                    <img src="/imagens/img-desapego/roupas4.jpg" class=" imagemcards-desapego card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                  
                </div>
            </div>
        </div>
    </section>


@endsection