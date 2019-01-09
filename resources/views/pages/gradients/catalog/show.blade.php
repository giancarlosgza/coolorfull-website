@extends('layouts.app')
@section('title', 'Degradado')
@section('content')
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" data-toggle="tooltip" title="Click para Copiar" data-clipboard-text="{{$gradient->color_1}}">
            <i class="fas fa-circle"  style="color: {{$gradient->color_1}};"></i> {{$gradient->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn" data-toggle="tooltip" title="Click para Copiar" data-clipboard-text="{{$gradient->color_2}}">
                <i class="fas fa-circle"  style="color: {{$gradient->color_2}};"></i> {{$gradient->color_2}}
        </a>
    </li>
</ul><br>
<div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
    <div class="container">

    </div>
</div>

@endsection
