@extends('layouts.app')
@section('title', 'Favorites Palettes')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">❤️ Liked Palettes</h4><br>
        </div>
        @if ($user->favoritePalettes->count() < 1)
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold">No favorites palettes 😔</h6>
                    <a href="/palettes/catalog">You can save from here</a>
                </div>
            </div>
        </div>
        @else 
        @foreach($user->favoritePalettes as $palette)
        <div class="col-6 col-md-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold text-center uppercase">{{$palette->name}}</h6>
                    <a href="/palettes/{{$palette->id}}" title="{{$palette->name}}">
                        <ul class="list-group">
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_1}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_2}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_3}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_4}}"></li>
                            <li class="list-group-item list-palette" style="background-color:{{$palette->color_5}}"></li>
                        </ul>
                    </a>
                    <div class="row">
                        <div class="col-6">
                            <div id="fav-heart-palette-{{$palette->id}}" class="text-left align-self-end fav-heart @if($user->favoritePalettes->contains($palette)) active-heart @endif" onclick="event.preventDefault(); newFavoritePalette({{$palette->id}})"><i class="fas fa-heart"></i></div>
                        </div>
                        <div class="col-6">
                            <div id="fav-count-palette-{{$palette->id}}" class="text-right align-self-end color-blue bold">
                                @if($palette->usersWhoFav->count() == 1) 
                                {{ $palette->usersWhoFav->count() }} like
                                @else
                                {{ $palette->usersWhoFav->count() }} likes
                                @endif 
                            </div>
                        </div>
                    </div>
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
    function newFavoritePalette(paletteId) {
        $.post('{{route("storeFavPalette")}}', {
            paletteId: paletteId,
        }).done(response => {
            //alert(response.msg)
            const FAV_COUNT_ELEM = $('#fav-count-palette-' + paletteId)
            const FAV_HEART_ELEM = $('#fav-heart-palette-' + paletteId)
            let newCount = response.code == 0 ? (parseInt(FAV_COUNT_ELEM.html()) - 1) : (parseInt(FAV_COUNT_ELEM.html()) + 1) ;
            
            FAV_HEART_ELEM.toggleClass('active-heart')
            FAV_COUNT_ELEM.html( newCount );
        })
    }
</script>
@endsection