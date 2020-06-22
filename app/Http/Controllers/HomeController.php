<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function Login(){
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = request()->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->to('cartelera');
        }

        return redirect()->to('home')->with('Falla de credencial');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $user = User::firstOrCreate([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'avatar' => $user->getAvatar()
        ]);

        Auth::login($user,true);
        return redirect('cartelera');

        // $user->token;
    }

}
