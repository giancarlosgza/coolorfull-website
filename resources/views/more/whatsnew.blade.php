@extends('layouts.app')
@section('title', 'What´s new')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">What's new?</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card card-form">
                <div class="card-body">
                    <h4 class="text-indigo text-montserrat">
                        <img src="{{asset('/assets/img/logo-form.svg')}}" width="50px" alt="Colorffy logo">
                        Colorffy
                    </h4>
                    <br>
                    <h6><i class="fas fa-check-circle text-success"></i> Version 2.3</h6>
                    <br>
                    <ul>
                        <li>Website styles redesign</li>
                        <li>Preview and download minimalist bootstrap 4 templates (PRO)</li>
                        <li>Dark mode</li>
                    </ul>
                    <br>
                    <h6 class="text-montserrat"><i class="fas fa-calendar-alt"></i> June 2019</h6><hr>
                    <h6><i class="fas fa-check-circle text-success"></i> Version 2.0</h6>
                    <br>
                    <ul>
                        <li class="text-montserrat text-indigo ">Colorffy PRO</li>
                        <li>Like your favorites gradients (PRO)</li>
                        <li>Like your favorites palettes (PRO)</li>
                        <li>Create and save unlimited gradients (PRO)</li>
                        <li>HEX, RGB, HSL & CMYK for every gradients and generators</li>
                        <li>Color blindness filter for gradients and palettes (PRO)</li>
                        <li>Preview icons with color palettes applied (PRO)</li>
                        <li>Preview UI elements with the gradients applied</li>
                        <li>Some UI elements redesign</li>
                        <li>Random color generator</li>
                        <li>Get colors from image</li>
                    </ul>
                    <br>
                    <h6 class="text-montserrat"><i class="fas fa-calendar-alt"></i> March 2019</h6><hr>
                    <a href="https://www.producthunt.com/posts/colorffy?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-colorffy" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=149375&theme=light" alt="Colorffy - Gradients, palettes & tools for designers & developers! 🎨 | Product Hunt Embed" style="width: 250px; height: 54px;" width="250px" height="54px" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
;(function(y, a, f, i) {
    var head = a.getElementsByTagName('head')[0];
    var script = a.createElement('script');

    y['_yafi-widget'] = { siteId: i, url: f };

    script.async = 1;
    script.src = f + 'widget/' + i;

    head.appendChild(script);
})(window, document, 'https://widget.yafi.pro/', '5d1654a725b528002ae69f30');
</script>
@endsection