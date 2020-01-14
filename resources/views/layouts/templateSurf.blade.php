<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/da4fc1a0ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('titulo')</title>
</head>
<body>
<header class="cabecario">
      
      <div id=upHeader>   
        <a href="/"><img src="../imagens/Logo_degrade.png" id="logo" alt=""></a>
        <div style="margin-left:356px;">
            <a href="/register" type="button" class="btn btn-primary" id="botaoHeader1">Cadastro</a>
            <a href="/login" class="btn btn-success"id="botaoHeader2">Login</a>
        </div>
      </div>
    <div class="headerNavbar">
      <nav class="navbar navbar-expand-lg " role="banner">
           <ul class="nav w-100 justify-content-between align-items-center" style="margin-left:65px;" >
                      <li class="nav-item">
                          <a class="nav-link" href="previsao.php">Previsão</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="caronas.php">Carona</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/desapego">Desapego</a>
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
                              <a class="dropdown-item" target=_blank href="https://www.isasurf.org/">ISA</a>
                              <a class="dropdown-item" target=_blank href="https://www.worldsurfleague.com/">World Surf League</a>
                              <a class="dropdown-item" target=_blank href="http://wsllatinamerica.com/">WSL Latin America</a>
                              <a class="dropdown-item" target=_blank href="http://www.abrasp.com/">ABRASP</a>
                              <a class="dropdown-item" target=_blank href="https://magicseaweed.com/">Magic Sea Weed</a>
                          </div>
                      </li>
            </ul>            
                  <div class="gaveta-icones">

                    <i class="fab icone fa-facebook-f" href="#"></i>
                    <i class="fab icone fa-instagram" href="#"></i> 
                    <i class="fab icone fa-twitter" href="#"></i>                 
                  
                  </div>
                      
        </nav>

    </div> 

  
   <!-- instruçoes de javascript para  funcionar o dropdown -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</header>

 

<main>
    <!-- conteudo do site -->
    @yield('conteudo');

</main>


<footer class="shadow p-3 rounded footer">
    <p>© 2019 All rights reserved - contato@portalsurf.com.br</p>
</footer>  


    
</body>

</html>