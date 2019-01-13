@extends('layouts.app')
@section('title', 'Create Gradient')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body"> 
                    <h4 class="bold">Create new Gradient</h4>
                    <!--FORM-->
                    <form method="POST" action="/gradients/new" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="name" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="name" name="nombre" placeholder="Fire Red, Leaf Green">
                        </div>

                        <div class="form-group">
                            <label for="color_1">Color 1:</label>
                            <input type="text" class="form-control{{ $errors->has('color_1') ? ' is-invalid' : '' }}" id="color_1" name="color_1" placeholder="#11998e">
                        </div>

                        <div class="form-group">
                            <label for="color_2">Color 2:</label>
                            <input type="text" class="form-control{{ $errors->has('color_2') ? ' is-invalid' : '' }}" id="color_2" name="color_2" placeholder="#38ef7d">
                        </div>
                        <!--
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Imagen: (Opcional)</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="imagen" id="image_name"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="image_name">Seleccionar Archivo</label>
                            </div>
                        </div>
                        -->
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
