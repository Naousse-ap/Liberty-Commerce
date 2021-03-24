@extends('layouts.app')

@section('content')
<div id="containerbis">
    <form class="formulaire" method="POST" action="{{ route('Admin') }}" name="login">

        @csrf
        <h1>Ajout produit</h1>

        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
        <input id="name" type="text" placeholder="Entrer le nom du produit" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
        <input id="description" type="text" placeholder="Entrer la description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

        @error('Description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>
        <input id="price" type="text" placeholder="Entrer le prix" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

        @error('Prix')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categorie') }}</label>
        <input id="category" type="text" placeholder="Entrer la categorie" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

        @error('Categorie')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>
        <input id="stock" type="text" placeholder="Stock disponible" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

        @error('Stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
        <input id="photo" type="text" placeholder="Entrer votre url image" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

        @error('image')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="reference" class="col-md-4 col-form-label text-md-right">{{ __('Référence') }}</label>
        <input id="reference" type="text" placeholder="Entrer votre url image" class="form-control @error('reference') is-invalid @enderror" name="reference" value="{{ old('reference') }}" required autocomplete="reference" autofocus>

        @error('Référence')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror


        <button type="submit" class="btn btn-primary">
            {{ __('Ajouter') }}
        </button>

</div>
</form>
@endsection
