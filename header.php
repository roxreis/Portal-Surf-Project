<!-- Emilia: página para criação do header padrão para todas as outras páginas do portal. Fazer esta e o footer primeiros, por favor. -->
<!-- Header copiado daa loja virtual da aula, caso ajude ter a base. Pode apagar caso prefira fazer do zero  -->

<?php include_once("variaveis.php") ?>

<header class="navbar">
        <h1 id=logo>
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario != []) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
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
    </header>
    <nav class="nav-bar bg-dark">
        <ul class="nav">
            <?php foreach($categorias as $categoria){?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                </li>
            <?php } ?>
    </nav> 