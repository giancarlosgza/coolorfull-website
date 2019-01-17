@extends('layouts.app')
@section('title', 'Gradients Panel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <a href="/gradients/admin/create" class="btn btn-primary">
                CREATE GRADIENT
            </a>
        </div>
    </div><br>
    <div class="row">
        @if ($gradients->count() < 1)
        <div class="col-sm-12">
            <h6>No colors gradients</h6> 
        </div>
        @else 
        @foreach($gradients as $gradient)
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body card-gradient" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                    <h5 class="text-center gradient-link">{{$gradient->name}}</h5>
                </div>
                <div class="card-footer text-left">
                    <a href="/gradients/{{$gradient->id}}" class="btn btn-primary">View</a>
                    <a href="/gradients/admin/edit/{{$gradient->id}}" class="btn btn-primary">Edit</a>
                    <hr>
                    <form method="POST" action="/gradients/delete">
                        @csrf
                        <input id="invisible_id" name="gradient_id" type="hidden" value="{{$gradient->id}}">
                        <button value="POST" type="submit" class='btn btn-danger'>Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
