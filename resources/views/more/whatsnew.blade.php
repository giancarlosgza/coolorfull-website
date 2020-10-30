@extends('layouts.app')
@section('title', 'What´s new')
@section('googleads')
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">What's new?</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card card-outline">
                <div class="card-body">
                    <h4 class="">
                        <img src="{{asset('/assets/img/logo-form.svg')}}" width="50px" alt="Colorffy logo" class="img-logo">
                        Colorffy
                    </h4>
                    <br>

                    <h6><i class="material-icons text-success">check</i> Version 3.0</h6>
                    <ul>
                        <li>UI: We redesign the UI to bring a new and more fresh look</li>
                        <li>Gradients: Android colors</li>
                    </ul>
                    <p class="text-muted"><i class="material-icons text-size-14">calendar_today</i> May 2020</p>
                    
                    <hr>

                    <h6><i class="material-icons text-success">check</i> Version 2.5</h6>
                    <ul>
                        <li>UI: Some minors design changes</li>
                        <li>UI: Some dark mode improvements</li>
                        <li>Gradient: New color blindness filter on gradients ui component</li>
                        <li>Tools: Get a random color and the complementary color with some color codes</li>
                    </ul>
                    <p class="text-muted"><i class="material-icons text-size-14">calendar_today</i> September 2019</p>
                    
                    <hr>

                    <h6><i class="material-icons text-success">check</i> Version 2.3</h6>
                    <ul>
                        <li>UI: Website styles redesign</li>
                        <li>UI: New dark mode</li>
                        <li>Tools: Extract images color redesign</li>
                    </ul>
                    <p class="text-muted"><i class="material-icons text-size-14">calendar_today</i> July 2019</p>

                    <hr>

                    <h6><i class="material-icons text-success">check</i> Version 2.0</h6>
                    <ul>
                        <li>Website: Colorffy PRO</li>
                        <li>Gradients: Like your favorites gradients (PRO)</li>
                        <li>Palettes: Like your favorites palettes (PRO)</li>
                        <li>Tools: Create and save unlimited gradients (PRO)</li>
                        <li>Website: HEX, RGB, HSL & CMYK for every gradients and generators</li>
                        <li>Website: Color blindness filter for gradients and palettes</li>
                        <li>Palettes: Preview icons with color palettes applied</li>
                        <li>Gradients: Preview UI elements with the gradients applied</li>
                        <li>UI: Some UI elements redesign</li>
                        <li>Tools: Random color generator</li>
                        <li>Tools: Get colors from image</li>
                    </ul>
                    <p class="text-muted"><i class="material-icons text-size-14">calendar_today</i> March 2019</p>
                    <hr>

                    <a href="https://www.producthunt.com/posts/colorffy?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-colorffy"
                        target="_blank"><img
                            src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=149375&theme=light"
                            alt="Colorffy - Gradients, palettes & tools for designers & developers! 🎨 | Product Hunt Embed"
                            style="width: 250px; height: 54px;" width="250px" height="54px" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-3 text-center mb-3">
            @guest
            <br>
            <!-- colorffy_ads_md -->
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEBI6K7Y&placement=wwwcolorffycom" id="_carbonads_js"></script>
            @else
            @endguest
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>

</script>
@endsection
