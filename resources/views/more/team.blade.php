@extends('layouts.app')
@section('title', 'Team')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-poppins text-indigo">Team</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-2"
                        width="100px" alt="user avatar">
                    <h4 class="text-poppins">Giancarlos Garza</h4>
                    <p>Founder | UI & UX</p>
                    <hr>
                    <a href="https://twitter.com/giancarlosgza" class="color-indigo footer-icon" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/giancarlosgza" class="color-indigo footer-icon" title="Github"
                        target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-2"
                        width="100px" alt="user avatar">
                    <h4 class="text-poppins">Carlos Lopez</h4>
                    <p>Co-Founder | Developer</p>
                    <hr>
                    <a href="https://twitter.com/carloselilopez" class="color-indigo footer-icon" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/Serveix" class="color-indigo footer-icon" title="Github" target="_blank"
                        rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <img src="{{asset('/assets/img/illustrations/male_avatar.svg')}}" class="img-fluid mb-2"
                        width="100px" alt="user avatar">
                    <h4 class="text-poppins">Abner Anzures</h4>
                    <p>Co-Founder | Designer</p>
                    <hr>
                    <a href="https://twitter.com/AbnerAnzures" class="color-indigo footer-icon" title="Twitter"
                        target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/AAbbnneerr" class="color-indigo footer-icon" title="Github"
                        target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
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
