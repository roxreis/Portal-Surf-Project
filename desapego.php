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
    <?php include_once("padrao/header.php") ?>  
    <main class="container-fluid" style="height: 100%;">
       
        <div class="jumbotron col-12 banner-desap">
            <img src="imagens/img-desapego/prancha.jpg" alt="imagem de pranchas">
        </div>
        <h1 Class="textBanner">Estão Desapegando!</h1>
        <section id="desapego" style="height: 1300px;">
            <div class=  "d-flex flex-wrap"> 
                    <h1 class="texto-pranchas text-center " >PRANCHAS</h1>
                <div id="img-um">
                    <img src="imagens/img-desapego/PranchasnovaPagina.jpg" class="img-fluid img-thumbnail imagem-um" alt="imagem de prancha">
                </div>
                    <h1 class="texto-vestuarios text-center " >VESTUÁRIO</h1>
                <div id="img-dois">
                    <img src="imagens/img-desapego/roupas1.jpg" class="img-fluid img-thumbnail imagem-dois" alt="imagem de prancha">
                </div>
                    <h1 class="texto-acessorios text-center font-italic" >ACESSÓRIOS</h1>
                <div class=""id="img-tres">
                    <img src="imagens/img-desapego/acessorios5.jpg" class="img-fluid img-thumbnail imagem-tres" alt="imagem de prancha">
                </div>
            </div>
        </section>

    </main> 

    <?php include_once("padrao/footer.php") ?>   
</body>
</html>