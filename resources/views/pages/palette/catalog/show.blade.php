@extends('layouts.app')
@section('title', "$palette->name")
@section('content')
<style>
    .protanopia{-webkit-filter:url(/assets/img/filters.svg#protanopia);filter:url(/assets/img/filters.svg#protanopia)}.protanomaly{-webkit-filter:url(/assets/img/filters.svg#protanomaly);filter:url(/assets/img/filters.svg#protanomaly)}.deuteranopia{-webkit-filter:url(/assets/img/filters.svg#deuteranopia);filter:url(/assets/img/filters.svg#deuteranopia)}.deuteranomaly{-webkit-filter:url(/assets/img/filters.svg#deuteranomaly);filter:url(/assets/img/filters.svg#deuteranomaly)}.tritanopia{-webkit-filter:url(/assets/img/filters.svg#tritanopia);filter:url(/assets/img/filters.svg#tritanopia)}.tritanomaly{-webkit-filter:url(/assets/img/filters.svg#tritanomaly);filter:url(/assets/img/filters.svg#tritanomaly)}.achromatopsia{-webkit-filter:url(/assets/img/filters.svg#achromatopsia);filter:url(/assets/img/filters.svg#achromatopsia)}.achromatomaly{-webkit-filter:url(/assets/img/filters.svg#achromatomaly);filter:url(/assets/img/filters.svg#achromatomaly)}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-image:linear-gradient(to right,#255dce,#1c9fe7);border:0}
    .svg-1{width:100px}.svg-2{width:120px}.svg-3{width:85px}.cls-1,.cls-8{fill:none}.cls-1{stroke:#333;stroke-width:5px}.cls-1,.cls-8,.cls-9{stroke-miterlimit:10}.cls-2{fill:{{$palette->color_1}}}.cls-3,.cls-4,.cls-9{fill:{{$palette->color_2}}}.cls-5{fill:{{$palette->color_3}}}.cls-6{fill:{{$palette->color_4}}}.cls-7{fill:{{$palette->color_5}}}.cls-8{stroke:#65c8d0}.cls-9{stroke:#f2f2f2}.cls-10{fill:#b3b3b3}
</style>

<div class="container btn-return">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link" href="/palettes/catalog"><i class="fas fa-arrow-left"></i> Palettes</a>
            <br>
        </div>
    </div>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_1}}">
            <i class="fas fa-circle" style="color: {{$palette->color_1}};"></i> {{$palette->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_2}}">
            <i class="fas fa-circle" style="color: {{$palette->color_2}};"></i> {{$palette->color_2}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_3}}">
            <i class="fas fa-circle" style="color: {{$palette->color_3}};"></i> {{$palette->color_3}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_4}}">
            <i class="fas fa-circle" style="color: {{$palette->color_4}};"></i> {{$palette->color_4}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_5}}">
            <i class="fas fa-circle" style="color: {{$palette->color_5}};"></i> {{$palette->color_5}}
        </a>
    </li>
