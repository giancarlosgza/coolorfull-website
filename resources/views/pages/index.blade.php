@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.main')
<div class="main">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <a href="/gradients/catalog">
                    <div class="card card-white shadow-medium">
                        <div class="card-body">
                            <h6 class="text-poppins h6-responsive"><i class="fas fa-circle gradient"></i> Gradients
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6">
                <a href="/palettes/catalog">
                    <div class="card card-white shadow-medium">
                        <div class="card-body">
                            <h6 class="text-poppins h6-responsive"><i class="fas fa-circle palette"></i> Palettes
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h3 class="text-poppins text-body">New gradients</h3>
            </div>
            <div class="col-6 text-right">
                <a href="/gradients/catalog" class="color-indigo text-poppins">
                    🔥 View all
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($gradients as $gradient)
            <div class="col-6 col-md-3">
                <div class="card shadow-medium">
                    <div class="card-body">
                        <h6 class="bold-500 text-center uppercase h6-responsive">{{$gradient->name}}</h6>
                        <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                            <div class="card text-center">
                                <div class="card-body card-gradient" title="{{$gradient->name}}" @if($gradient->color_3)
                                    style="background: linear-gradient(to right, {{$gradient->color_1}},
                                    {{$gradient->color_2}}, {{$gradient->color_3}});">
                                    @else
                                    style="background: linear-gradient(to right, {{$gradient->color_1}},
                                    {{$gradient->color_2}});">
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
