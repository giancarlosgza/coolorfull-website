@extends('layouts.app')
@section('title', 'Saved Gradients')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">🔖 My Saved Gradients</h4><br>
        </div>
        @if($gradients->count() < 1)
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold">No saved gradients 😔</h6>
                    <a href="/generator/gradients">You can create and save from here</a>
                </div>
            </div>
        </div>
        @else
        @foreach($gradients as $gradient)
        <div class="col-6 col-md-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold text-center uppercase">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" title="{{$gradient->name}}">
                        <div class="card text-center">        
                            <div class="card-body card-gradient shadow-medium" title="{{$gradient->name}}" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
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