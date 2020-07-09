<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    function account(Request $req) {
        //return $req->input();
        $user = new User;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->postalcode = $req->postalcode;
        $user->city = $req->city;
        echo $user->save();
    }

    function list() {
        //$data = User::all();
        //return view('home',['data'=>$data]);
         $user = DB::table('users')->get();
         return view('home',['users'=>$user]);
     }

}
