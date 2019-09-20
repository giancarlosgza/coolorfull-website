@extends('layouts.app')
@section('title', 'Gradients Panel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <a href="/gradients/admin/create" class="btn btn-primary shadow-medium">
                Create Gradient
            </a>
        </div>
    </div><br>
    <div class="row">
        @if ($gradients->count() < 1)
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-12 col-sm-6">
                            <img src="{{ asset ('/assets/img/illustrations/drink_coffee_with_laptop_in_cafe.svg') }}" width="50%" alt="drink-coffee">
                        <br><br>
                        </div>
                        <div class="col-12 col-sm-6 align-self-center">
                            <h4 class="text-poppins text-body">Empty gradients</h4>
                            <h5>Create gradients and it will show up here.</h5>
                            <br>
                            <a href="/gradients/admin/create" class="btn btn-primary button-block shadow-medium">Create gradient</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else    
        @foreach($gradients as $gradient)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-medium">
                <div class="card-body">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link btn btn-gradient">
                                <i class="fas fa-circle" style="color: {{$gradient->color_1}};"></i> {{$gradient->color_1}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-gradient">
                                <i class="fas fa-circle" style="color: {{$gradient->color_2}};"></i> {{$gradient->color_2}}
                            </a>
                        </li>
                        @if($gradient->color_3)
                        <li class="nav-item">
                            <a class="nav-link btn btn-gradient">
                                <i class="fas fa-circle" style="color: {{$gradient->color_3}};"></i> {{$gradient->color_3}}
                            </a>
                        </li>
                        @else
                        @endif
                    </ul><br>
                    <h6 class="bold-500 text-center uppercase">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" title="{{$gradient->name}}">
                        <div class="card text-center">
                            <div class="card-body card-gradient shadow-medium" title="{{$gradient->name}}" 
                                @if($gradient->color_3)
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});">
                                @else
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                @endif   
                            </div>
                            <div class="text-left"><br>
                                <a href="/gradients/{{$gradient->id}}" class="btn btn-primary shadow-medium">View</a>
                                <a href="/gradients/admin/edit/{{$gradient->id}}" class="btn btn-primary-light shadow-medium">Edit</a>
                                <hr>
                                <form method="POST" action="/gradients/delete">
                                    @csrf
                                    <input id="invisible_id" name="gradient_id" type="hidden" value="{{$gradient->id}}">
                                    <button value="POST" type="submit" class='btn btn-danger shadow-medium'>Delete</button>
                                </form>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
