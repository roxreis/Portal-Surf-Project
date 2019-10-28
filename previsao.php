<!-- Felipe -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Previsão</title>
</head>

<body>
    <?php include_once("padrao/header.php") ?>
    <main class="mb-5">

        <div id="previsaoBanner">
            <h1 class="mx-auto caronaTextoBanner">PREVISÃO</h1>
        </div>
        <div class="container">
                       <h2 class="shadow-sm p-3 mb-4 bg-white rounded text-center mt-5">Selecione a praia e saiba das ondas!</h2>
            <div class="container d-flex justify-content-center mb-0 pb-0">
               <a href="previsao/barradouna.php"> <img src="imagens/img-previsao/tabela1.png" class="mt-0 pt-0"></a>
            </div>
            <div class="container d-flex justify-content-center mb-0 pb-0">
                <img src="imagens/img-previsao/tabela2.png" class="mt-0 pt-0">
            </div>
        </div>


    </main>
    <?php include_once("padrao/footer.php") ?>
</body>

</html>