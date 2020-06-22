@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 px-0">
                <img src="{{ asset('img/portada-login.jpeg') }}" class="card-img" alt="portada">
            </div>
            <div class="col-6 d-flex flex-column py-4">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="{{ asset('img/logo-ico.png') }}" alt="Logo de la empresa">
                    <h1 class="ml-3">Studio</h1>
                </div>
                <h2 class="text-center mb-3">Bienvenido</h2>
                <div id="fb-root" class="text-center mb-4">
                    <div class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="default"
                        data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
                </div>

                <p>{{ var_dump(auth()->user()) }}</p>

                <form class="px-5" method="POST" action="{{ route('home.login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        </div>
                        <a href="/registro" class="text-dark">Olvido Contraseña?</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button id="inicio" type="submit" class="btn btn-primary" style="width: 16rem;">Inicio Sesion</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <p class="mb-0 mr-4">No tienes una cuenta?</p>
                    <button id="registro" class="btn btn-primary">Registrate!!!</button>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('script')
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0&appId=191896515515617"
        nonce="GGIzBtER"></script>
    <script>
        $('#registro').click(function () {
            window.location = '/registro';
        });

        // $('#inicio').click(function () {
        //     window.location = '/cartelera';
        // });
    </script>
@endsection