@extends('layouts.app')
@section('title', 'Palettes')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">🎨 Palettes</h4>
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
    <br>
    <div class="row">
        @foreach($palettes as $palette)
        <div class="col-6 col-md-4 col-lg-3">
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
                        <div class="col-4 col-sm-6 col-md-4">
                            @if(Auth::user())
                            <div id="fav-heart-palette-{{$palette->id}}" class="text-left align-self-end fav-heart @if($user->favoritePalettes->contains($palette)) active-heart @endif" onclick="event.preventDefault(); newFavoritePalette({{$palette->id}})"><i class="fas fa-heart"></i></div>
                        </div>
                        <div class="col-8 col-sm-6 col-md-8">
                            <div id="fav-count-palette-{{$palette->id}}" class="text-right align-self-end color-blue bold">
                                @if($palette->usersWhoFav->count() == 1) 
                                {{ $palette->usersWhoFav->count() }} like
                                @else
                                {{ $palette->usersWhoFav->count() }} likes
                                @endif 
                            </div>
                            @else
                            <a href="/favorites/palettes" title="Fav Palette"><i class="fas fa-heart fav-heart"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            {{ $palettes->appends($_GET)->onEachSide(1)->links()  }}
        </div>
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