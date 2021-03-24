@extends('layouts.app')

@section('content')
@if (Cart::count() > 0)
<table id="customers">
    <thead>
        <tr>
            <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Photo</div>
            </th>
            <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Produit</div>
            </th>
            <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Quantité</div>
            </th>
            <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Prix</div>
            </th>
            <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Supprimer</div>
            </th>
        </tr>
    </thead>
    <tbody id="tableau_panier">
    </tbody>

</table>


<div id="paie">
    <form class="formulaire" method="POST" name="login">

        <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détails de la commande </div>
            <div class="p-4">
                <ul class="list-unstyled mb-4">
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong id="soustotal"></strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe </strong><strong id="taxee"></strong></li>
                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                        <h4 class="font-weight-bold" id="totalpanier"></h4>
                    </li>
                </ul>
                <button class="btn btn-dark rounded-pill py-2 btn-block">Acheter</button>
    </form>

</div>
</div>

</div>
@else
<div class="col-md-12">
    <p>Votre panier est vide.</p>
</div>

@endif

@endsection
