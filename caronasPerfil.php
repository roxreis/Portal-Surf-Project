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

        <div class='d-flex'>
            <div class='p-2'>
                <img src='imagens/img-carona/teste_perfil_carona.jpg' alt="" class='img-thumbnail w-25 p-2'>
            </div>
        </div>
        <main class='d-flex'>
            <section id='teste_fundo_perfil_carona' class='w-50'>
                <h1>Caronas R/P</h1>
            </section>
            <div id='altura_do_momento' class='w-50'>
                <h3>Informações do usuario</h3>
            </div>


        </main>
        <?php include_once("padrao/footer.php") ?>
</body>

</html>