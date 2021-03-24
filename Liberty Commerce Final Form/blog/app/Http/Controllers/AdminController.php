<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function save(Request $request)
    {
        Product::create($request->all());
        return redirect('/home');
    }

    public function see(Request $request, $id)
    {
        $products = new Product();

        $all_tech = DB::select('select * from product where id = ?', [$id]);

        return view('see')->withProducts($all_tech);
    }
}
