@extends('layouts.app')

@section('content')
@foreach ($products as $product)

<div class="row">
    <div class="side">
        <div class="fakeimg" height="390px">
            <img class="centrer" src="{{$product->photo}}" height="390px">
        </div>
    </div>
    <div class="main">
        <h3 id="boutique">Déco LuAna</h3>
        <h2>
            {{$product->name}}
        </h2>
        <hr>
        <div id="prix">
            Prix: {{$product->price}} &euro;
        </div>
        <div id="categorie">
            {{$product->category}}
        </div>
        @if($product->stock)

        <form action="{{ route('cart.store')}}" method="POST">
            @csrf
            <br>
            <p>
                <i class="fas fa-tag"></i>
                {{$product->stock}} En stock. Expédition sous 24h
            </p>
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="a">
                <button type="submit" class="a" onclick="addpanier('{{$product->photo}}','{{$product->id}}', '{{ $product->name }}', '{{ $product->price }}')">+ Ajouter au panier</button>
            </div>
        </form>
        @else
        <p class="red-text">
            <strong>Produit en rupture de stock</strong>
        </p>
        @endif
        @if ((Auth::user()->admin) == 1)

        <form action="{{ route('stock')}}" method="POST">
            @csrf
            <input type="number" value="{{$product->stock}}" name="stock" min="0" max="255">
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="a">
                <button type="submit" class="a">Modifier le stock</button>
            </div>
        </form>
        @endif
    </div>
    <div class="description">
        <fieldset>
            <legend class="titre">
                Description
            </legend>
            <p>
                {{$product->description}}
                </br>
            </p>
        </fieldset>
    </div>
</div>
</body>
@endforeach
@endsection
