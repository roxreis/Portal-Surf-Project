<!-- Emília: página de cadastro do usuário para o primeiro login, em dois níveis: 1) simples/desapego e 2) caronas -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf</title>
</head>
<body>
    <?php include_once("padrao/header.php") ?>   
   
<div class="form-check">
  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
</div>
<div class="form-check">
  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
</div>

<section class="form">
<form>
<div class="form-group">
    <input type="nome" class="form-control" id="inputName" placeholder="Nome">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="nome de usuário" class="form-control" id="inputNameUser" placeholder="Nome de Usário">
    </div>
    <div class="form-group col-md-6">
      <input type="e-mail" class="form-control" id="inputEmail" placeholder="E-mail">
    </div>
    <div class="form-group col-md-6">
      <input type="senha" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
    <div class="form-group col-md-6">
      <input type="senha" class="form-control" id="inputPassword4" placeholder="Confirmar Senha">
    </div>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Deseja pegar ou dar carona?
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Concordo com as regras
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</section>

  
</body>
</html>