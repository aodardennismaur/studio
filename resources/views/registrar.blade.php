@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('img/logo-ico.png') }}" alt="Logo de la empresa">
                <h1 class="mb-5">Registro</h1>
            </div>
            <form method="POST" action="{{ route('registro.store') }}">
                @csrf
                <div class="form-row mb-3">
                    <div class="col-4 mx-auto">
                        <label for="dni">Documento de Identidad</label>
                        <input type="number" class="form-control" id="dni" name="dni" aria-describedby="emailHelp" placeholder="Ingresa tu DNI">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col-4 mx-auto">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="ejemplo@studio.com">
                    </div>
                </div>
                <div class="form-row mb-5">
                    <div class="col-4 mx-auto">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-2 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection