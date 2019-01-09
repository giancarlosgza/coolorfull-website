@extends('layouts.app')
@section('title', 'Degradados')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4>Degradados</h4>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach($gradients as $gradient)
        <div class="col-sm-6 col-md-4">
            <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                <div class="card text-center">
                    <div class="card-body card-gradient" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                        <h5>{{$gradient->name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
