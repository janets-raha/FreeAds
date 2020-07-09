<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;


class ProductsController extends Controller
{
    function product(Request $req) {
        //return $req->input();
        $product = new Products;
        $product->name = $req->name;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->condition = $req->condition;
        $product->price = $req->price;
        $product->postalcode = $req->postalcode;
        $product->image = $req->file('image')->store('public\images');
        echo $product->save();
    }

    function list() {
       //$data = Products::all();
       //return view('home',['data'=>$data]);
        $products = DB::table('products')->paginate(4);
        return view('home',['products'=>$products]);
    }

}
