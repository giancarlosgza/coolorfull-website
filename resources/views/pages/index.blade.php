@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.main')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" name="q" id="query" value="{{ $searchQuery }}" class="form-control shadow-medium no-border" placeholder="🔍 Search colors or hexadecimal"
                            aria-label="Search colors or hexadecimal" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary shadow-medium" type="submit" id="button-addon2">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
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
