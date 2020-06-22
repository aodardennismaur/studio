<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrarController extends Controller
{
    public function index(){
        return view('registrar');
    }

    public function store(){
        User::create([
            'dni' => request('dni'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        return redirect()->route('home');
    }
}
