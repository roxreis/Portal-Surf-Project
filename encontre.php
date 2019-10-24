<!-- página Elke -->
<!-- formulários montados apenas para apresentação, sem variáveis, a serem usadas conforme o back-end a ser programado para busca no Google Maps -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Encontre</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>

    <main>

        <!-- original Elke - inicio -->
        <!-- <section class="container d-flex justify-contents-center text-info">
            <div class="col-6">
                <h1 class="p-3 mt-5 ">Encontre tudo o que você precisa para aproveitar a água!</h1> -->

        <!-- linha do label: modelo de form (form control: select) puxado do bootstrap W3C: https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_select&stacked=h -->

        <!--  <div class="container">
        <form action="/action_page.php">
                    <div class="form-group col-6 mt-3">
                        <label>Digite o lugar:</label>
                        <input type="text" name="place">
        <label for="sel1">Escolha a cidade:</label>
                <select class="form-control" id="sel1" name="cidade">
                    <option></option>
                    <option>Ubatuba</option>
                    <option>Cidade 02</option>
                    <option>Cidade 03</option>
                    <option>Cidade 04</option>
                </select>
                <br>
                        <label for="sel1">Escolha o serviço (selecione um):</label>
                            <select class="form-control" id="sel1" name="servico">
                                <option></option>
                                <option>Escolas de surf</option>
                                <option>Shaper</option>
                                <option>Surfwear</option>
                                <option>Pranchas</option>
                                <option>Pousadas</option>  
                                <option>Restaurantes</option>
                            </select>
                        <br>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary">Encontre</button>
            </div>
        </section> -->
        <!-- original Elke - fim -->
        <div id="encontreBanner"></div>
        <section class="container text-info">
            <h2 class="mt-5 text-center">Encontre tudo o que você precisa para aproveitar a água:</h2>
            <div class="row">
                <form action="/action_page.php" class="form-inline col-lg-11">
                    <div class="col-lg-8 mt-5">
                            <input class="form-control w-100" type="search" placeholder="Onde?"
                                aria-label="Search">
                    </div>
                    <div class="mt-5 col-lg-3">
                        <select class="form-control w-100" name="encontre">
                            <option disabled selected>O que?</option>
                            <option value=”equipamentos”>Equipamentos</option>
                            <option value=”manutenção”>Manutenção</option>
                            <option value=”surfshop”>Surf Shop</option>
                            <option value=”acomodacao”>Acomodação</option>
                            <option value=”carona”>Carona</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mt-5">
                        <button type="submit" class="btn btn-primary">Encontre</button>
                    </div>
                </form>
            </div>
            <div class="container mt-5 p-0">
                <img src="imagens/img-encontre/mapa.png" class="img-fluid" alt="mapa">
            </div>
            </div>
        </section>
        <div class="container mt-5 mb-5 text-info">
            <h2>Itens a venda nesta área:</h2>
            <div class="row justify-content-between mt-5">
                <img class="encontredesapego" src="imagens/img-desapego/acessorios2.jpg" class="" alt="desapego">
                <img class="encontredesapego" src="imagens/img-desapego/oculos_1.png" class="" alt="desapego">
                <img class="encontredesapego" src="imagens/img-desapego/prancha_2.jpg" class="" alt="desapego">
                <img class="encontredesapego" src="imagens/img-encontre/venda1.png" class="" alt="desapego">
            </div>
        </div>

    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>