@extends('layouts.app')
@section('title', 'Team')
@section('googleads')
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">Team</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card card-outline">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-3"
                        width="100px" alt="user avatar">
                    <h5 class="text-poppins">Giancarlos Garza</h5>
                    <p>Founder | UI & UX</p>
                    <hr>
                    <a href="https://twitter.com/giancarlosgza" class="" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x mr-2"></i></a>
                    <a href="https://github.com/giancarlosgza" class="" title="Github"
                        target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-outline">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-3"
                        width="100px" alt="user avatar">
                    <h5 class="text-poppins">Carlos Eli Lopez</h5>
                    <p>Co-Founder | Developer</p>
                    <hr>
                    <a href="https://twitter.com/carloselilopez" class="" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/Serveix" class="mx-2" title="Github" target="_blank"
                        rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                    <a href="https://carloseli.tech" class="" title="Blog" target="_blank" rel="noopener">
                        <i class="fas fa-rss fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-outline">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-3"
                        width="100px" alt="user avatar">
                    <h5 class="text-poppins">Abner Anzures</h5>
                    <p>Co-Founder | Designer</p>
                    <hr>
                    <a href="https://twitter.com/AbnerAnzures" class="mr-2" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/AAbbnneerr" class="" title="Github"
                        target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center justify-content-center">
        <div class="col-sm-12">
            @guest
            <br>
            <!-- colorffy_ads_md -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-5211873894116133"
            data-ad-slot="3087365012"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
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
    ;
    (function (y, a, f, i) {
        var head = a.getElementsByTagName('head')[0];
        var script = a.createElement('script');

        y['_yafi-widget'] = {
            siteId: i,
            url: f
        };

        script.async = 1;
        script.src = f + 'widget/' + i;

        head.appendChild(script);
    })(window, document, 'https://widget.yafi.pro/', '5d1654a725b528002ae69f30');

</script>
@endsection
