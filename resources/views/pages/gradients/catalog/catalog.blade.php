@extends('layouts.app')
@section('title', 'Gradients')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Gradients</h4>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach($gradients as $gradient)
        <div class="col-md-4">
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
    <div class="row">
        <div class="col-12 col-md-12">
            {{ $gradients->links() }}
        </div>
    </div>
</div>
@endsection
