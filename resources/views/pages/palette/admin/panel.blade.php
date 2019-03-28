@extends('layouts.app')
@section('title', 'Palettes Panel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <a href="/palettes/admin/create" class="btn btn-primary shadow-medium">
                CREATE PALETTE
            </a>
        </div>
    </div><br>
    <div class="row">
        @if ($palettes->count() < 1)
        <div class="col-sm-12">
           <h6>No colors palettes</h6> 
        </div>
        @else 
        @foreach($palettes as $palette)
        <div class="col-12 col-md-4 col-lg-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold text-center uppercase h6-responsive">{{$palette->name}}</h6>
                    <a href="/palettes/{{$palette->id}}" title="{{$palette->name}}">
                        <ul class="list-group">
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_1}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_2}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_3}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_4}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_5}}"></li>
                        </ul>
                    </a>
                    <div class="text-left">
                            <a href="/palettes/{{$palette->id}}" class="btn btn-primary shadow-medium">View</a>
                            <a href="/palettes/admin/edit/{{$palette->id}}" class="btn btn-primary shadow-medium">Edit</a>
                            <hr>
                            <form method="POST" action="/palettes/delete">
                                @csrf
                                <input id="invisible_id" name="palette_id" type="hidden" value="{{$palette->id}}">
                                <button value="POST" type="submit" class='btn btn-danger shadow-medium'>Delete</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
