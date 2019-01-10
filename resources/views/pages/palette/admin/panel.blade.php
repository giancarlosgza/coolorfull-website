@extends('layouts.app')
@section('title', 'Panel Paletas de Colores')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <a href="/palettes/admin/create" class="btn btn-primary">
                CREAR NUEVO
            </a>
        </div>
    </div><br>
    <div class="row">
        @if ($palettes->count() < 1) 
        <h6>No hay paletas de colores</h6>
        @else 
        @foreach($palettes as $palette) 
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body card-gradient" style="background-color:{{$palette->color_1}};">
                    <h5 class="text-center gradient-link">{{$palette->name}}</h5>
                </div>
                <div class="card-footer text-left">
                    <a href="/palettes/{{$palette->id}}" class="btn btn-primary">Ver</a>
                    <a href="/palettes/admin/edit/{{$palette->id}}" class="btn btn-primary">Editar</a>
                    <hr>
                    <form method="POST" action="/palettes/delete">
                        @csrf
                        <input id="invisible_id" name="palette_id" type="hidden" value="{{$palette->id}}">
                        <button value="POST" type="submit" class='btn btn-danger'>Borrar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
