@extends('layouts.app')
@section('title', 'Palettes')
@section('googleads')
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">Palettes</h3>
        </div>
        <div class="col-sm-12">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="q" id="query" value="{{ $searchQuery }}" class="form-control shadow-medium no-border search-input"
                        placeholder="🔍 Search something...." aria-label="Search something...." aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary shadow-medium" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-borderless table-sm">
                    <thead>
                        @foreach($filters as $filter)
                            <th scope="col">
                                <a class="btn btn-gradient" href="{{ route('palettesCatalog', ['q' => $filter]) }}">
                                    <div class="h6-responsive">{{ $filter }}</div>
                                </a>
                            </th>
                        @endforeach   
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div id="imgNotResult" class="col-12 text-center d-none">
            <img src="{{asset('assets/img/illustrations/search_engine.svg')}}" width="200px" alt="">
            <br><br>
            <h3>Sorry, we couldn't find any palette with that name.....</h3>
        </div>
        @foreach($palettes as $palette)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="text-center uppercase h6-responsive text-montserrat">{{$palette->name}}</h6>
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
                            <div id="fav-count-palette-{{$palette->id}}" class="text-right align-self-end color-indigo bold-500">
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
    <div class="row text-center">
        <div class="col-sm-12">
            @guest
            <br>
            <!-- colorffy_ads_xs -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:320px;height:50px"
                data-ad-client="ca-pub-5211873894116133"
                data-ad-slot="2188507199"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            @else
            @endguest
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
<script>
    ;(function(y, a, f, i) {
      var head = a.getElementsByTagName('head')[0];
      var script = a.createElement('script');
  
      y['_yafi-widget'] = { siteId: i, url: f };
  
      script.async = 1;
      script.src = f + 'widget/' + i;
  
      head.appendChild(script);
    })(window, document, 'https://widget.yafi.pro/', '5d1654a725b528002ae69f30');

    //NOT RESULT FOUND
    @if( $palettes->count() < 1 )
        $('#imgNotResult').removeClass('d-none');
    @endif
  </script>
@endsection