<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once("padrao/header.php") ?>   
    <div class=container>
        <h1>PRAIA DE MARESIAS</h1>
        <nav>
            <ul class="nav justify-content-between">
                <li class="nav-link"><a href="baleia.php">PRAIA ANTERIOR</a></li>
                <li class="nav-link"><a href="previsao.php">VOLTAR</a></li>
                <li class="nav-link"><a href="pauba.php">PROXIMA PRAIA</a></li>
            </ul>
        </nav>
            <div class="d-flex flex-row mr-3">
                <img src="imagens/surfmaresias.png" class="img-fluid" style="width: 400px;" alt="responsive image">
                <div class="container ml-3">
                    <p>A onda de Maresias detém o título de uma das melhores ondas de São Paulo.</p>
                    <ul>
                        <li>Tamanho - 2 a 12 pés</li>
                        <li>Ondulação ideal - Sudeste | Sul</li>
                        <li>Vento ideal - Quadrante Leste | Quadrante Norte</li>
                        <li>Grau de dificuldade - Alta</li>
                        <li>Melhor época - Outono | Primavera</li>
                        <li>Constância - Alta</li>
                        <li>Crowd - Intenso</li>
                    </ul>
                </div>
            </div>
            <div class="container mt-2">
                <h3>Condições atuais:</h3>
                <img src="imagens/prevdia.png" class="img-fluid" alt="condicoes atuais">
            </div>
            <div class="container p-0 mt-2">
                <h2>Encontre nesta área:</h2>
                <select class="form-control font-accent tt-input mx-80" name="encontre">
                    <option disabled selected>Encontre:</option>
                    <option value=”una”>Acomodação</option>
                    <option value=”juquehy”>Surf Shop</option>
                    <option value=”maresias”>Manutenção</option>
                    <option value=”baleia”>CARONA</option>
                </select>
            </div>
            <div class="container mt-3 p-0">
                <img src="imagens/mapa.png" class="img-fluid" alt="condicoes atuais">
            </div>
        </div>
        <div class=container>
            <h2>Itens a venda nesta área:</h2>
            <div class="row justify-content-between">
                <img src="imagens/venda1.png" class="img-fluid" alt="condicoes atuais">
                <img src="imagens/venda1.png" class="img-fluid" alt="condicoes atuais">
                <img src="imagens/venda1.png" class="img-fluid" alt="condicoes atuais">
            </div>
        </div>
        <div class="container mt-2">
            <h3>Previsão dos próximos 7 dias:</h3>
            <img src="imagens/previsurf.png" class="img-fluid" alt="condicoes atuais">
        </div>
        <div class="container mt-2">
            <h3>Pra quem manja:</h3>
            <img src="imagens/manja.png" class="img-fluid" alt="condicoes atuais">
        </div>
        <div class=container>
            <h2>Fotos da galera:</h2>
            <div class=row>
                <img src="imagens/postai.png" class="img-fluid mx-1" alt="condicoes atuais">
                <img src="imagens/postai.png" class="img-fluid mx-1" alt="condicoes atuais">
            </div>
        </div>
</nav>
    <?php include_once("padrao/footer.php") ?>   
</body>
</html>