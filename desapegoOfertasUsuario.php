<!-- Caio: página de histórico das oferta cadastradas pelo usuário logado, acessada por link na página de desapego principal, caso existam ofertas dele (do Rodrigo). -->

<?php

$nomeSistema ="Portal do Surf";
$usuario = ["nome"=>"Stephania"];
$produtos= [
      ["nome"=>"Acessório para prancha","preco"=>"R$"." ". 90.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/acessorios3.jpg"],
      ["nome"=>"kit acessório para camera","preco"=>"R$"." ". 150.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/acessorios1.jpg"],
      ["nome"=>"Capa para prancha","preco"=>"R$"." ". 100.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/acessorios2.jpg"],
      ["nome"=>"Prancha Power Light","preco"=>"R$"." ". 700.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/prancha_6.jpg"],
      ["nome"=>"Prancha Mormaii","preco"=>"R$"." ". 650.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/prancha_4.jpeg"],
      ["nome"=>"Óculos Polarizado","preco"=>"R$"." ". 350.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/oculos_4.jpg"], 
      ["nome"=>"Wetsuit Long John","preco"=>"R$"." ". 990.00,"garantia"=>"2 meses", "img"=>"imagens/img-desapego/roupas2.jpg"], 
];
?>


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
    
    
        <main class= "container">

        <div class="jumbotron col-12" id= "bannerDesap"></div>
        <h1 Class="textBanner">Histórico de oferta!</h1>
        <section class="Desapego">
                
            <section class="container mt-4">
                <div class="row justify-content-around">
                    <?php if(isset($produtos) && $produtos != []){?>
                    <?php foreach($produtos as $produto){ ?>
                        <div class="col-lg-3 card text-center">
                            <div>
                                <h2><?php echo $produto["nome"];?> </h2>
                                <img src= "<?php echo $produto['img']; ?>" class="card-img-top" alt= "imagens dos produtos">
                                <p class="card-text font-weight-bold" ><?php echo $produto["preco"];?></p>
                                <a href="desapegoCadastroOferta.php?nomeProduto= <?php echo $produto['nome']; ?>"class="btn btn-primary">Editar</a>
                                <a href="?nomeProduto= <?php echo $produto['nome']; ?>"class="btn btn-primary">Excluir</a>
                                <a href="?nomeProduto= <?php echo $produto['nome']; ?>"class="btn btn-primary">Desativar</a>  
                            </div>
                      </div>
                        <?php } ?>
                    <?php } else { ?>
                        <h1>Nao tem produtos nesta seção :(</h1>
                      <?php } ?>
                </div>
            </section> 
          
        </main> 
          


    <?php include_once("padrao/footer.php") ?>   
</body>
</html>