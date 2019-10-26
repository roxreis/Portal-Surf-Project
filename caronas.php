<!-- Gabriel: página principal das caronas, dividida em duas partes, sendo na primeira o cadastro de pedido/oferta de carona, e a segunda um histórico das caronas ocorridas (tipo "Minhas caronas"). Imaginei um aside com publicidade. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Carona</title>
</head>
<body>
    <?php include_once("padrao/header.php") ?>  
    <main class="container mt-5 mb-5">
    
    
        <div>
            <img src="imagens/img-carona/carona_banner.png" class = 'img-fluid' alt="Carona Principal">
            <div class = 'carousel-caption'>
                <div class = 'mb-5'>
                    <h1 class = 'display-3'>Encontre sua carona</h1>
                    <p class = ''>Pesquise centenas de locais de todo o mundo e encontre o local perfeito para sua carona</p>
                </div>
                <div class = 'mt-5'>
                    <button type="submit" id = 'button_caronas' class = ' btn btn-primary border border-white w-25 rounded-0'> Ver mais --> </button>
                </div>
            </div>
        </div>

    
    
    </main> 
    <?php include_once("padrao/footer.php") ?>   
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>