<!-- página Elke -->
<!-- formulários montados apenas para apresentação, sem variáveis, a serem usadas conforme o back-end a ser programado para busca no Google Maps -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Portal do Surf - Encontre</title>
</head>
<body>
    <?php include_once("header.php") ?>   

    <main>
        <section class="container d-flex justify-contents-center text-info">
            <div class="col-6">
                <h1 class="p-3 mt-5 ">Encontre tudo o que você precisa para aproveitar a água!</h1>
 <!-- linha do label: modelo de form (form control: select) puxado do bootstrap W3C: https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_select&stacked=h -->
  <!--  <div class="container">  -->
                <form action="/action_page.php">
                    <div class="form-group col-6 mt-3">
                        <label>Digite o lugar:</label>
                        <input type="text" name="place">
                <!-- <label for="sel1">Escolha a cidade:</label>
                <select class="form-control" id="sel1" name="cidade">
                    <option></option>
                    <option>Ubatuba</option>
                    <option>Cidade 02</option>
                    <option>Cidade 03</option>
                    <option>Cidade 04</option>
                </select> -->
                        <br>
                        <label for="sel1">Escolha o serviço (selecione um):</label>
                            <select class="form-control" id="sel1" name="servico">
                                <option></option>
                                <option>Escolas de surf</option>
                                <option>Shaper</option>
                                <option>Surfwear</option>
                                <option>Pranchas</option>
                                <option>Pousadas</option>  
                                <option>Restaurantes</option>
                            </select>
                        <br>
                    </div>
                </form>
                <button type="submit" class="btn btn-primary">Encontre</button>
            </div>
        </section>
        <section>
        
        </section>
    </main>
    <?php include_once("footer.php") ?>   
</body>
</html>