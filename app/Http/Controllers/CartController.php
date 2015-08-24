<?php namespace App\Http\Controllers;

use Session;
use Request;

class CartController extends Controller{

    public function updateCart(){
        print_r(Request::all());
    }
}