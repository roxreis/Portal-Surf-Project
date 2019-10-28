<!-- Emília: página de cadastro do usuário para o primeiro login, em dois níveis: 1) simples/desapego e 2) caronas -->

<!DOCTYPE html>
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

    <main class="mt-5 mb-5">
    
        <div class="cadastro">
        <h2>CADASTRO DE NOVO USUÁRIO</h2>
    </div>

    <div class="campo">
        <form action="#" method="post">
            <label class="checkbox">
                <input type="radio" name="pessoaFisica" value="fisica">Pesoa Física
            </label>

            <label class="checkbox">
                <input type="radio" name="pessoaJuridica" value="juridica">Pessoa Juridica
            </label>
    </div>

    <div class="form-inline" action="/action_page.php">
            <label for="name">Nome</label>
                <input type="text" id="name" name="nome" style="width: 34.5em" value="" required>
    </div>

    <fieldset class="grupo">
    <div class="form-group" action="/action_page.php">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" style="width: 350px" value="" re>
    </div>

    <div class="form-group" action="/action_page.php">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 350px" value="" required>
    </div>

    </fieldset>

    <fieldset class="grupo">
    <div class="form-group" action="/action_page.php">
            <label for="pwd">Senha</label>
            <input type="password" id="pwd" name="pwd" value="" required>
    </div>

    <div class="form-group" action="/action_page.php">
            <label for="pwd">Confirmar Senha</label>
            <input type="password" id="pwd" name="pwd" value="" required>
    </div>
    
    </fieldset>

    <div class="form-group form-check mt-2  ">
            <label>
            <input type="checkbox" name="darCarona" value="darCarona">Deseja dar ou receber Carona?
            </label>
    </div>

        
    <button type="submit" class="botao submit">Enviar</button>
  
</form> 
</main>




</body>
</html>