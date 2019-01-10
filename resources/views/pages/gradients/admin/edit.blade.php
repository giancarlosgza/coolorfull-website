@extends('layouts.app')
@section('title', 'Editar Degradado')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card card-form">
                <div class="card-body">
                    <h4>Editar degradado</h4>
                    <!--FORM-->
                    <form method="POST" action="/gradients/edit" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="invisible_id" value="{{$gradient->id}}" name="gradient_id">

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="name" id="name" value="{{ $gradient->name }}" name="nombre" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="color_1">Color 1:</label>
                            <input type="text" id="color_1" value="{{ $gradient->color_1 }}" name="color_1" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="color_2">Color 2:</label>
                            <input type="text" id="color_2" value="{{ $gradient->color_2 }}" name="color_2" class="form-control" >
                        </div>
                        <!--
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Imagen (Opcional)</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagen" id="image_name"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="image_name">Seleccionar Archivo</label>
                            </div>
                        </div>
                        -->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Actualizar') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
