@extends('layout')

@section('content')

@include('partials.nav.nav')

<div class="container-fluid">
    <div class="container my-3">
        <div class="row">
            <div class="col-12 d-flex align-items-center ">
                <span style="font-size: 2.5rem;"><i class="fa fa-filter"></i></span>
                <input type="text" class="form-control mx-3" placeholder="Nombre docente">
                <select id="inputState" class="form-control">
                    <option selected>Grado academico</option>
                    <option>...</option>
                </select>
                <select id="inputState" class="form-control mx-3">
                    <option selected>Especialidad</option>
                    <option>...</option>
                </select>
                <select id="inputState" class="form-control">
                    <option selected>Recomendaciones</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-6">
                @include('partials.itemD')
                @include('partials.itemD')
                @include('partials.itemD')
            </div>
            <div class="col-6">
                @include('partials.itemD')
                @include('partials.itemD')
                @include('partials.itemD')
            </div>
        </div>
    </div>
</div>
@endsection