@extends('layouts.templateSurf')

@section('titulo')
Desapego - Cadastro de Oferta
@endsection

@section('conteudo')


<section class="desapegoCadastro container">



    <!-- formulario de cadastro de oferta -->
    <form action="{{route('ofertaDesapego.store')}}" method="POST" class="shadow-lg p-4 formDesapego"
        enctype="multipart/form-data" name="desapegoFormJavascript">
        @CSRF

        @if(session('erro'))
        <div class="alert alert-danger">
            {{session('erro')}}
        </div>
        @endif


        <h1 class="mt-2 text-center" id="ofertaCadastroTopo">Cadastro de Oferta</h1>
        <br>

        <div class="col-12">
            <br>
            <p><b>Dados da oferta</b></p>
            <!-- 
                <label for="seg">Segmento do Produto:</label>
                <select class="form-control  labelFormDesapego" id="seg" name="segment">
                    <option>Selecione uma opção</option>
                    <option>Pranchas</option>
                    <option>Acessórios</option>
                </select>
                <br>

                <label for="tipo">Tipo de Equipamento:</label>
                <select class="form-control labelFormDesapego" id="tipo" name="typeEquipament">
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
                <select class="form-control labelFormDesapego" id="seg" name="stateProduct">
                    <option>Selecione uma opção</option>
                    <option>Novo</option>
                    <option>Usado</option>
                </select>

                
                    <div class="form-group mt-3">
                        <label for="text">Título da oferta:</label>
                        <input type="text" class="form-control" id="ofertaTitulo" name="titleProduct">
                    </div> -->
            <div class="form-group mt-3">
                <label for="text">Descrição do produto:</label>
                <input type="text" class="form-control" id="ofertaDescr" name="descriptionProduct"
                    placeholder="Ex. Prancha com pouco uso" required>
            </div>
            <div class="form-group mt-3">
                <label for="text">Preço do produto:</label>
                <input type="number" class="form-control" name="priceProduct" placeholder="Não precisa de virgula" required>
            </div>
            <br>

            <p><b>Local de retirada do produto</b></p>
            <div class="form-inline mt-3">
                <div style="margin-right:24px;">
                    <label for="text" class="mr-3">Estado:</label>
                    <input type="text" class="form-control" id="ofertaEstado" name="withdrawalState"
                        placeholder="Ex. SP" required>
                </div>
                <div style="margin-right:25px;">
                    <label for="text" class="ml-3 mr-3">Cidade:</label>
                    <input type="text" class="form-control" id="ofertaCidade" name="withdrawalCity"
                        placeholder="Ex. São Vicente" required>
                </div>
                <div class=>
                    <label for="text" class="ml-3 mr-3">Bairro/ Região:</label>
                    <input type="text" class="form-control" id="ofertaBairro" name="withdrawalNeighborhood"
                        placeholder="Ex. Parque City" required>
                </div>
                <div class=>
                    <label for="text" class="ml-3 mr-3">Telefone:</label>
                    <input type="text" class="form-control" id="ofertaBairro" name="phone"
                        placeholder="Colocar DDD na frente" required>
                </div>
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
                        <input type="file" class="form-control" name="image" placeholder="Imagem do Produto" />
                    </div>
                    <br><br>

                    <!-- botoes -->
                    <input type="submit" value="Cadastrar Oferta" class="btn encontreBotao">
                    <a href="/desapego" class="btn btn-danger">Cancelar</a>

                </form>
            </div>
            </div>
            <br><br>

            <!-- botoes -->
            <input type="submit" value="Cadastrar Oferta" class="btn encontreBotao" onclick="return validar_desapegoFormJavascript()">
            <a href="/desapego" class="btn btn-danger">Cancelar</a>

    </form>
    </div>
    </div>
</section>

<!-- botao topo -->
<div class="container text-center mt-5 mb-5">
    <a href="#ofertaCadastroTopo" class="btn encontreBotao">Topo</a>
</div>


<!-- validacao javascript do formulario -->
<script type="text/javascript">
    function validar_desapegoFormJavascript() {
        var descriptionProduct = desapegoFormJavascript.descriptionProduct.value;
        var priceProduct = desapegoFormJavascript.priceProduct.value;
        var withdrawalState = desapegoFormJavascript.withdrawalState.value;
        var withdrawalCity = desapegoFormJavascript.withdrawalCity.value;
        var withdrawalNeighborhood = desapegoFormJavascript.withdrawalNeighborhood.value;
        var phone = desapegoFormJavascript.phone.value;

        if (descriptionProduct == "") {
            alert("Favor informar uma descrição breve do produto.");
            desapegoFormJavascript.descriptionProduct.focus();
            return false;
        }
        if (priceProduct == "") {
            alert("Favor informar o preço do produto.");
            desapegoFormJavascript.priceProduct.focus();
            return false;
        }
        if (withdrawalState == "") {
            alert("Favor informar o estado onde está o produto.");
            desapegoFormJavascript.withdrawalState.focus();
            return false;
        }
        if (withdrawalCity == "") {
            alert("Favor informar a cidade onde está o produto.");
            desapegoFormJavascript.withdrawalCity.focus();
            return false;
        }
        if (withdrawalNeighborhood == "") {
            alert("Favor informar a região ou bairro onde está o produto.");
            desapegoFormJavascript.withdrawalNeighborhood.focus();
            return false;
        }
        if (phone == "" || phone.length < 10) {
            alert("Favor informar um número de telefone válido.");
            desapegoFormJavascript.phone.focus();
            return false;
        }
    }

</script>


@endsection
