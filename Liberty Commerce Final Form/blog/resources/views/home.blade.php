@extends('layouts.app')

@section('content')

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    <div class="grid-container">

        @foreach($product as $product)
        <div class="grid-item">
            <a href="produit.html">
                <a href="/product/{{$product->id}}"> <img src="{{$product->photo}}" class="logo" /> </a>
                <p>{{$product->name}}</p>
                <div class="but">
                    <form action="{{ route('cart.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$product->id}}">

                        @if($product->stock)
                        <div class="bout">
                            <button type="submit" class="but" onclick="addpanier('{{$product->photo}}', '{{$product->id}}', '{{ $product->name }}', '{{ $product->price }}')">Ajouter au panier</button>
                        </div>
                        @else
                        <br>
                        <p class="red-text"><strong>Produit en rupture de stock</strong></p>
                        @endif
                    </form>
                </div>
            </a>
            <p>{{$product->price}} €</p>
        </div>
        @endforeach

    </div>
</body>

</html>
@endsection
