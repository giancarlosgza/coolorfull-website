@extends('layouts.app')
@section('title', 'Paleta de Colores')
@section('content')
<div class="container btn-return">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link" href="/palettes/catalog"><i class="fas fa-arrow-left"></i> Palettes</a>
            <br>
        </div>
    </div>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_1}}">
            <i class="fas fa-circle" style="color: {{$palette->color_1}};"></i> {{$palette->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_2}}">
            <i class="fas fa-circle" style="color: {{$palette->color_2}};"></i> {{$palette->color_2}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_3}}">
            <i class="fas fa-circle" style="color: {{$palette->color_3}};"></i> {{$palette->color_3}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_4}}">
            <i class="fas fa-circle" style="color: {{$palette->color_4}};"></i> {{$palette->color_4}}
        </a>
    </li>
</ul><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center bold">{{$palette->name}}</h4>
            <ul class="list-group shadow-medium">
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_1}}"> </li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_2}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_3}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_4}}"></li>
            </ul>
        </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        function copyColor() {
            alert("Copied!");
        }
    </script>
@endsection