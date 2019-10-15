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
       
        <div class="text-center">
            <h1>Estão Desapegando!</h1>
        </div>
        <section class="cardsDesap row justify-content-between align-center p-3">
            <!-- cards para seção desapego  -->
                <div class="card" style="width: 18rem;">
                <img src="css/img-desapego/prancha.jpg" class="card-img-top" alt="imagem de prancha">
                    <div class="card-body">
                        <h5 class="card-title text-center">PRANCHAS</h5>
                        <p class="card-text">Pranchas usadas em 3 fases - Pouco uso / Bom uso / Muito uso</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="card rounded" style="width: 18rem;">
                <img src="css/img-desapego/roupas.jpg" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-center">ROUPAS</h5>
                        <p class="card-text">Roupas em geral para pratica do Surf</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img src="css/img-desapego/acessorios.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ACESSÓRIOS EM GERAL</h5>
                        <p class="card-text">Parafinas, capas e mais</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            </section>
            <div class="text-center">
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

    
</body>
</html>