@extends('layouts.app')

@section('content')
<div id="container">

    <form class="formulaire" method="POST" action="{{ route('login') }}" name="login">
        @csrf
        <h1>Connexion</h1>
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        <input id="email" type="text" placeholder="Entrer votre email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong> <br> </br>
        </span>
        @enderror

        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
        <input id="password" type="password" placeholder="Entrer votre mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <div class="mdp">
            <a href="{{('password/reset') }}">
                {{ __('Mot de passe oublié') }}
            </a>
        </div>
        <a href="register">
            {{ __('Créer votre compte') }}
        </a>

        <button type="submit">
            {{ __('Connexion') }}
        </button>
    </form>
</div>
@endsection
