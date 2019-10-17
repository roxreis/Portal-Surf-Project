<!-- header padrão para todas as outras páginas do portal.-->

<?php include_once("config/variaveis.php") ?>

<header>
    <section class="navbar">
    <img src="imagens/Logo_degrade.png" alt="logo portal do surf">
    <form class="form-inline my-2 my-lg-0 justify-contents-center align-items-center">
        <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busca</button>
    </form>
    <nav>
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) {?>
            <li class="nav-item">
                <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sair</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastro</a>
            </li>
            <?php } ?>
        </ul>
    </nav>
            </section>
    <section class="container mt-3">
        <nav class="nav-bar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="previsao.php">Previsão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="caronas.php">Carona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="desapego.php">Desapego</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="encontre.php">Encontre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticias.php">Notícias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Links</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.isasurf.org/">ISA</a>
                        <a class="dropdown-item" href="https://www.worldsurfleague.com/">World Surf League</a>
                        <a class="dropdown-item" href="http://wsllatinamerica.com/">WSL Latin America</a>
                        <a class="dropdown-item" href="http://www.abrasp.com/">ABRASP</a>
                        <a class="dropdown-item" href="https://magicseaweed.com/">Magic Sea Weed</a>
                    </div>
                </li>
        </nav>
    </section>
</header>