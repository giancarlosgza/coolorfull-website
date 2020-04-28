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
            <div class="card card-outline">
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
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card card-outline">
                <div class="card-body">
                    <h6 class="text-center text-uppercase">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" title="{{$gradient->name}}">
                        <div class="card card-outline text-center">
                            <div class="card-body card-gradient" title="{{$gradient->name}}" 
                                @if($gradient->color_3)
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});">
                                @else
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                @endif   
                            </div>
                            
                        </div>
                        <div class="text-left"><br>
                            <a href="/gradients/{{$gradient->id}}" class="btn btn-primary">View</a>
                            <a href="/gradients/admin/edit/{{$gradient->id}}" class="btn btn-primary-light">Edit</a>
                            <hr>
                            <form method="POST" action="/gradients/delete">
                                @csrf
                                <input id="invisible_id" name="gradient_id" type="hidden" value="{{$gradient->id}}">
                                <button value="POST" type="submit" class='btn btn-danger'>Delete</button>
                            </form>
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
