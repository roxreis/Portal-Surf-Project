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
                <div class="col-12 d-flex containerOfertas" >
                    <div class="infOfertas mb-3">
                        <h2>Pranchas</h2>
                        <p>usadas em 3 fases - Pouco uso / Bom uso / Muito uso</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
     
                    <div id="imagensOfertasDesapego">
                        <div class="card imagensMaiores" >
                            <img id="imagem-um" src="imagens/img-desapego/prancha_4.jpeg" class="card-img border border-dark" alt="imagem prancha">
                            <img id="imagem-dois"src="imagens/img-desapego/prancha_3.jpg" class="card-img border border-dark" alt="imagem prancha">
                        </div>

                        <div class="card imagensMenores">
                            <div class="d-flex imagensMenoresUm">  
                                <img id="imagem-tres"src="imagens/img-desapego/prancha_1.jpg" class="card-img border border-dark" alt="imagem prancha">
                                <img id="imagem-quatro"src="imagens/img-desapego/prancha_2.jpg" class="card-img border border-dark" alt="imagem prancha">
                            </div>
                            <div class="d-flex imagensMenoresDois">    
                                <img id="imagem-cinco"src="imagens/img-desapego/prancha_5.jpg"class="card-img border border-dark" alt="imagem prancha">
                                <img id="imagem-seis" src="imagens/img-desapego/prancha_6.jpg" class="card-img border border-dark" alt="imagem prancha">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex containerOfertas" >
                    <div class="infOfertas mb-3">
                        <h2>Roupas</h2>
                        <p>Vários modelos e tamanhos</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
     
                    <div id="imagensOfertasDesapego">
                        <div class="card imagensMaiores" >
                            <img id="imagem-um" src="imagens/img-desapego/roupas3.jpg" class="card-img border border-dark" alt="imagem prancha">
                        </div>
                        <div class="d-flex imagensMenoresDois">    
                            <img id="imagem-cinco"src="imagens/img-desapego/roupas4.jpg"class="card-img border border-dark" alt="imagem prancha">
                            <img id="imagem-seis" src="imagens/img-desapego/roupas5.jpg" class="card-img border border-dark" alt="imagem prancha">
                        </div>
                        <div class="card imagensMaiores" >
                            <img id="imagem-dois"src="imagens/img-desapego/roupas7.png" class="card-img border border-dark" alt="imagem prancha">
                        </div>
                        

                        <div class="card imagensMenores">
                            <div class="d-flex imagensMenoresUm">  
                                <img id="imagem-tres"src="imagens/img-desapego/roupas.jpg" class="card-img border border-dark" alt="imagem prancha">
                                <img id="imagem-quatro"src="imagens/img-desapego/roupas1.jpg" class="card-img border border-dark" alt="imagem prancha">
                            </div>
                          
                        </div>
                    </div>
                </div>
                   
             
                <div class="col-12 d-flex containerOfertas" >
                    <div class="infOfertas mb-3">
                        <h2>Pranchas</h2>
                        <p>usadas em 3 fases - Pouco uso / Bom uso / Muito uso</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
     
                    <div id="imagensOfertasDesapego">
                        <div class="card imagensMenores">
                            <div class="d-flex imagensMenoresUm">  
                                <img id="imagem-tres"src="imagens/img-desapego/acessorios6pequeno.jpg" class="card-img border border-dark" alt="imagem prancha">
                                <img id="imagem-quatro"src="imagens/img-desapego/acessorios3.jpg" class="card-img border border-dark" alt="imagem prancha">
                            </div>
                            <div class="d-flex imagensMenoresDois">    
                                <img id="imagem-cinco"src="imagens/img-desapego/acessorios5.jpg"class="card-img border border-dark" alt="imagem prancha">
                                <img id="imagem-seis" src="imagens/img-desapego/acessorios4.jpg" class="card-img border border-dark" alt="imagem prancha">
                            </div>
                        </div>
                        <div class="card imagensMaiores" >
                            <img id="imagem-um" src="imagens/img-desapego/acessorios.jpg" class="card-img border border-dark" alt="imagem prancha">
                            <img id="imagem-dois"src="imagens/img-desapego/acessorios1.jpg" class="card-img border border-dark" alt="imagem prancha">
                        </div>

                     
                    </div>
                </div>
            </section>
            <div class="text-center ">
                    <h1>Quer Desapegar =)?</h1> 
             </div>
             <section class ="col-12 p-5">
                <form action="" method= "post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class= "form-control" name="nomeProduto" placeholder= "Nome do Produto">
                    </div>   
                    <div class="form-group">
                        <input type="text" class= "form-control" name="descProduto" placeholder= "Descrição do Produto">
                    </div> 
                    <div class="form-group">
                        <input type="file" class= "form-control" name="imgProduto" placeholder= "Imagem do Produto">
                    </div> 
                    <div class="form-group">
                        <input type="number" class= "form-control" name="precoProduto" placeholder= "Preço do Produto">
                    </div> 
                    <button class= "btn btn-success">Cadastrar Produto</button>
                </form>           
             

             </section>
    
    
    </main> 

    <?php include_once("footer.php") ?>   
</body>
</html>