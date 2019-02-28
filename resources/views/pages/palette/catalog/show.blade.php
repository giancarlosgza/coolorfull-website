@extends('layouts.app')
@section('title', "$palette->name")
@section('content')
<style>
    .protanopia{-webkit-filter:url(/assets/img/filters.svg#protanopia);filter:url(/assets/img/filters.svg#protanopia)}.protanomaly{-webkit-filter:url(/assets/img/filters.svg#protanomaly);filter:url(/assets/img/filters.svg#protanomaly)}.deuteranopia{-webkit-filter:url(/assets/img/filters.svg#deuteranopia);filter:url(/assets/img/filters.svg#deuteranopia)}.deuteranomaly{-webkit-filter:url(/assets/img/filters.svg#deuteranomaly);filter:url(/assets/img/filters.svg#deuteranomaly)}.tritanopia{-webkit-filter:url(/assets/img/filters.svg#tritanopia);filter:url(/assets/img/filters.svg#tritanopia)}.tritanomaly{-webkit-filter:url(/assets/img/filters.svg#tritanomaly);filter:url(/assets/img/filters.svg#tritanomaly)}.achromatopsia{-webkit-filter:url(/assets/img/filters.svg#achromatopsia);filter:url(/assets/img/filters.svg#achromatopsia)}.achromatomaly{-webkit-filter:url(/assets/img/filters.svg#achromatomaly);filter:url(/assets/img/filters.svg#achromatomaly)}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-image:linear-gradient(to right,#255dce,#1c9fe7);border:0}
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
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_4}}">
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
    <hr>
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
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-color1-tab" data-toggle="pill" href="#pills-color1" role="tab" aria-controls="pills-color1" aria-selected="true">{{$palette->color_1}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-color2-tab" data-toggle="pill" href="#pills-color2" role="tab" aria-controls="pills-color2" aria-selected="false">{{$palette->color_2}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-color3-tab" data-toggle="pill" href="#pills-color3" role="tab" aria-controls="pills-color3" aria-selected="false">{{$palette->color_3}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-color4-tab" data-toggle="pill" href="#pills-color4" role="tab" aria-controls="pills-color4" aria-selected="false">{{$palette->color_2}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-color5-tab" data-toggle="pill" href="#pills-color5" role="tab" aria-controls="pills-color5" aria-selected="false">{{$palette->color_3}}</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-color1" role="tabpanel" aria-labelledby="pills-color1-tab">
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <section>
                                <h6>Normal</h6>
                                <div class="card">
                                    <div class="card-body"style="background-color:{{$palette->color_1}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanopia">
                                <h6>Protanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanomaly">
                                <h6>Protanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranopia">
                                <h6>Deuteranopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranomaly">
                                <h6>Deuteranomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanopia">
                                <h6>Tritanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanomaly">
                                <h6>Tritanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatopsia">
                                <h6>Achromatopsia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatomaly">
                                <h6>Achromatomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_1}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-color2" role="tabpanel" aria-labelledby="pills-color2-tab">
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <section>
                                <h6>Normal</h6>
                                <div class="card">
                                    <div class="card-body"style="background-color:{{$palette->color_2}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanopia">
                                <h6>Protanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanomaly">
                                <h6>Protanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranopia">
                                <h6>Deuteranopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranomaly">
                                <h6>Deuteranomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanopia">
                                <h6>Tritanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanomaly">
                                <h6>Tritanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatopsia">
                                <h6>Achromatopsia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatomaly">
                                <h6>Achromatomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_2}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-color3" role="tabpanel" aria-labelledby="pills-color3-tab">
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <section>
                                <h6>Normal</h6>
                                <div class="card">
                                    <div class="card-body"style="background-color:{{$palette->color_3}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanopia">
                                <h6>Protanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanomaly">
                                <h6>Protanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranopia">
                                <h6>Deuteranopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranomaly">
                                <h6>Deuteranomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanopia">
                                <h6>Tritanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanomaly">
                                <h6>Tritanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatopsia">
                                <h6>Achromatopsia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatomaly">
                                <h6>Achromatomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_3}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-color4" role="tabpanel" aria-labelledby="pills-color4-tab">
                     <div class="row">
                        <div class="col-4 col-sm-2">
                            <section>
                                <h6>Normal</h6>
                                <div class="card">
                                    <div class="card-body"style="background-color:{{$palette->color_4}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanopia">
                                <h6>Protanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanomaly">
                                <h6>Protanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranopia">
                                <h6>Deuteranopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranomaly">
                                <h6>Deuteranomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanopia">
                                <h6>Tritanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanomaly">
                                <h6>Tritanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatopsia">
                                <h6>Achromatopsia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatomaly">
                                <h6>Achromatomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_4}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-color5" role="tabpanel" aria-labelledby="pills-color5-tab">
                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <section>
                                <h6>Normal</h6>
                                <div class="card">
                                    <div class="card-body"style="background-color:{{$palette->color_5}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanopia">
                                <h6>Protanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="protanomaly">
                                <h6>Protanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranopia">
                                <h6>Deuteranopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="deuteranomaly">
                                <h6>Deuteranomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanopia">
                                <h6>Tritanopia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="tritanomaly">
                                <h6>Tritanomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatopsia">
                                <h6>Achromatopsia</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-4 col-sm-2">
                            <section class="achromatomaly">
                                <h6>Achromatomaly</h6>
                                <div class="card">
                                    <div class="card-body" style="background-color:{{$palette->color_5}}">   
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <hr>
    <a class="twitter-share-button"
        href="https://twitter.com/intent/tweet?text={{$palette->name}}%20Palette%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
</div>
@endsection
@section('scripts')
    <script>
        function copyColor(){alert("Copied!")}function downloadimage(){var t=document.getElementById("htmltoimage");html2canvas(t,{allowTaint:!0}).then(function(t){var e=document.createElement("a");document.body.appendChild(e),e.download="palette{{$palette->name}}_{{$palette->id}}.jpg",e.href=t.toDataURL(),e.target="_blank",e.click()})}
    </script>
    <script>
        //twitter share btn
        window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)||((n=t.createElement(e)).id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)}),w}(document,"script","twitter-wjs");
    </script>
@endsection