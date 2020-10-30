@extends('layouts.app')
@section('title', 'Gradients')
@section('styles')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold text-indigo">Gradients</h4>
        </div>
        <div class="col-sm-12">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="q" id="query" value="{{ $searchQuery }}" class="form-control shadow-medium no-border search-input"
                        placeholder="Search something cool...." aria-label="Search something...." aria-describedby="button-addon2">
                    <div class="input-group-append ml-2">
                        <button class="btn btn-primary btn-sm btn-round my-0" type="submit" id="button-addon2"><i class="material-icons">search</i></button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-borderless table-sm">
                    <thead>
                        @foreach($filters as $filter)
                            <td scope="col">
                                <a class="btn btn-round btn-outline ripple ripple-dark" href="{{ route('gradientsCatalog', ['q' => $filter]) }}">
                                    <div class="h6-responsive">{{ $filter }}</div>
                                </a>
                            </td>
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
            <h3>Sorry, we couldn't find any gradient with that name.....</h3>
        </div> 
        <div class="col-12 col-md-4 col-lg-3 text-center mb-3">
            @guest
            <br>
            <!-- colorffy_ads_md -->
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEBI6K7Y&placement=wwwcolorffycom" id="_carbonads_js"></script>
            @else
            @endguest
        </div>
        @foreach($gradients as $gradient)
        <div class="col-6 col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-center text-uppercase h6-responsive text-poppins">{{$gradient->name}}</h6>
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
                        <div class="row">
                            @if($user)
                            <div class="col-4 col-sm-6 col-md-4"> 
                                <div id="fav-heart-gradient-{{$gradient->id}}" class="mt-3 text-left align-self-end fav-heart @if($user->favoriteGradients->contains($gradient)) active-heart @endif" onclick="event.preventDefault(); newFavoriteGradient({{$gradient->id}})"><i class="material-icons">favorite</i></div>
                            </div>
                            <div class="col-8 col-sm-6 col-md-8">
                                <div id="fav-count-gradient-{{$gradient->id}}" class="text-right align-self-end text-primary font-weight-bold mt-3">
                                    @if($gradient->usersWhoFav->count() == 1) 
                                    {{ $gradient->usersWhoFav->count() }} like
                                    @else
                                    {{ $gradient->usersWhoFav->count() }} likes
                                    @endif 
                                </div>
                            </div>
                            @else
                            <div class="col-8 col-sm-6 col-md-8 mt-3">
                                <a href="/favorites/gradients" title="Like gradient"><i class="material-icons">favorite</i></a>
                            </div>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach    
    </div>
    <div class="row my-3">
        <div class="col-12 col-md-12">
            {{ $gradients->appends($_GET)->onEachSide(1)->links()  }}
        </div>
    </div>
</div>
@endsection
@section('scripts') 
<script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" async='async'></script>
<script>
    function newFavoriteGradient(gradientId) {
        $.post('{{route("storeFavGradient")}}', {
            gradientId: gradientId,
        }).done(response => {
            console.log(response)
            if(response.success)
            {
                const FAV_COUNT_ELEM = $('#fav-count-gradient-' + gradientId)
                const FAV_HEART_ELEM = $('#fav-heart-gradient-' + gradientId)
                let newCount = response.code == 0 ? (parseInt(FAV_COUNT_ELEM.html()) - 1) : (parseInt(FAV_COUNT_ELEM.html()) + 1) ;
                
                FAV_HEART_ELEM.toggleClass('active-heart')

                FAV_COUNT_ELEM.html( newCount )
            }
            else 
            {
                swal("Error ocurred", response.msg, "error")
            }
            
        })
    }
</script>
<script>
    //NOT RESULT FOUND
    @if( $gradients->count() < 1 )
        $('#imgNotResult').removeClass('d-none');
    @endif
  </script>
@endsection