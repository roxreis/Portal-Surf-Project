@extends('layouts.templateSurf')

@section('titulo')
Cadastro Usuario
@endsection

@section('conteudo')

<main class="mt-5">
    <section class="container mt-5 shadow-lg p-3 cardBlog" id="usuarioTopo">
        <form action="/usuarioCadastro" method="GET" enctype="multipart/form-data" class="mt-3 ml-5">
        @CSRF
            <!-- dados pessoais -->

            <div class="text-center" id="dadosPessoais">
                <h4>SEUS DADOS PESSOAIS</h4>
                <br>
            </div>

            <div class="text-center font-weight-bold">
                <label class="form-check-label mt-3 mr-5" for="person">VOCÊ É:
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="person" value="pf" id="personF">
                        <label class="form-check-label" for="person">PESSOA FÍSICA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="person" value="pj" id="personJ">
                        <label class="form-check-label" for="person">PESSOA JURÍDICA</label>
                    </div>
            </div>
            <br>

            <div class="form-inline mt-3">
                <label for="name" class="col-sm-1">Nome completo:</label>
                <input type="text" class="form-control col-sm-9" id="name" name="name">
            </div><br>

            <div class="form-inline mt-3">
                <label for="email" class="col-sm-1">E-mail:</label>
                <input type="email" class="form-control col-sm-4" id="email" name="email">
                <label for="password" class="col-sm-1">Senha:</label>
                <input type="password" class="form-control col-sm-4" id="password" name="password">
            </div>
            <br>

            <div class="form-inline mt-3">
                <label for="cpf" class="col-sm-1">CPF:</label>
                <input type="text" class="form-control col-sm-4" id="cpf" name="cpf">
                <label for="gender" class="col-sm-1">Gênero:</label>
                <select class="form-control col-sm-4" id="gender" name="gender">
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="neutro">Prefiro não declarar</option>
                </select>
            </div>
            <br>

            <div class="form-inline mt-3">
                <label for="state" class="col-sm-1">Estado:</label>
                <input type="text" class="form-control col-sm-4" id="state" name="state">
                <label for="city" class="col-sm-1">Cidade:</label>
                <input type="text" class="form-control col-sm-4" id="city" name="city">
            </div>
            <br>

            <div class="form-inline mt-3">
                <label for="phone1" class="col-sm-1">Telefone 01:</label>
                <input type="text" class="form-control col-sm-4" id="phone1" name="phone1">
                <label for="phone2" class="col-sm-1">Telefone 02:</label>
                <input type="text" class="form-control col-sm-4" id="phone2" name="phone2">
            </div>
            <br><br>

            <!-- opcao em participar do programa de caronas -->
            <div class="font-weight-bold">
            <label class="form-check-label mt-3" for="programaCarona">Você quer participar do programa de caronas?
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="programaCarona" id="caronaSim" for="programaCarona" value="sim">
                        <label class="form-check-label" for="programaCarona">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="programaCarona" id="caronaNao" for="programaCarona" value="nao">
                        <label class="form-check-label" for="programaCarona">Não</label>
                    </div>
            </div>
            <br><br>

            <!-- aceite de termos e condicoes -->
            <div>
                <div class="form-group">
                    <label class="font-weight-bold">Termos e Condições do Portal do Surf</label>
                    <textarea class="form-control col-sm-11" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! </textarea>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label mt-3" for="terms">
                        <input type="checkbox" class="form-check-input" name="terms" id="terms" value="sim">Aceito os termos e condições.
                    </label>
                </div><br>
                <div class="form-check-inline">
                    <label class="form-check-label mt-3" for="emailNotification">
                        <input type="checkbox" class="form-check-input" value="sim" for="emailNotification" name="emailNotification" id="emailNotification">Aceito receber notificações por e-mail.
                    </label>
                </div><br>

                <!-- botao Salvar e Cancelar -->
                <div class="container mt-5 mb-5">
                    <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                    <button type="reset" class="btn encontreBotao">Cancelar</button>
                </div>
        </form>
    </section>



    <!-- botao topo -->
    <div class="container text-center mt-5">
        <a href="#usuarioTopo" class="btn encontreBotao">Topo</a>
    </div>
</main>

@endsection
