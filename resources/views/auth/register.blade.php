@section('titulo')
Portal Surf - Cadastro Usuario
@endsection

@extends('layouts.templateSurf')

@section('conteudo')
<section class="container" id="usuarioTopo">
    <div class="d-flex h-75">
        <form action="/register" method="POST" enctype="multipart/form-data" class="shadow-lg formRegister"
            name="registerForm">
            @CSRF

            <!-- dados pessoais -->
            <div style="margin-left: 81px;">
                <div class="text-center" id="dadosPessoais">
                    <h4>SEUS DADOS PESSOAIS</h4>
                    <br>
                </div>

                <!-- <div class="text-center font-weight-bold">
                    <label class="form-check-label mt-3 mr-5" for="person">VOCÊ É:
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="person" value="pf" id="personF">
                            <label class="form-check-label" for="person">PESSOA FÍSICA</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="person" value="pj" id="personJ">
                            <label class="form-check-label" for="person">PESSOA JURÍDICA</label>
                        </div>

                        @error('person')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <br> -->

                <div class="form-inline mt-3">
                    <label for="name" class="col-sm-2">Nome completo:</label>
                    <input id="name" type="text" class="col-sm-8 form-control" name="name" required autocomplete="name"
                        autofocus>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>

                <div class="form-inline mt-3">
                    <label for="email" class="col-sm-2">E-mail:</label>
                    <input id="email" type="email" class="form-control col-sm-4" name="email" required
                        autocomplete="email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="password" class="col-sm-1">Senha:</label>
                    <input id="password" type="password" class="form-control col-sm-3" name="password" required
                        autocomplete="new-password" placeholder="Mínimo de seis caracteres.">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="cpf" class="col-sm-2">CPF:</label>
                    <input type="text" class="form-control col-sm-3" id="cpf" name="cpf" placeholder="Use apenas números.">
                    @error('cpf')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="gender" class="col-sm-2">Gênero:</label>
                    <select class="form-control col-sm-3" id="gender" name="gender">
                        <option disabled selected> </option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="neutro">Prefiro não declarar</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>

                <!-- Dados de endereco -->
                <div class="form-inline mt-3">
                    <label for="cep" class="col-sm-2">CEP:</label>
                    <input type="text" class="form-control col-sm-3" id="cep" name="cep" placeholder="Use apenas números.">
                    @error('cep')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>

                <div class="form-inline mt-3">
                    <label for="state" class="col-sm-2">Estado:</label>
                    <input type="text" class="form-control col-sm-3" id="state" name="state">
                    @error('state')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="city" class="col-sm-2">Cidade:</label>
                    <input type="text" class="form-control col-sm-3" id="city" name="city">
                    @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="phone1" class="col-sm-2">Telefone 01:</label>
                    <input type="text" class="form-control col-sm-3" id="phone1" name="phone1" placeholder="Inclua DDD, use apenas números.">
                    
                    @error('phone1')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="phone2" class="col-sm-2">Telefone 02:</label>
                    <input type="text" class="form-control col-sm-3" id="phone2" name="phone2" placeholder="Inclua DDD, use apenas números.">

                    @error('phone2')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <br>

                <!-- opcao em participar do programa de caronas -->
                <!-- <div class="font-weight-bold">
                        <label class="form-check-label mt-3 col-sm-10" for="programaCarona">Você quer participar do
                            programa
                            de
                            caronas?
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="programaCarona" id="caronaSim"
                                    for="programaCarona" value="sim">
                                <label class="form-check-label" for="programaCarona">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="programaCarona" id="caronaNao"
                                    for="programaCarona" value="nao">
                                <label class="form-check-label" for="programaCarona">Não</label>
                            </div> -->

                <!-- @error('programaCarona')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> -->

                <!-- opcao em receber notificacos por email -->
                <div class="font-weight-bold">
                    <label class="form-check-label mt-3 col-sm-10" for="emailNotification">Você aceita receber
                        notificações por e-mail?
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="emailNotification" id="emailSim"
                                for="emailNotification" value="sim">
                            <label class="form-check-label" for="emailNotification">Sim</label>
                            <!-- </div>
                            <div class="form-check form-check-inline"> -->
                            <input class="form-check-input ml-2" type="radio" name="emailNotification" id="emailNao"
                                for="emailNotification" value="nao">
                            <label class="form-check-label" for="emailNotification">Não</label>
                        </div>

                        @error('emailNotification')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div><br><br>

                <!-- aceite de termos e condicoes -->
                <div>
                    <div class="form-group">
                        <label class="font-weight-bold">Termos e Condições do Portal Surf</label>
                        <textarea class="form-control col-sm-11"
                            rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! </textarea>
                    </div>
                    <div class="form-check-inline">
                        <label class="mt-3" for="terms">
                            <input type="checkbox" class="form-check-label mr-2" name="terms" id="terms" for="terms" value="sim" checked>Aceito os termos e condições.
                        </label>

                        @error('terms')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div><br><br>
                </div>

                <!-- botao Salvar e Cancelar -->
                <div class="container mt-5">
                    <!-- @empty($programaCarona)
                    <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                    @endempty -->
                    <button type="submit" class="btn encontreBotao" onclick="return validar_registerForm()">Salvar
                        alterações</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>

</section>

<!-- botao topo -->
<div class="container text-center mt-5 mb-2">
    <a href="#usuarioTopo" class="btn encontreBotao ">Topo</a>
</div>

<!-- validacao javascript do formulario -->
<script type="text/javascript">
    function validar_registerForm() {
        var name = registerForm.name.value;
        var email = registerForm.email.value;
        var password = registerForm.password.value;
        var cpf = registerForm.cpf.value;
        var gender = registerForm.gender.value;
        var cep = registerForm.cep.value;
        var state = registerForm.state.value;
        var city = registerForm.city.value;
        var phone1 = registerForm.phone1.value;
        var emailNotification = registerForm.emailNotification.value;
        var terms = registerForm.terms.value;

        if (name == "") {
            alert("Campo Nome é obrigatório.");
            registerForm.name.focus();
            return false;
        }
        if (email == "") {
            alert(
                "Campo E-mail é obrigatório. Caso tenha preenchido e retornou este erro, verifique se o endereço é válido ou se não foi utilizado por outro usuário."
            );
            registerForm.email.focus();
            return false;
        }
        if (password == "" || password.length <= 5) {
            alert("Campo Senha é obrigatório. Preencha com no mínimo seis caractéres.");
            registerForm.password.focus();
            return false;
        }
        if (cpf == "" || cpf.length < 11) {
            alert("Campo CPF é obrigatório.");
            registerForm.cpf.focus();
            return false;
        }
        if (gender == "") {
            alert("Favor preencher o campo Gênero.");
            registerForm.gender.focus();
            return false;
        }
        if (cep == "" || cep.length < 8) {
            alert("Favor preencher um CEP válido.");
            registerForm.cep.focus();
            return false;
        }
        if (state == "") {
            alert("Campo Estado é obrigatório.");
            registerForm.state.focus();
            return false;
        }
        if (city == "") {
            alert("Campo Cidade é obrigatório.");
            registerForm.city.focus();
            return false;
        }
        if (phone1 == ""  || phone1.length < 10) {
            alert("Favor informar um número de telefone válido.");
            registerForm.phone1.focus();
            return false;
        }
        if (emailNotification == "") {
            alert(
                "Favor informar se aceita receber as nossas notificações por e-mail. Este campo também é importante para as facilitar suas comunicações na sessão Desapego.");
            // registerForm.emailNotification.focus();
            return false;
        }
        if (terms == "") {
            alert("Favor ler e aceitar os Termos e Condições do Portal Surf.");
            // registerForm.terms.focus();
            return false;
        }
    }

</script>


@endsection
