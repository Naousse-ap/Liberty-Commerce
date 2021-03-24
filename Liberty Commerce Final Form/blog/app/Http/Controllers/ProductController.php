<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function see(Request $request, $id)
    {
        $products = new Product();

        $all_tech = DB::select('select * from product where id = ?', [$id]);

        return view('see')->withProducts($all_tech);
    }


    public function stock(Request $request)
    {
        $id = $request->get('id');
        Product:: where('id', $id)
            ->update(['stock' => $request->get('stock')]);

        return back();
    }
}
