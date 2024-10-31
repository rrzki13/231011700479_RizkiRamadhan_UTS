<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table("products")->get();

        return view("landing", ["products" => $products]);
    }
}