</ul><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center bold uppercase">{{$palette->name}}</h4>
            <ul id="htmltoimage" class="list-group shadow-medium">
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_1}}"> </li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_2}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_3}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_4}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_5}}"></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-gradient" onclick="downloadimage()">
                <i class="fas fa-image"></i>
                Get IMG
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @guest
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- colorffy_ads_small -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:320px;height:100px"
                data-ad-client="ca-pub-5211873894116133"
                data-ad-slot="9130617236"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            @else
            @endguest
        </div>
    </div>
    <hr><!--COLORS HEX RGB TABLE-->
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">🎨</th>
                        <th scope="col">👨‍💻 HEX</th>
                        <th scope="col">💻 RGB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><i class="fas fa-circle" style="color: {{$palette->color_1}};"></i></th>
                            <td>{{$palette->color_1}}</td>
                            <td><?php $hex="$palette->color_1"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="fas fa-circle" style="color: {{$palette->color_2}};"></i></th>
                            <td>{{$palette->color_2}}</td>
                            <td><?php $hex="$palette->color_2"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="fas fa-circle" style="color: {{$palette->color_3}};"></i></th>
                            <td>{{$palette->color_3}}</td>
                            <td><?php $hex="$palette->color_3"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="fas fa-circle" style="color: {{$palette->color_4}};"></i></th>
                            <td>{{$palette->color_4}}</td>
                            <td><?php $hex="$palette->color_4"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row"><i class="fas fa-circle" style="color: {{$palette->color_5}};"></i></th>
                            <td>{{$palette->color_5}}</td>
                            <td><?php $hex="$palette->color_5"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <h4 class="bold">Color Blindness</h4>
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="device">
                <!--COLOR BLINDNESS TABS-->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> <li class="nav-item"> <a class="nav-link active" id="pills-color1-tab" data-toggle="pill" href="#pills-color1" role="tab" aria-controls="pills-color1" aria-selected="true">{{$palette->color_1}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color2-tab" data-toggle="pill" href="#pills-color2" role="tab" aria-controls="pills-color2" aria-selected="false">{{$palette->color_2}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color3-tab" data-toggle="pill" href="#pills-color3" role="tab" aria-controls="pills-color3" aria-selected="false">{{$palette->color_3}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color4-tab" data-toggle="pill" href="#pills-color4" role="tab" aria-controls="pills-color4" aria-selected="false">{{$palette->color_4}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color5-tab" data-toggle="pill" href="#pills-color5" role="tab" aria-controls="pills-color5" aria-selected="false">{{$palette->color_5}}</a> </li> </ul> <div class="tab-content" id="pills-tabContent"> <div class="tab-pane fade show active" id="pills-color1" role="tabpanel" aria-labelledby="pills-color1-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color2" role="tabpanel" aria-labelledby="pills-color2-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color3" role="tabpanel" aria-labelledby="pills-color3-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color4" role="tabpanel" aria-labelledby="pills-color4-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color5" role="tabpanel" aria-labelledby="pills-color5-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> </div> </div> </div>
            </div>
            <div class="alert-device">
                <h6>Sorry, the color blindness filters are not available yet for mobile 😔. But they are available on PC 😁</h6>
            </div>
        </div>
    </div>
    <hr><!--ICONS WITH COLOR PALETTES-->
    <h4 class="bold">Icons Preview</h4>
        <div class="card shadow-medium">
            <div class="card-body">
                @guest
                    <h6>Do you want to see the color palette applied to icons?</h6>
                    <h6><a class="bold color-darkblue" href="/pricing">JOIN</a> Colorffy and become Pro</h6>
                @else
                <div class="row text-center">
                    <div class="col-6 col-sm-4">
                        <?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
                        <svg class="svg-1" data-name="Capa 1" viewBox="0 0 663.79 467.42" xmlns="http://www.w3.org/2000/svg">
                            <title>Camera</title>
                            <rect class="cls-1" x="47.03" y="35.04" width="84" height="82" rx="20" ry="20"/>
                            <path class="cls-2" transform="translate(-151.97 -191.96)" d="M815.76,288.46A27.44,27.44,0,0,0,788.4,261.1h-25L752.73,223a42.57,42.57,0,0,0-41-31.05H516.5a45.83,45.83,0,0,0-43.86,32.54l-11.09,36.6H179.33A27.44,27.44,0,0,0,152,288.46V407H815.76Z"/>
                            <path class="cls-3" transform="translate(-151.97 -191.96)" d="M152,407V632a27.44,27.44,0,0,0,27.36,27.36H788.4A27.44,27.44,0,0,0,815.76,632V407Z"/>
                            <path class="cls-4" transform="translate(-151.97 -191.96)" d="m369.69 446.51c0 66 54.91 119.49 122.65 119.49a124.31 124.31 0 0 0 70.41 -21.64l-138-197.56c-33.17 21.38-55.06 58.05-55.06 99.71z"/>
                            <path class="cls-5" transform="translate(-151.97 -191.96)" d="M613,456.51c0-66-54.91-119.49-122.65-119.49a124.39,124.39,0,0,0-67.59,19.78l138,197.56C592.35,532.74,613,497,613,456.51Z"/>
                            <ellipse class="cls-6" cx="336.36" cy="262.53" rx="122.65" ry="119.49"/>
                            <rect class="cls-7" x="401.03" y="23.04" width="127.42" height="52" rx="26" ry="26"/>
                            <circle class="cls-8" cx="60.03" cy="390.04" r="19"/>
                            <circle class="cls-5" cx="58.03" cy="334.04" r="19"/>
                        </svg>                            
                    </div>
                    <div class="col-6 col-sm-4">
                        <?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
                        <svg class="svg-2" data-name="Capa 1" viewBox="0 0 581.24 345.71" xmlns="http://www.w3.org/2000/svg">
                            <title>Pc-icon</title>
                            <path class="cls-1" transform="translate(-279.76 -211.29)" d="m560 413s91 140 238 99"/>
                            <path class="cls-1" transform="translate(-279.76 -211.29)" d="m541 423.5s91 140 238 99"/>
                            <polygon class="cls-2" points="230.58 323.95 186.58 323.95 166.17 56.09 248.93 56.09"/>
                            <rect class="cls-3" width="412.32" height="271" rx="27.36" ry="27.36"/>
                            <rect class="cls-4" x="125.17" y="310.63" width="169.4" height="33" rx="16.5" ry="16.5"/>
                            <path class="cls-5" transform="translate(-279.76 -211.29)" d="M664,436.26V250.35a16,16,0,0,0-16.22-15.74H325.22a16.37,16.37,0,0,0-12.79,6.12L660,446.51A15.39,15.39,0,0,0,664,436.26Z"/>
                            <path class="cls-6" transform="translate(-279.76 -211.29)" d="M312.42,240.73a15.35,15.35,0,0,0-3.42,9.62V436.26A16,16,0,0,0,325.22,452H647.78A16.38,16.38,0,0,0,660,446.51Z"/>
                            <rect class="cls-4" transform="translate(116.28 960.26) rotate(-90)" x="614.54" y="310.54" width="338.5" height="154.42" rx="9.44" ry="9.44"/>
                            <rect class="cls-2" transform="translate(116.53 956.99) rotate(-90)" x="633.28" y="331.28" width="298" height="109.43" rx="7.53" ry="7.53"/>
                            <circle class="cls-7" cx="504.24" cy="92.71" r="19"/>
                            <line class="cls-8" x1="464.82" x2="541.32" y1="185.31" y2="185.31"/>
                            <line class="cls-8" x1="464.82" x2="541.32" y1="199.31" y2="199.31"/>
                            <line class="cls-8" x1="464.82" x2="541.32" y1="211.81" y2="211.81"/>
                            <line class="cls-8" x1="464.82" x2="541.32" y1="225.81" y2="225.81"/>
                            <circle class="cls-9" cx="504.24" cy="92.71" r="7"/>
                            <rect class="cls-10" x="463.99" y="241.96" width="17.5" height="8.3" rx="2" ry="2"/>
                            <rect class="cls-10" x="493.99" y="241.71" width="17.5" height="8.3" rx="2" ry="2"/>
                            <rect class="cls-10" x="523.74" y="241.46" width="17.5" height="8.3" rx="2" ry="2"/>
                        </svg>                                                                  
                    </div>
                    <div class="col-6 col-sm-4">
                        <?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
                        <svg class="svg-3" data-name="Capa 1" viewBox="0 0 417.21 449.91" xmlns="http://www.w3.org/2000/svg">
                            <title>Backpack</title>
                            <rect class="cls-1" y="292.72" width="41.72" height="106.9" rx="12.58" ry="12.58"/>
                            <ellipse class="cls-2" cx="208.72" cy="95.25" rx="64.5" ry="89.25"/>
                            <rect class="cls-1" x="375.49" y="291.72" width="41.72" height="106.9" rx="12.58" ry="12.58"/>
                            <path class="cls-3" d="M199,37.84h19A165.52,165.52,0,0,1,383.47,203.36V422.55a27.36,27.36,0,0,1-27.36,27.36H60.83a27.36,27.36,0,0,1-27.36-27.36V203.36A165.52,165.52,0,0,1,199,37.84Z"/>
                            <rect class="cls-4" x="92.09" y="293.01" width="229.31" height="110.34" rx="27.36" ry="27.36"/>
                            <line class="cls-5" x1="121.4" x2="292.09" y1="325.77" y2="325.77"/>
                            <line class="cls-6" x1="121.4" x2="123.9" y1="325.77" y2="325.77"/>
                            <line class="cls-7" x1="128.93" x2="287.08" y1="325.77" y2="325.77"/>
                            <line class="cls-6" x1="289.59" x2="292.09" y1="325.77" y2="325.77"/>
                            <path class="cls-8" d="M165.64,121.52h83.21a73,73,0,0,1,73,73v9.93a27.36,27.36,0,0,1-27.36,27.36H120A27.36,27.36,0,0,1,92.59,204.5v-9.93A73.05,73.05,0,0,1,165.64,121.52Z"/>
                            <path class="cls-9" transform="translate(672.81 502.09) rotate(180)" d="M428.09,327.1h76.5a9,9,0,0,1,9,9v0a22.5,22.5,0,0,1-22.5,22.5H441.6a22.5,22.5,0,0,1-22.5-22.5v0a9,9,0,0,1,9-9Z"/>
                            <rect class="cls-10" transform="translate(-524.44 402.45) rotate(-60)" x="361.44" y="515.28" width="27.62" height="13.75" rx="5.45" ry="5.45"/>
                        </svg>                            
                    </div>
                </div>
                @endguest
            </div>
        </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" async='async'></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <script>
        new ClipboardJS(".btn"),$(document).ready(function(){$("[data-toggle=\"tooltip\"]").tooltip()});
        function copyColor(){const a=Swal.mixin({toast:!0,position:"top-end",showConfirmButton:!1,timer:3e3});a.fire({type:"success",title:"COPIED!"})}function downloadimage(){var t=document.getElementById("htmltoimage");html2canvas(t,{allowTaint:!0}).then(function(t){var e=document.createElement("a");document.body.appendChild(e),e.download="palette{{$palette->name}}_{{$palette->id}}.jpg",e.href=t.toDataURL(),e.target="_blank",e.click()})}
    </script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons' async='async'></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5211873894116133",
            enable_page_level_ads: true
        });
    </script>
@endsection