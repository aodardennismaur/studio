@extends('layout')

@section('content')

@include('partials.nav.nav')

<div class="container mt-4" style="height: 80%">
    <div class="row" style="height: 100%;">
        <div class="col-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    Solicitudes
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-secondary text-white">Estudiante Nº 1</a>
                <a href="#" class="list-group-item list-group-item-action">Estudiante Nº 2</a>
                <a href="#" class="list-group-item list-group-item-action">Estudiante Nº 3</a>
                <a href="#" class="list-group-item list-group-item-action">Estudiante Nº 4</a>
            </div>
        </div>
        <div class="col-8">
            <div class="card  r-success mb-3" style="height: 100%;">
                <div class="card-header bg-primary text-white">Header</div>
                <div class="card-body">
                    <h5 class="card-title text-success">[[ Usuario_Name ]]</h5>
                    <p class="card-text text-success">[[ Mensaje_Usuario ]]</p>
                    <h5 class="card-title text-right text-dark">[[ Docente_Name ]]</h5>
                    <p class="card-text text-right text-dark">[[ Docente_Usuario ]]</p>
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Ingrese su mensaje">
                        <span class="ml-4" style="font-size: 2rem;"><i class="fa fa-arrow-circle-o-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection