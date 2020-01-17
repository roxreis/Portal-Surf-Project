@section('titulo')
Portal Surf - Cadastro Usuario
@endsection

@extends('layouts.templateSurf')

@section('conteudo')

    <section class="container p-3">
        
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="shadow-lg formCadastro">
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
            <div class="ml-5">
                <div class="form-inline mt-3">
                    <label for="name" class="col-sm-2">Nome completo:</label>
                    <input id="name" type="text" class="col-sm-9 form-control" name="name" required autocomplete="name" autofocus>
                </div><br>

                <div class="form-inline mt-3">
                    <label for="email" class="col-sm-2">E-mail:</label>
                    <input id="email" type="email" class="form-control col-sm-4"
                        name="email" required autocomplete="email">

                    <!-- @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror -->

                    <label for="password" class="col-sm-1">Senha:</label>
                    <input id="password" type="password"
                        class="form-control col-sm-4" name="password" required
                        autocomplete="new-password">

                    <!-- @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror -->
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="cpf" class="col-sm-2">CPF:</label>
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
                    <label for="state" class="col-sm-2">Estado:</label>
                    <input type="text" class="form-control col-sm-4" id="state" name="state">
                    <label for="city" class="col-sm-1">Cidade:</label>
                    <input type="text" class="form-control col-sm-4" id="city" name="city">
                </div>
                <br>

                <div class="form-inline mt-3">
                    <label for="phone1" class="col-sm-2">Tel 01:</label>
                    <input type="text" class="form-control col-sm-4" id="phone1" name="phone1">
                    <label for="phone2" class="col-sm-1">Tel 02:</label>
                    <input type="text" class="form-control col-sm-4" id="phone2" name="phone2">
                </div>
                <br>

                <!-- opcao em participar do programa de caronas -->
                <div class="font-weight-bold form-check-inline">
                        <label class="form-check-label mt-3" for="programaCarona">
                            <input type="checkbox" class="form-check-input" value="sim" for="programaCarona" name="programaCarona" id="programaCarona">Quero participar do `Programa de Caronas!
                        </label>
                    </div><br><br><br>

                <!-- <div class="font-weight-bold">
                    <label class="form-check-label mt-3" for="programaCarona">Você quer participar do programa de caronas?
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="programaCarona" id="caronaSim" for="programaCarona" value="sim">
                            <label class="form-check-label" for="programaCarona">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="programaCarona" id="caronaNao"
                                for="programaCarona" value="nao">
                            <label class="form-check-label" for="programaCarona">Não</label>
                        </div>
                </div>
                <br><br> -->

                <!-- aceite de termos e condicoes -->
                <div>
                    <div class="form-group">
                        <label class="font-weight-bold">Termos e Condições do Portal do Surf</label>
                        <textarea class="form-control col-sm-11"
                            rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste necessitatibus ut alias quo suscipit sed excepturi modi! Eos consequuntur eligendi earum ex odit officiis eius corrupti officia delectus ea! </textarea>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label mt-3" for="terms">
                            <input type="checkbox" class="form-check-input" name="terms" id="terms" value="sim">Aceito os
                            termos e condições.
                        </label>
                    </div><br>
                    <div class="form-check-inline">
                        <label class="form-check-label mt-3" for="emailNotification">
                            <input type="checkbox" class="form-check-input" value="sim" for="emailNotification"
                                name="emailNotification" id="emailNotification">Aceito receber notificações por e-mail.
                        </label>
                    </div><br>

                    <!-- botao Salvar e Cancelar -->
                    <div class="container mt-5 mb-5">
                        <!-- @empty($programaCarona)
                        <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                        @endempty -->
                        <button type="submit" class="btn encontreBotao">Salvar alterações</button>
                        <button type="reset" class="btn encontreBotao">Cancelar</button>
                    </div>
            </div>
        </form>
    </section>

    <!-- botao topo -->
    <div class="container text-center mt-5 mb-2">
        <a href="#usuarioTopo" class="btn encontreBotao ">Topo</a>
    </div>


@endsection



<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
