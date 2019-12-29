@extends('layouts.templateSurf')

@section('titulo')
Home
@endsection

@section('conteudo')

<main class="mb-5">

    <form action="/action_page.php">

        <!-- opcoes da pagina -->
        <div class="container mt-5 text-center" id="usuarioTopo">
            <a href="#dadosPessoais" class="btn encontreBotao">Dados Pessoais</a>
            <a href="#dadosCarona" class="btn encontreBotao">Dados Carona</a>
            <a href="#uploadFotos" class="btn encontreBotao">Upload de fotos</a>
            <a href="./caronas.php"><button type="button" class="btn encontreBotao">Histórico de caronas</button></a>
            <a href="./desapegoOfertasUsuarioOpcao.php"><button type="button" class="btn encontreBotao">Histórico de
                    ofertas</button></ </div> <!-- dados pessoais -->
                <section class="container mt-5 shadow-lg p-3 cardBlog">
                    <div class="text-center" id="dadosPessoais">
                        <h4>SEUS DADOS PESSOAIS</h4>
                        <br>
                    </div>

                    <div class="text-center">
                        <div class="form-check-inline">
                            <label class="form-check-label mt-3">Você é:
                                <input type="checkbox" class="form-check-input" value="pf">Pessoa física
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="pj">Pessoa jurídica
                            </label>
                            <br><br>
                        </div>
                    </div>

                    <div class="form-group mt-3 font-weight-bold">
                        <label for="text">Nome completo:</label>
                        <input type="text" class="form-control" id="nomeUsuario">
                    </div>
                    <div class="form-inline">
                        <label for="text" class="mr-2">Login:</label>
                        <input type="text" class="form-control" id="login">
                        <label for="text" class="ml-3 mr-2">Senha:</label>
                        <input type="text" class="form-control" id="senha">
                        <label for="text" class="ml-3 mr-2">Confirmar senha:</label>
                        <input type="text" class="form-control" id="senha">
                    </div>

                    <div class="form-inline mt-3">
                        <label for="text" class="mr-3">CPF:</label>
                        <input type="number" class="form-control" id="cpf">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gênero</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Feminino</option>
                            <option>Masculino</option>
                            <option>Prefiro não declarar</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-inline mt-3">
                        <label for="text" class="ml-3 mr-3">Estado:</label>
                        <input type="text" class="form-control" id="estado">
                        <label for="text" class="ml-3 mr-3">Cidade:</label>
                        <input type="text" class="form-control" id="cidade">
                    </div>
                    <br>


                    <div class="form-inline mt-3">
                        <label for="text" class="mr-4">E-mail:</label>
                        <input type="text" class="form-control" id="email">
                        <label for="text" class="ml-3 mr-4">Confirmar e-mail:</label>
                        <input type="text" class="form-control" id="email">
                    </div>

                    <div class="form-inline mt-3">
                        <label for="text" class="mr-4">Telefone 01:</label>
                        <input type="text" class="form-control" id="telefone01">
                        <label for="text" class="ml-3 mr-4">Telefone 02:</label>
                        <input type="text" class="form-control" id="telefone02">
                    </div>

                </section>


                <!-- Dados carona -->
                <section class="container mt-5 shadow-lg p-3 cardBlog">
                    <div class="text-center" id="dadosCarona">
                        <h4>SEUS DADOS DE CARONA</h4>
                        <br>
                    </div>

                    <!-- opcao em participar do programa de caronas -->
                    <div class="font-weight-bold">
                        <div class="form-check-inline">
                            <label class="form-check-label mt-3">Você quer participar do programa de caronas?
                                <input type="checkbox" class="form-check-input" value="caronaSim">Sim
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="caronaNao">Não
                            </label>
                            <br>
                        </div>
                    </div>
                    <br><br>

                    <div class="font-weight-bold">
                        <div class="form-check-inline">
                            <label class="form-check-label mt-3">Você é:
                                <input type="checkbox" class="form-check-input" value="motorista">Motorista
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="passageiro">Passageiro
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="ambos">Ambos
                            </label>
                        </div>
                    </div>
                    <br>

                    <div class="form-inline" action="/action_page.php">
                        <label for="text" class="mr-2">Registro da CNH:</label>
                        <input type="text" class="form-control" id="cnh">
                        <label for="text" class="ml-3 mr-2">Validade:</label>
                        <input type="data" class="form-control" id="validadeCnh">
                        <label for="text" class="ml-3 mr-2">Categoria Habilitação:</label>
                        <input type="text" class="form-control" id="catCNH">
                    </div><br>

                    <!-- Seguranca feminina -->
                    <div class="form-check-inline">
                        <label class="form-check-label mt-3">
                            <input type="checkbox" class="form-check-input" value="termos">Sim, aceito oferecer/ receber
                            caronas de homens.
                        </label>
                    </div><br>

                    <!-- Equipamento -->
                    <div class="form-group mt-5 font-weight-bold">
                        <label for="text">Equipamento:</label>
                        <input type="text" class="form-control" id="equipamento">
                    </div>

                    <!-- Dados do carro -->
                    <div class="form-inline" action="/action_page.php">
                        <label for="text" class="mr-2">Marca do carro:</label>
                        <input type="text" class="form-control" id="carroMarca">
                        <label for="text" class="ml-3 mr-2">Modelo do carro:</label>
                        <input type="text" class="form-control" id="carroModelo">
                        <label for="text" class="ml-3 mr-2">Ano do carro:</label>
                        <input type="text" class="form-control" id="carroAno">
                    </div><br>
                    <div class="form-inline" action="/action_page.php">
                        <label for="text" class="mr-2">Cor do carro:</label>
                        <input type="text" class="form-control" id="carroCor">
                        <label for="text" class="ml-3 mr-2">Placa do carro:</label>
                        <input type="text" class="form-control" id="carroPlaca">
                        <label for="text" class="ml-3 mr-2">Renavam:</label>
                        <input type="text" class="form-control" id="carroRenavam">
                    </div><br>

                    <!-- botao  -->
                    <div class="container mt-5">
                        <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                        <button type="submit" class="btn encontreBotao">Cancelar</button>
                    </div>
                </section>
    </form>

    <!-- Upload de fotos -->
    <section class="container mt-5 shadow-lg p-3 cardBlog">
        <div class="text-center" id="uploadFotos">
            <h4>UPLOAD DE FOTOS</h4>
            <br>
            <form method="post" action="" enctype="multipart/form-data">
                <label>Carregue sua foto para a galera:</label>
                <input type="file" name="fotoSurf" />
                <br><br>
                <input type="submit" class="btn encontreBotao" value="Dropar" />
            </form>
        </div>
    </section>

    <!-- botao topo -->
    <div class="container text-center mt-5">
        <a href="#usuarioTopo" class="btn encontreBotao">Topo</a>
    </div>
</main>

@endsection
