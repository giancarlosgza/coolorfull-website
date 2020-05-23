@extends('layouts.app')
@section('title', 'Favorites Gradients')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">Liked Gradients</h4><br>
        </div>
        @if ($user->favoriteGradients->count() < 1)
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-12 col-sm-6">
                            <img src="{{ asset ('/assets/img/illustrations/search_engine.svg') }}" width="50%" alt="start-up">
                        <br><br>
                        </div>
                        <div class="col-12 col-sm-6 align-self-center">
                            <h4 class="text-poppins text-body">Empty liked gradients</h4>
                            <h5>Search and like a gradient and it will show up here.</h5>
                            <br>
                            <a href="/gradients/catalog" class="btn btn-primary button-block shadow-medium">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else 
        @foreach($user->favoriteGradients as $gradient)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="bold-500 text-center uppercase h6-responsive text-uppercase">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" title="{{$gradient->name}}">
                        <div class="card text-center box-shadow-0">        
                            <div class="card-body card-gradient" title="{{$gradient->name}}" 
                                @if($gradient->color_3)
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});">
                                @else
                                style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6"> 
                                <div id="fav-heart-gradient-{{$gradient->id}}" class="text-left align-self-end fav-heart @if($user->favoriteGradients->contains($gradient)) active-heart @endif" onclick="event.preventDefault(); newFavoriteGradient({{$gradient->id}})"><i class="material-icons">favorite</i></div>
                            </div>
                            <div class="col-6">
                                <div id="fav-count-gradient-{{$gradient->id}}" class="text-right align-self-end font-weight-bold">
                                    @if($gradient->usersWhoFav->count() == 1) 
                                    {{ $gradient->usersWhoFav->count() }} like
                                    @else
                                    {{ $gradient->usersWhoFav->count() }} likes
                                    @endif 
                                </div>
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
            //alert(response.msg)
            $('#fav-heart-gradient-' + gradientId).toggleClass('active-heart')
        })
    }
</script>
@endsection