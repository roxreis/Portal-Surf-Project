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
    <main class="mb-5">

        <div class="caronaBanner">
            <h1 class="mx-auto caronaTextoBanner">Encontre uma carona</h1>
        </div>
        <div class="text-center mt-5">
            <h2>VOCÊ QUER:</h2>
        </div>


        <div class="container">
            <form action="/action_page.php">

                <!-- Opcao da carona -->
                <div class="mt-5 mb-5 text-center font-weight-bold">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="motorista" value="motorista">
                        <label class="form-check-label" for="motorista">DAR UMA CARONA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="passageiro" value="passageiro">
                        <label class="form-check-label" for="passageiro">ENCONTRAR UMA CARONA</label>
                    </div>
                </div>

                <!-- Dados da partida -->
                <div class="form-group mt-3 font-weight-bold">
                    <label for="text">Endereço de Partida:</label>
                    <input type="text" class="form-control" id="partida">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text" class="mr-2">Estado:</label>
                    <input type="text" class="form-control" id="estadoP">
                    <label for="text" class="ml-3 mr-2">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeP">
                    <label for="text" class="ml-3 mr-2">CEP:</label>
                    <input type="text" class="form-control" id="cepP">
                </div>
                <div class="form-group form-check mt-2  ">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de partida cadastrado
                    </label>
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="date" class="mr-2">Data:</label>
                    <input type="date" class="form-control" id="dataP">
                    <label for="text" class="ml-3 mr-2">Horário:</label>
                    <input type="text" class="form-control" id="horarioP">
                </div>

                <!-- Dados do destino -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Endereço de Destino:</label>
                    <input type="text" class="form-control" id="destino">
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="text" class="mr-2">Estado:</label>
                    <input type="text" class="form-control" id="estadoD">
                    <label for="text" class="ml-3 mr-2">Cidade:</label>
                    <input type="text" class="form-control" id="cidadeD">
                    <label for="text" class="ml-3 mr-2">CEP:</label>
                    <input type="text" class="form-control" id="cepD">
                </div>
                <div class="form-group form-check mt-2">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Repetir o endereço de destino cadastrado
                    </label>
                </div>
                <div class="form-inline" action="/action_page.php">
                    <label for="date" class="mr-2">Data:</label>
                    <input type="date" class="form-control" id="dataD">
                    <label for="text" class="ml-3 mr-2">Horário:</label>
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

                <!-- botao  -->
                <div class="mt-5">
                    <button type="submit" class="btn encontreBotao">Dropar</button>
                </div>
            </form>
        </div>

        <!-- parte de hisorico de caronas -->
        <div class="caronaBanner mt-5">
            <h1 class="mx-auto caronaTextoBanner">Suas caronas</h1>
        </div>

        <section class="container">
        <div class="card-deck justify-content-center">
            <div class="card mt-5 cardBlog shadow-lg p-4 bg-white col-5">
                <div class="card-body">
                    <p>Data: 24/10/2019</p>
                    <p>Partida: Rua Pedra Bela, 37, São Paulo, SP</p>
                    <p>Destino: Rua das Flores, 5237, Ubatuba, SP</p>
                    <p>Carona: Vinicius Oliveira</p>
                    <p>Depoimento: O motorista chegou na hora, foi super simpático, me ajudou com o equipamento e ainda
                        me ajudou parando na casa da minha namorada antes de pegar estrada.</p>
                    <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Perfil</button><a>
                    <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Avaliar</button><a>
                </div>
            </div>
            <div class="card mt-5 cardBlog shadow-lg p-4 bg-white col-5">
                <div class="card-body">
                    <p>Data: 28/10/2019</p>
                    <p>Partida: Rua das Flores, 5237, Ubatuba, SP</p>
                    <p>Destino: Av. Dr.Cardoso de Melo, 90, São Paulo, SP</p>
                    <p>Carona: Vinicius Oliveira</p>
                    <p>Depoimento: De novo, o motorista me ajudou e levou a minha prancha para a minha casa me deixando
                        antes na escola.</p>
                <div class="d-flex align-itens-center justify-content-end">        
                    <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Perfil</button><a>
                    <a href="./caronasPerfil.php"><button type="button" class="btn encontreBotao">Avaliar</button><a>
                </div>
                </div>
            </div>
            </div>
        </section>

    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>