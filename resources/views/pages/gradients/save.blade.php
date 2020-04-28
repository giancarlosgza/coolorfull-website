@extends('layouts.app')
@section('title', 'Saved Gradients')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">Saved Gradients</h4><br>
        </div>
        @if($gradients->count() < 1)
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-12 col-sm-6">
                            <img src="{{ asset ('/assets/img/illustrations/start_up.svg') }}" width="50%" alt="start-up">
                        <br><br>
                        </div>
                        <div class="col-12 col-sm-6 align-self-center">
                            <h4 class="text-poppins text-body">Empty saved gradients</h4>
                            <h5>Create and save a gradient and it will show up here.</h5>
                            <br>
                            <a href="/generator/gradients" class="btn btn-primary button-block shadow-medium">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        @foreach($gradients as $gradient)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-center text-uppercase h6-responsive">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" title="{{$gradient->name}}">
                        <div class="card text-center box-shadow-0">
                            <div class="card-body card-gradient" title="{{$gradient->name}}"
                                @if($gradient->color_3)
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});">
                                @else
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            
        </div>
    </div>
</div>
@endsection