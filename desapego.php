<!-- Rodrigo: página principal de acesso ao desapego, onde ficam as ofertas. Lembrando que tem que ter o link para um usuário logado cadastrar uma nova oferta e acessar histórico de ofertas  cadastradas anteriormente (páginas do Caio). Imaginei um aside com publi, veja se concorda/ fica bom, por favor. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Desapego</title>
</head>
<body>
    <?php include_once("header.php") ?>  
    <main class="container">
       
        <div class="jumbotron col-12" id= "bannerDesap"></div>
        <h1 Class="textBanner">Estão Desapegando!</h1>
        <section class="Desapego">
            <!-- cards para seção desapego  -->
                <div class="col-12 bg-light d-flex ofertasPranchas" >
                    <div class="mt-5 mb-5 ml-3" >
                        <h2>PRANCHAS</h2>
                        <p class="font-weight-light">Usadas em 3 fases - Pouco uso / Bom uso / Muito uso!</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center align-items-center" id="imagemPranchas">
                             <div class="card border-primary ml-2 mr-3" id="PranchaUm" >
                                <img id="imagemPranchaUm" src="imagens/img-desapego/prancha_4.jpeg" class="card-img " alt="imagem prancha">
                            </div>
                            <div class="card mr-3 border-primary  " id="PranchaDois">
                                <img id="imagemPranchaDois"src="imagens/img-desapego/prancha_3.jpg" class="card-img " alt="imagem prancha">
                            </div>
                            <div class="d-flex" id="PranchasMenores">
                                <div class="card  mb-3 mr-3 border-primary   " >  
                                    <img id="imagemPranchaTres" src="imagens/img-desapego/prancha_1.jpg" class="card-img " alt="imagem prancha">
                                </div>
                                <div class="card border-primary mb-3 " >
                                    <img id="imagemPranchaQuatro" src="imagens/img-desapego/prancha_2.jpg" class="card-img " alt="imagem prancha">
                                </div>
                                <div class="card border-primary   mr-3 ">   
                                    <img id="imagemPranchaCinco" src="imagens/img-desapego/prancha_5.jpg"class="card-img " alt="imagem prancha">
                                </div>
                                <div class="card border-primary   ">   
                                    <img id="imagemPranchaSeis" src="imagens/img-desapego/prancha_6.jpg" class="card-img " alt="imagem prancha">
                                </div>    
                                                      
                            </div>
                        </div>


                    </div>
                </div>
                    <div class="col-12 bg-light d-flex ofertasVestuario" >
                        <div class="infOfertas mb-5 mt-5 ml-3">
                            <h2>VESTUÁRIO</h2>
                            <p class="font-weight-light">Wetsuits e roupas em geral!</p>
                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                        </div>
                        <div class="container"> 

                            <div class="row justify-content-center align-items-center" id="imagemVestuario">
                                <div class="card border-primary ml-2 mr-3" id="VestuarioUm" >
                                    <img id="imagemVestuarioUm" src="imagens/img-desapego/roupas5.jpg" class="card-img " alt="imagem prancha">
                                </div>
                                <div class="d-flex mr-3" id="VestuarioMenores1">
                                    <div class="card  mb-3  border-primary cardVestuarioMenor " >  
                                            <img id="imagemVestuarioTres" src="imagens/img-desapego/roupas2.jpg" class="card-img " alt="imagem prancha">
                                    </div>
                                    <div class="card border-primary   cardVestuarioMenor">   
                                        <img id="imagemVestuarioSeis" src="imagens/img-desapego/roupaMenor1.jpg" class="card-img " alt="imagem prancha">
                                    </div> 
                                    
                                </div>
                                <div class="card mr-3 border-primary  " id="VestuarioDois">
                                    <img id="imagemVestuarioDois"src="imagens/img-desapego/roupas7.png" class="card-img " alt="imagem prancha">
                                </div>
                                <div class="d-flex" id="VestuarioMenores2">
                               
                                    <div class="card border-primary   mb-3 cardVestuarioMenor">   
                                        <img id="imagemVestuarioCinco" src="imagens/img-desapego/roupas4.jpg"class="card-img " alt="imagem prancha">
                                    </div>
                                    <div class="card border-primary   cardVestuarioMenor" >
                                        <img id="imagemVestuarioQuatro" src="imagens/img-desapego/roupas3.jpg" class="card-img " alt="imagem prancha">
                                    </div>
                                      
                                                        
                                </div>
                        </div>
                    </div>
                        



                <!-- <div class="col-12 d-flex containerOfertas" >
                    <div class="infOfertas mb-3">
                        <h2>Acessórios</h2>
                        <p>usadas em 3 fases - Pouco uso / Bom uso / Muito uso</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
     
                    <div id="imagensOfertasDesapego">

                        <div class="card imagensMenores">
                            
                            <div class="d-flex imagensMenoresUm">  
                                <img id="imagem-tres"src="imagens/img-desapego/acessorios6pequeno.jpg" class="card-img " alt="imagem prancha">
                                <img id="imagem-quatro"src="imagens/img-desapego/acessorios3.jpg" class="card-img " alt="imagem prancha">
                            </div>
                            <div class="d-flex imagensMenoresDois">    
                                <img id="imagem-cinco"src="imagens/img-desapego/acessorios5.jpg"class="card-img " alt="imagem prancha">
                                <img id="imagem-seis" src="imagens/img-desapego/acessorios4.jpg" class="card-img " alt="imagem prancha">
                            </div>
                        </div>
                        <div class="card imagensMaiores" >
                            <img id="imagem-um" src="imagens/img-desapego/acessorios.jpg" class="card-img " alt="imagem prancha">
                            <img id="imagem-dois"src="imagens/img-desapego/acessorios1.jpg" class="card-img " alt="imagem prancha">
                        </div>

                     
                    </div>
                </div>
        </section>
            --> -->
    </main> 

    <?php include_once("footer.php") ?>   
</body>
</html>