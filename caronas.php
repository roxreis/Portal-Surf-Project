<!-- Gabriel: página principal das caronas, dividida em duas partes, sendo na primeira o cadastro de pedido/oferta de carona, e a segunda um histórico das caronas ocorridas (tipo "Minhas caronas"). Imaginei um aside com publicidade. -->

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

        <div id="caronaBanner">
            <h1 class="mx-auto" id="caronaTextoBanner">Encontre sua carona</h1>
        </div>
        <div class="text-center mt-5">
            <h2>VOCÊ QUER:</h2>
        </div>


        <div class="container">
            <form action="/action_page.php">

                <!-- Dados da partida -->
                <div class="form-group mt-3 font-weight-bold">
                    <label for="text">Endereço de Partida:</label>
                    <input type="text" class="form-control" id="partida">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text">Estado:</label>
                    <input type="text" class="form-control" id="estadoP">
                    <label for="text">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeP">
                    <label for="text">CEP:</label>
                    <input type="text" class="form-control" id="cepP">
                </div>
                <div class="form-group form-check mt-2  ">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de partida cadastrado
                    </label>
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="date">Data:</label>
                    <input type="date" class="form-control" id="dataP">
                    <label for="text">Horário:</label>
                    <input type="text" class="form-control" id="horarioP">
                </div>

                <!-- Dados do destino -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Endereço de Destino:</label>
                    <input type="text" class="form-control" id="destino">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text">Estado:</label>
                    <input type="text" class="form-control" id="estadoD">
                    <label for="text">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeD">
                    <label for="text">CEP:</label>
                    <input type="text" class="form-control" id="cepD">
                </div>
                <div class="form-group form-check mt-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de destino cadastrado
                    </label>
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="date">Data:</label>
                    <input type="date" class="form-control" id="dataD">
                    <label for="text">Horário:</label>
                    <input type="text" class="form-control" id="horarioD">
                </div>

                <!-- Equipamento -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Equipamento:</label>
                    <input type="text" class="form-control" id="equipamento">
                </div>
                <div class="form-group form-check mt-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o equipamento cadastrado
                    </label>
                </div>

                <!-- Combustível -->
                <div class="form-check-inline">
                    <label class="form-check-label mt-3">Divide o combustível?
                        <input type="checkbox" class="form-check-input" value="">Sim
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Não
                    </label>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Dropar</button>
                </div>
            </form>

        </div>



    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>