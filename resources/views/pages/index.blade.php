@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.main')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6">
                <a href="/gradients/catalog">
                    <div class="card card-blue shadow-medium">
                        <div class="card-body ">
                            <h6 class="logo">GRADIENTS</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-6">
                <a href="/palettes/catalog">
                    <div class="card card-blue shadow-medium">
                        <div class="card-body">
                            <h6 class="logo">PALETTES</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="bold">Last Gradients</h4>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($gradients as $gradient)
            <div class="col-6 col-md-3">
                <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                    <div class="card text-center">
                        <div class="card-body card-gradient shadow-medium" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                            <h6 class="bold">{{$gradient->name}}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
