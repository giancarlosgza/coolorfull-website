@extends('layouts.app')
@section('title', 'Gradients')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">🎆 Gradients</h4>
        </div>
        <div class="col-sm-12">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="q" id="query" value="{{ $searchQuery }}" class="form-control shadow-medium no-border"
                        placeholder="🔍 Search colors or hexadecimal" aria-label="Search colors or hexadecimal" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary shadow-medium" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        @foreach($gradients as $gradient)
        <div class="col-6 col-md-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold text-center uppercase">{{$gradient->name}}</h6>
                    <a href="/gradients/{{$gradient->id}}" class="gradient-link">
                        <div class="card text-center">
                            <div class="card-body card-gradient shadow-medium" title="{{$gradient->name}}" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">     
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                @if($user)
                                <div id="fav-heart-gradient-{{$gradient->id}}" class="text-left align-self-end fav-heart @if($user->favoriteGradients->contains($gradient)) active-heart @endif" onclick="event.preventDefault(); newFavoriteGradient({{$gradient->id}})"><i class="fas fa-heart"></i></div>
                            </div>
                            <div class="col-6">
                                <div id="fav-count-gradient-{{$gradient->id}}" class="text-right align-self-end color-blue bold">{{ $gradient->usersWhoFav->count() }}</div>
                                @else
                                <a href="/favorites/gradients" title="Fav Gradient"><i class="fas fa-heart fav-heart"></i></a>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            {{ $gradients->appends($_GET)->onEachSide(1)->links()  }}
        </div>
    </div>
</div>
@endsection
@section('scripts') 
<script>
    function newFavoriteGradient(gradientId) {
        $.post('{{route("storeFavGradient")}}', {
            gradientId: gradientId,
        }).done(response => {
            //alert(response.msg)
            const FAV_COUNT_ELEM = $('#fav-count-gradient-' + gradientId)
            const FAV_HEART_ELEM = $('#fav-heart-gradient-' + gradientId)
            let newCount = response.code == 0 ? (parseInt(FAV_COUNT_ELEM.html()) - 1) : (parseInt(FAV_COUNT_ELEM.html()) + 1) ;
            
            FAV_HEART_ELEM.toggleClass('active-heart')

            FAV_COUNT_ELEM.html( newCount );
        })
    }
</script>
@endsection