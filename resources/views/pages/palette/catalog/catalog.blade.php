@extends('layouts.app')
@section('title', 'Palettes')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Palettes</h4>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach($palettes as $palette)
        <div class="col-12 col-md-4">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold text-center">{{$palette->name}}</h6>
                    <a href="/palettes/{{$palette->id}}" class="gradient-link">
                        <ul class="list-group">
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_1}}">
                            </li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_2}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_3}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_4}}"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            {{ $palettes->links() }}
        </div>
    </div>
</div>
@endsection
