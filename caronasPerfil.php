<!-- Gabriel: página de perfil do usuário das caronas, onde poderemos ver a foto e dados do usuário que está oferecendo ou pedindo carona. Na navegação, na página de carona poderemos ter uma carona no histórico onde tenha além dos dados o link para um perfil nesta página. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Carona</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>
    <main class="mt-5 mb-5">

        <!-- perfil do usuario -->
        <section class="container">
            <h1 class="mt-3 mb-5 text-center">PERFIL DO VINICIUS OLIVEIRA</h1>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="./imagens/img-carona/carona_usuario.jpg" class="card-img" alt="foto usuario">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">VINICIUS OLIVEIRA</h5>
                            <p class="card-text">Local: São Paulo/ SP
                                <br>No carro: Motorista<br>Carro placa: DEV 1998 - São Paulo/ SP<br>Classificação: 4,2
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- depoimentos sobre o usuario -->
        <section class="container mt-5">
            <h3>DEPOIMENTOS</h3>
            <div class="form-group">
                <label for="comment" class="font-weight-bold">Sergio Reis, 28/10/2019:</label>
                <textarea class="form-control border border-dark" rows="2" id="comment">De novo, o motorista me ajudou e levou a minha prancha para a minha casa me deixando antes na escola.</textarea>
                <a href="#"><button class = 'btn btn-success buttonCaronasAvaliar'>Avaliar</button></a>
            </div>
            <div class="form-group">
                <label for="comment" class="font-weight-bold">Sergio Reis, 24/10/2019:</label>
                <textarea class="form-control border border-dark" rows="2" id="comment">O motorista chegou na hora, foi super simpático, me ajudou com o equipamento e ainda me ajudou parando na casa da minha namorada antes de pegar estrada.</textarea>
                <a href="#"><button class = 'btn btn-success buttonCaronasAvaliar'>Avaliar</button></a>
            </div>
            <div class="form-group">
                <label for="comment" class="font-weight-bold">Fernando Sabino, 11/10/2019:</label>
                <textarea class="form-control border border-dark" rows="2" id="comment">Motorista tranquilo, papo bom, e na hora de rachar o combustivel ele ainda tinha maquininha para passar o cartão! É o cara!</textarea>
                <a href="#"><button class = 'btn btn-success buttonCaronasAvaliar'>Avaliar</button></a>
            </div>
            <div class="form-group">
                <label for="comment" class="font-weight-bold">Gisele Bundchen, 06/09/2019:</label>
                <textarea class="form-control border border-dark" rows="2" id="comment">A melhor viagem da minha vida!</textarea>
                <a href="#"><button class = 'btn btn-success buttonCaronasAvaliar'>Avaliar</button></a>
            </div>
            <a href = 'caronas.php'><button class = 'btn btn-success buttonCaronasVoltar'>Voltar</button></a>
        </section>
           
    </main>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
            </ul>
        </nav>
    </div>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>