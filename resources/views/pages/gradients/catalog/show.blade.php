@extends('layouts.app')
@section('title', 'Degradado')
@section('content')
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" data-toggle="tooltip" title="Click para Copiar" data-clipboard-text="{{$gradient->color_1}}">
            <i class="fas fa-circle" style="color: {{$gradient->color_1}};"></i> {{$gradient->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn" data-toggle="tooltip" title="Click para Copiar" data-clipboard-text="{{$gradient->color_2}}">
            <i class="fas fa-circle" style="color: {{$gradient->color_2}};"></i> {{$gradient->color_2}}
        </a>
    </li>
</ul><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6"><br>
            <h4>Botones</h4>
            <div class="btn btn-outline-light btn-sm" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
            <div class="btn btn-outline-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
            <div class="btn btn-outline-light btn-lg" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Medallas</h4>
            <span class="badge badge-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</span>
            <span class="badge badge-dark" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</span>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Barras de Navegación</h4>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <a class="navbar-brand">Colorfull</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2"
                    aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav2">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Degradados</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Barras de Navegación</h4>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <a class="navbar-brand">Colorfull</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3"
                    aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav3">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Degradados</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><br>
</div>
@endsection
