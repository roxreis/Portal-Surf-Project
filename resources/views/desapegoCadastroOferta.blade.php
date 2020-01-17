@extends('layouts.templateSurf')

@section('titulo')
    Desapego - Cadastro de Oferta
@endsection

@section('conteudo')


        <section class="shadow-lg p-4 cardBlog">

            <!-- formulario de cadastro de oferta -->
            <h1 class="mt-2 text-center" id="ofertaCadastroTopo">Cadastro de Oferta</h1>
            <br>

            <div class="col-12">
                <br>
                <p><b>Dados da oferta</b></p>

                <label for="seg">Segmento do Produto:</label>
                <select class="form-control" id="seg" name="ofertaSegmento">
                    <option>Selecione uma opção</option>
                    <option>Pranchas</option>
                    <option>Acessórios</option>
                </select>
                <br>

                <label for="tipo">Tipo de Equipamento:</label>
                <select class="form-control" id="tipo" name="ofertaTipo">
                    <option>Selecione uma opção</option>
                    <option>Surf</option>
                    <option>Surf Infantil</option>
                    <option>Kitesurf</option>
                    <option>Windsurf</option>
                    <option>Stand Up Paddle</option>
                    <option>Body Board</option>
                </select>
                <br>

                <label for="seg">Estado do Produto:</label>
                <select class="form-control" id="seg" name="ofertaEstProduto">
                    <option>Selecione uma opção</option>
                    <option>Novo</option>
                    <option>Usado</option>
                </select>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group mt-3">
                        <label for="text">Título da oferta:</label>
                        <input type="text" class="form-control" id="ofertaTitulo">
                    </div>
                    <div class="form-group mt-3">
                        <label for="text">Descrição do produto:</label>
                        <input type="text" class="form-control" id="ofertaDescr">
                    </div>
                    <div class="form-group mt-3">
                    <label for="text">Preço do produto:</label>
                        <input type="number" class="form-control" name="ofertaPreco" />
                    </div>
                    <br>

                    <p><b>Local de retirada do produto</b></p>
                    <div class="form-inline mt-3">
                        <label for="text" class="mr-3">Estado:</label>
                        <input type="number" class="form-control" id="ofertaEstado">
                        <label for="text" class="ml-3 mr-3">Cidade:</label>
                        <input type="text" class="form-control" id="ofertaCidade">
                        <label for="text" class="ml-3 mr-3">Bairro/ Região:</label>
                        <input type="text" class="form-control" id="ofertaBairro">
                    </div>
                    <br><br>

                    <!-- <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do Produto" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="localEntrega"
                            placeholder="Local de Entrega/Retirada do Produto" />
                    </div> -->

                    <p><b>Fotos do produto</b></p>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do Produto" />
                    </div>
                    <br><br>

                    <!-- botoes -->
                    <a href="desapegoOfertasUsuario.php" class="btn encontreBotao">Cadastrar Oferta</a>
                    <a href="desapego.php" class="btn btn-danger">Cancelar</a>

                </form>
            </div>
            </div>
        </section>

        <!-- botao topo -->
        <div class="container text-center mt-5">
            <a href="#ofertaCadastroTopo" class="btn encontreBotao">Topo</a>
        </div>

   

@endsection