<!-- página de acesso do usuário a dados pessoais e funções dentro do sistema: histórico de ofertas no desapego e upload de fotos na previsão -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf</title>
</head>

<body>

    <?php include_once("padrao/header.php") ?>

    <main class="mb-5">

        <form action="/action_page.php">

                <!-- opcoes da pagina -->
                <div class="container mt-5 text-center" id="usuarioTopo">
                    <a href="#dadosPessoais" class="btn encontreBotao">Dados Pessoais</a>
                    <a href="#dadosCarona" class="btn encontreBotao">Dados Carona</a>
                    <a href="#uploadFotos" class="btn encontreBotao">Upload de fotos</a>
                    <a href="./desapegoOfertasUsuarioOpcao.php"><button type="button"
                            class="btn encontreBotao">Histórico de ofertas</button></a>
                </div>

            <!-- dados pessoais -->
            <section class="container mt-5 shadow-lg p-3">
                <div class="text-center" id="dadosPessoais">
                    <h4>SEUS DADOS PESSOAIS</h4>
                    <br>
                </div>

                <div class="text-center">
                    <div class="form-check-inline">
                        <label class="form-check-label mt-3">Você é:
                            <input type="checkbox" class="form-check-input" value="pf">Pessoa física
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="pj">Pessoa jurídica
                        </label>
                        <br><br>
                    </div>
                </div>

                <div class="form-group mt-3 font-weight-bold">
                    <label for="text">Nome completo:</label>
                    <input type="text" class="form-control" id="nomeUsuario">
                </div>
                <div class="form-inline">
                    <label for="text" class="mr-2">Login:</label>
                    <input type="text" class="form-control" id="login">
                    <label for="text" class="ml-3 mr-2">Senha:</label>
                    <input type="text" class="form-control" id="senha">
                    <label for="text" class="ml-3 mr-2">Confirmar senha:</label>
                    <input type="text" class="form-control" id="senha">
                </div>

                <div class="form-inline mt-3">
                    <label for="text" class="mr-4">E-mail:</label>
                    <input type="text" class="form-control" id="email">
                    <label for="text" class="ml-3 mr-4">Confirmar e-mail:</label>
                    <input type="text" class="form-control" id="email">
                </div>

                <div class="form-inline mt-3">
                    <label for="text" class="mr-4">Telefone 01:</label>
                    <input type="text" class="form-control" id="telefone01">
                    <label for="text" class="ml-3 mr-4">Telefone 02:</label>
                    <input type="text" class="form-control" id="telefone02">
                </div>

                <div class="form-check-inline">
                    <label class="form-check-label mt-3">Utiliza Whatsapp?
                        <input type="checkbox" class="form-check-input" value="whatsapp01">Sim, pelo telefone 01
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="whatsapp02">Sim, pelo telefone 02
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="whatsappNao">Não utilizo.
                    </label>
                </div>
            </section>


            <!-- Dados carona -->
            <section class="container mt-5 shadow-lg p-3">
                <div class="text-center" id="dadosCarona">
                    <h4>SEUS DADOS DE CARONA</h4>
                    <br>
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

                <!-- Equipamento -->
                <div class="form-group mt-5 font-weight-bold">
                    <label for="text">Equipamento:</label>
                    <input type="text" class="form-control" id="equipamento">
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
                <div class="container mt-5">
                    <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                    <button type="submit" class="btn encontreBotao">Cancelar</button>
                </div>
            </section>
        </form>

        <!-- Upload de fotos -->
        <section class="container mt-5 shadow-lg p-3">
            <div class="text-center" id="uploadFotos">
                <h4>UPLOAD DE FOTOS</h4>
                <br>
                <form method="post" action="" enctype="multipart/form-data">
                    <label>Carregue sua foto para a galera:</label>
                    <input type="file" name="fotoSurf" />
                    <br><br>
                    <input type="submit" class="btn encontreBotao" value="Dropar" />
                </form>
            </div>
        </section>

        <!-- botao topo -->
        <div class="container text-center mt-5">
        <a href="#usuarioTopo" class="btn encontreBotao">Topo</a>
        </div>
    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>