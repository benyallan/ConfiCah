@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="antialiased text-center">
                <div class="col-md-6 container">
                    <img class="mb-4 rounded-circle" src=" {{asset('img/1bprv-logo.jpg')}} " alt="1º BPRv">
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="h3 mb-3 font-weight-normal">Identifique-se</h1>
                        <label for="cpf" class="sr-only">{{ __('CPF') }}</label>
                        <input id="cpf" type="text" class="form-control form-control-lg @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" placeholder="Seu CPF" required autocomplete="cpf" autofocus>
                            @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <label for="password" class="sr-only col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"  placeholder="Senha" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="checkbox mb-3">
                            <label>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar de mim') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a senha?') }}
                                </a>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">
                            {{ __('Entrar') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
