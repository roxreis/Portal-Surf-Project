@section('titulo')
Portal Surf - Login
@endsection

@extends('layouts.templateSurf')

@section('conteudo')

<!-- aviso de login -->
<div class="container">
    <h1 class="text-center mt-5">OPS! VOCÊ PRECISA ESTAR LOGADO</h1>
    <h2 class="text-center">PARA ACESSAR ESTA PÁGINA!</h2>
    <h4 class="container d-flex justify-content-center text-center col-8 mt-5">Faça seu login abaixo, ou se for o seu
        primeiro acesso, aproveite para se cadastrar e aproveitar tudo o que o Portal do Surf tem para oferecer!</h4>
</div><br><br>

<!-- campo para login -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body cardBlog shadow-lg p-4 bg-white">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar de mim.') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn encontreBotao">
                                    {{ __('Dropar') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a sua senha?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- botao para cadastro -->
<div class="d-flex justify-content-center mt-5 mb-5">
    <a href="register" class="btn encontreBotao mb-2">Primeiro acesso</a>
</div>

@endsection
