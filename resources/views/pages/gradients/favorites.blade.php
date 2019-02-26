@extends('layouts.app')
@section('title', 'Favorites Gradients')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">⭐ Favorites Gradients</h4><br>
        </div>
        @if ($user->favoriteGradients->count() < 1)
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <h6>No favorites gradients 😔</h6>
                </div>
            </div>
        </div>
        @else 
        @foreach($user->favoriteGradients as $gradient)
        <div class="col-6 col-md-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                        <div class="card text-center">
                            <div class="card-body card-gradient shadow-medium" title="{{$gradient->name}}" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                <h6 class="bold">{{$gradient->name}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6"> 
                                <div id="fav-heart-gradient-{{$gradient->id}}" class="text-left align-self-end fav-heart @if($user->favoriteGradients->contains($gradient)) active-heart @endif" onclick="event.preventDefault(); newFavoriteGradient({{$gradient->id}})"><i class="fas fa-heart"></i></div>
                            </div>
                            <div class="col-6">
                                <div class="text-right align-self-end color-blue bold">{{ $gradient->id }}</div>
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
@section('scripts')
<script>
    function newFavoriteGradient(gradientId) {
        console.log('will send post to {{route("storeFavGradient")}}')
        $.post('{{route("storeFavGradient")}}', {
            gradientId: gradientId,
        }).done(response => {
            alert(response.msg)
            $('#fav-heart-gradient-' + gradientId).toggleClass('active-heart')
        })
    }
</script>
@endsection