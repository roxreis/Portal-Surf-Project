<!-- Emilia: página da Home. -->

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
    <?php include_once("header.php") ?>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./imagens/img-home/beach-832346_1920.jpg" alt="caronas">
                <div class="carousel-caption">
                    <h3>CARONAS</h3>
                    <p class>Faça companhia, divida o combustível, estamos todos juntos nessa onda!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/img-home/sup-1838969_1920.jpg" alt="blog">
                <div class="carousel-caption">
                    <h3>BLOG</h3>
                    <p>Tudo o que você precisa saber para pegar sua onda na paz.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/img-home/surfboard-4051201_1920.jpg" alt="desapego">
                <div class="carousel-caption">
                    <h3>DESAPEGO</h3>
                    <p>Vamos ajudar o planeta e por um dinheiro extra no bolso?</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagens/img-home/wave-1246560_1920.jpg" alt="previsão">
                <div class="carousel-caption">
                    <h3>PREVISÃO</h3>
                    <p>Ondas, ventos, e o que mais você precisa saber antes de entrar no mar.</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <?php include_once("footer.php") ?>
</body>

</html>