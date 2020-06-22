<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteleraController extends Controller
{
    public function index(){
        return view('cartelera');
    }
}
