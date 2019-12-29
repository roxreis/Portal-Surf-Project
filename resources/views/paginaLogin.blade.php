@extends('layouts.templateSurf')

@section('titulo')
Home
@endsection

@section('conteudo')

    <!-- aviso de login -->
    <div class="container" >
        <h1 class="text-center mt-5">OPS! VOCÊ PRECISA ESTAR LOGADO</h1>
        <h2 class="text-center">PARA ACESSAR ESTA PÁGINA!</h2>
        <h4 class="container d-flex justify-content-center text-center col-8 mt-5">Faça seu login abaixo, ou se for o seu primeiro acesso, aproveite para se cadastrar e aproveitar tudo o que o Portal do Surf tem para oferecer!</h4>
    </div>
    
    <!-- campo para login -->
    <div class="d-flex justify-content-center mt-5">
        <form class="form-inline" action="/action_page.php">
            <label for="email" class="mr-sm-2">Email/ Login:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email">
            <label for="pwd" class="mr-sm-2">Senha:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="pwd">
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Lembrar de mim
                </label>
            </div>
            <!-- Link para a Home até fazermos o back-end de login com retorno para a página solicitada -->
            <a href="index.php" class="btn encontreBotao mb-2">Dropar</a>
        </form>
    </div>
    
    <!-- botao para cadastro -->
    <div class="d-flex justify-content-center mt-5 mb-5">
        <a href="cadastroUsuario.php" class="btn encontreBotao mb-2">Primeiro acesso</a>
    </div>

@endsection
