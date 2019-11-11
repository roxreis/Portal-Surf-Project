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

<form action="#" method="post">
    <main>
    
            <div class="cadastro">
                <h2>CADASTRO DE NOVO USUÁRIO</h2>
            </div>
        
            <div class="form-checkbox">
                    <label class="checkbox cadastroCheckbox">
                        <input type="radio" name="pessoaFisica" value="fisica">Pesoa Física
                    </label>
        
                    <label class="checkbox cadastroCheckbox">
                        <input type="radio" name="pessoaJuridica" value="juridica">Pessoa Juridica
                    </label>
            </div>
            <div class="container cadastrousuario form-group">
            
                        <div class="form-row">
                            <div class="col-sm-2">
                                <input type="text"  id="username" style="width: 745px" class="form-control-lg;" value="" placeholder="Nome:" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="username" name="nome" style="width: 350px"value=""  class="form-control"  placeholder="Usuário:" required>
                            </div>
                            <div class="col">
                                <input type="email" id="emial" name="email" style="width: 350px;" value=""  class="form-control"  placeholder="Email:"  required>
                            </div>
                        </div>
                        <input type="password" id="pwd1" name="pwd" style="width: 340px" value="" placeholder="Senha:" required>
                        <input type="confirm-password" id="pwd2" name="pwd" style="width: 350px" value="" placeholder="Confirmar senha:" required>

                        <label>
                        <input type="checkbox" name="darCarona" style="width: 550px;" value="darCarona">Deseja dar ou receber Carona?
                        </label>
                        <input type="text" id="cep" name="cep" maxlength="9" style="width: 350px" placeholder="CEP:" value="" required>
                        <input type="email" id="endereco" name="endereco" style="width: 350px" value="" placeholder="Endereço:" required>
                        <input type="text" id="endereco" name="endereco" style="width: 350px" value="" placeholder="Bairro:" required>
                        <input type="url" id="pais" name="pais" style="width: 350px" value="" placeholder="País:" required>
                        <input type="url" id="estado" name="estado" style="width: 350px" value="" placeholder="Estado:" required>
                        <input type="url" id="cidade" name="cidade" style="width: 350px" value="" placeholder="Cidade:" required>

                    <div class="form-check">
                            <label>
                            <input type="checkbox" name="regras" value="regras">Concordo com as regras
                            </label>
                    </div>

                    <button type="submit" class="botao submit">Dropar</button>
    </div>    
</main>


</form>


</body>
</html>