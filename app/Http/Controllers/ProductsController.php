<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    function product(Request $req) {
        return $req->input();
    }
}
