@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.main')
<div class="main">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-sm-6 mb-3">
                <a href="/gradients/catalog">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="text-poppins h6-responsive"><i class="fas fa-circle gradient"></i> Gradients
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6">
                <a href="/palettes/catalog">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="text-poppins h6-responsive"><i class="fas fa-circle palette"></i> Palettes
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row mt-3">
            <div class="col-6">
                <h5 class="text-poppins font-weight-bold">New gradients</h5>
            </div>
            <div class="col-6 text-right">
                <a href="/gradients/catalog" class="btn btn-link ripple ripple-dark">
                    🔥 View all
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($gradients as $gradient)
            <div class="col-6 col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-center text-uppercase h6-responsive">{{$gradient->name}}</h6>
                        <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                            <div class="card text-center box-shadow-0">
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
