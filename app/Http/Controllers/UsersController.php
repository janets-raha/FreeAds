<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Session;
use App\User;
use Crypt;

class UsersController extends Controller
{
    function store(Request $req) {
        //return $req->input();
        $first_name = $req->input('first_name');
        $last_name = $req->input('last_name');
        $username = $req->input('username');
        $email = $req->input('email');
        $password = $req->input('password');
        $phone = $req->input('phone');
        $address = $req->input('address');
        $postalcode = $req->input('postalcode');
        $city = $req->input('city');
        echo DB::insert('insert into users(id, first_name, last_name, username, email, password, phone, address, postalcode, city) values (?,?,?,?,?,?,?,?,?,?)',[null,$first_name,$last_name,$username,$email,$password,$phone,$address,$postalcode,$city]);
    }

    function logs(Request $req) {
        //return $req->input();
        //print_r($req->input());
        $email = $req->input('email');
        $password = $req->input ('password');
        $data = DB::select('SELECT id FROM users WHERE password=?' ,[$password]);
        //print_r($data);
        if(count($data)) {
            echo "You have logged in successfully";
        } else {
            echo "Please enter correct email and password";
        }
    }


}
