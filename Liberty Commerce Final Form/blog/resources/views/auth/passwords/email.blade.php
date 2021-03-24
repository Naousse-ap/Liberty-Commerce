@extends('layouts.app')

@section('content')

<div id="container">
    <form class="formulaire" method="POST" action="{{('reset') }}" name="login">
        @csrf

        <h2>Mot de passe oublié</h2>
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        <input id="email" type="text" placeholder="Entrer votre email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button type="submit" class="btn btn-primary">
            {{ __('Valider') }}
        </button>

</div>
</form>
@endsection
