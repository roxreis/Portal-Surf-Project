<!-- Emilia: página para criação do header padrão para todas as outras páginas do portal. Fazer esta e o footer primeiros, por favor. -->
<!-- Header copiado da loja virtual da aula, caso ajude ter a base. Pode apagar caso prefira fazer do zero  -->
<!-- Emilia, pecisei limpar algumas coisas do header original da loja, assim como nas variáveis, pois estava dando muito erro para as outras páginas. Ficou só o header com o login e navbar original da loja virtual. -->

<?php include_once("config/variaveis.php") ?>

<header class="navbar">
        <h1 id=logo>
            <?php echo $nomeSistema; ?>
        </h1>
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
    </header>
   