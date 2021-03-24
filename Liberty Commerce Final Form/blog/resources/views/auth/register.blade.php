@extends('layouts.app')

@section('content')
<div id="container2">
    <form class="formulaire" method="POST" action="{{ route('register') }}" name="login">
        @csrf
        <h1>Inscription</h1>

        <label for="nom_prénom" class="col-md-4 col-form-label text-md-right">{{ __('Nom et Prénom') }}</label>
        <input id="nom_prénom" type="text" placeholder="Entrer votre nom et prénom" class="form-control @error('nom_prénom') is-invalid @enderror" name="nom_prénom" value="{{ old('nom_prénom') }}" required autocomplete="nom_prénom" autofocus>
        @error('nom_prénom')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
        <input id="adresse" type="text" placeholder="Entrer votre adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>
        @error('adresse')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>
        <input id="code_postal" type="text" placeholder="Entrer votre code postal" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>
        @error('code_postal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>
        <input id="pays" type="text" placeholder="Entrer votre pays" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
        @error('pays')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        <input id="email" type="text" placeholder="Entrer votre email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('Email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
        <input id="password" type="password" placeholder="Entrer votre mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('Mot de passe')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation du mot de passe') }}</label>
        <input id="password-confirm" type="password" placeholder="Entrez votre mot de passe" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <button type="submit" class="btn btn-primary">
            {{ __('Valider') }}
        </button>
</div>
</form>
@endsection
