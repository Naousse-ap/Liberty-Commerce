<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use Gloudemans\Shoppingcart\Facades\Cart;
Use App\Models\Product;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

        public function store(Request $request)
        {
            $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
                return $cartItem->id == $request->id;
            });

            $product = Product::find($request->id);

            Cart :: add($product->id, $product->name, 1 ,$product->price)
                ->associate('App\Models\Product');

                return redirect()->route('Panier')->with('success', 'Le produit à bien été ajouté' );
        }
}
