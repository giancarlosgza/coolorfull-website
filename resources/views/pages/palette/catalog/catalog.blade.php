@extends('layouts.app')
@section('title', 'Paletas de Colores')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>Paletas de Colores</h4>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach($palettes as $palette)
        <div class="col-sm-6 col-md-4">
            <a href="/palettes/{{$palette->id}}" class="gradient-link"ref="">
                <ul class="list-group">
                    <li class="list-group-item list-palette" style="background-color:{{$palette->color_1}}"> </li>
                    <li class="list-group-item list-palette" style="background-color:{{$palette->color_2}}"></li>
                    <li class="list-group-item list-palette" style="background-color:{{$palette->color_3}}"></li>
                    <li class="list-group-item list-palette" style="background-color:{{$palette->color_4}}"></li>
                </ul>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
