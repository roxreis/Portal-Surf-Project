<!-- Caio: página de cadastro de uma nova oferta pelo usuário logado, acessada por link na página de desapego principal (do Rodrigo). -->

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
        <h1 Class="textBanner">Cadastro de Oferta</h1>
        <section class="Desapego">

            <div class="col-12">
            
                <br>
                    <label for="seg"><b>Segmento do Produto</b></label>
                        <select class="form-control" id="seg" name="segmento">
                            <option>Selecione uma opção</option>
                            <option>Acessórios</option>
                            <option>Vestuário</option>
                            <option>Wetsuits</option>
                            <option>Pranchas</option>                                 
                        </select>
                <br>                    

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class ="form-control" name="nomeProduto" placeholder="Nome do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class ="form-control" name="descProduto" placeholder="Descrição do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class ="form-control" name="localEntrega" placeholder="Local de Entrega/Retirada do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="file" class ="form-control" name="imgProduto" placeholder="Imagem do Produto"/>
                    </div>

                    <div class="form-group">
                        <input type="number" class ="form-control" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>

                    <button class= "btn btn-success"><a href="desapegoOfertasUsuario.php"> Cadastrar Oferta </a></button>
                    <button class= "btn btn-danger"><a href="desapego.php"> Cancelar </a></button>
            
                </form>
            </div>  
        </div>
    </main> 

    <?php include_once("padrao/footer.php") ?>   
</body>
</html>