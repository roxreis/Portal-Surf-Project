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
        
            <div class="form-checkbox">
                <form action="#" method="post">
                    <label class="checkbox cadastroCheckbox">
                        <input type="radio" name="pessoaFisica" value="fisica">Pesoa Física
                    </label>
        
                    <label class="checkbox cadastroCheckbox">
                        <input type="radio" name="pessoaJuridica" value="juridica">Pessoa Juridica
                    </label>
                    </form>
            </div>

        <form action="/action_page.php">
            <div class="container cadastrousuario">
                    <div class="form-inline">
                            <label for="text"></label>
                            <input type="text"  id="username" style="width: 745px" value="" placeholder="Nome:" required>
                    </div>

                    <div class="form-group cadastroUsuCard" action="/action_page.php">
                        <label for="text"></label>
                        <input type="text" id="username" name="nome" style="width: 350px" value="" placeholder="Usuário:" required>
                        <label for="email"></label>
                        <input type="email" id="emial" name="email" style="width: 350px" value="" placeholder="Email:" required>
                        <label for="password"></label>
                        <input type="password" id="pwd1" name="pwd" style="width: 340px" value="" placeholder="Senha:" required>
                        <label for="email"></label>
                        <input type="confirm-password" id="pwd2" name="pwd" style="width: 350px" value="" placeholder="Confirmar senha:" required>
                        
                    </div>
                </div>

                <div class="form-group cadastroUsuCard form-check mt-2  ">
                        <label>
                        <input type="checkbox" name="darCarona" style="width: 550px;" value="darCarona">Deseja dar ou receber Carona?
                        </label>
                </div>
            

                <div class="container cadastrousuario">
                        <div class="form-group  cadastroUsuCard" action="/action_page.php">
                            <label for="cep"></label>
                            <input type="text" id="cep" name="cep" maxlength="9" style="width: 350px" placeholder="CEP:" value="" required>
                            <label for="text"></label>
                            <input type="email" id="endereco" name="endereco" style="width: 350px" value="" placeholder="Endereço:" required>
                            <label for="text"></label>
                            <input type="text" id="endereco" name="endereco" style="width: 350px" value="" placeholder="Bairro:" required>
                            <label for="url"></label>
                            <input type="url" id="pais" name="pais" style="width: 350px" value="" placeholder="País:" required>
                            <label for="url"></label>
                            <input type="url" id="estado" name="estado" style="width: 350px" value="" placeholder="Estado:" required>
                            <label for="url"></label>
                            <input type="url" id="cidade" name="cidade" style="width: 350px" value="" placeholder="Cidade:" required>
                        </div>
                    </div>

                    <div class="form-check">
                            <label>
                            <input type="checkbox" name="regras" value="regras">Concordo com as regras
                            </label>
                    </div>

                    <button type="submit" class="botao submit">Dropar</button>


            
                
        
        </form>
</main>




</body>
</html>