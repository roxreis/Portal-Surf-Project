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
    <main class="container">
      
        <section id="desapego">
            <div class="d-flex flex-wrap " id="imagens-desapego"> 
            
                <div id="img-um">
                    <a href="./desapegoOferta.php"><h1 class="texto-pranchas " >PRANCHAS</h1></a> 
                     <h2 id="dropnow-um">Drop Now</h2>
                     <img src="imagens/img-desapego/PranchasnovaPagina.jpg" class="rounded imagem-um" alt="imagem de prancha">
                </div>
                    
                <div id="img-dois">
                    <a href=”endereço”><h1 class="texto-vestuarios">VESTUÁRIO</h1></a>
                    <h2 id="dropnow-dois">Drop Now</h2>
                    <img src="imagens/img-desapego/roupas1.jpg" class="rounded imagem-dois" alt="imagem de prancha">
                </div>
                    
                <div id="img-tres">
                    <a href=”endereço”><h1 class="texto-acessorios" >ACESSÓRIOS</h1>
                    <h2 id="dropnow-tres">Drop Now</h2></a>
                    <img src="imagens/img-desapego/acessorios5.jpg" class="rounded imagem-tres" alt="imagem de prancha">
                </div>
            </div>
        </section>

    </main> 

    <?php include_once("padrao/footer.php") ?>   
</body>
</html>