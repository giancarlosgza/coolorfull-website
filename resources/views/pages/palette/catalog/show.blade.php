@extends('layouts.app')
@section('title', "$palette->name")
@section('content')
<style>
    .protanopia{-webkit-filter:url(/assets/img/filters.svg#protanopia);filter:url(/assets/img/filters.svg#protanopia)}.protanomaly{-webkit-filter:url(/assets/img/filters.svg#protanomaly);filter:url(/assets/img/filters.svg#protanomaly)}.deuteranopia{-webkit-filter:url(/assets/img/filters.svg#deuteranopia);filter:url(/assets/img/filters.svg#deuteranopia)}.deuteranomaly{-webkit-filter:url(/assets/img/filters.svg#deuteranomaly);filter:url(/assets/img/filters.svg#deuteranomaly)}.tritanopia{-webkit-filter:url(/assets/img/filters.svg#tritanopia);filter:url(/assets/img/filters.svg#tritanopia)}.tritanomaly{-webkit-filter:url(/assets/img/filters.svg#tritanomaly);filter:url(/assets/img/filters.svg#tritanomaly)}.achromatopsia{-webkit-filter:url(/assets/img/filters.svg#achromatopsia);filter:url(/assets/img/filters.svg#achromatopsia)}.achromatomaly{-webkit-filter:url(/assets/img/filters.svg#achromatomaly);filter:url(/assets/img/filters.svg#achromatomaly)}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-image:linear-gradient(to right,#255dce,#1c9fe7);border:0}
    .st0{fill:{{$palette->color_1}};stroke:{{$palette->color_2}};stroke-width:2;stroke-miterlimit:10}.st1{fill:{{$palette->color_2}}}.st2{fill:{{$palette->color_3}}}.st3{fill:{{$palette->color_4}}}.st4{fill:{{$palette->color_5}}}.st5{fill:{{$palette->color_1}};stroke:{{$palette->color_1}};stroke-width:2;stroke-miterlimit:10}
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
            @guest
            <h6>Do you want to see color blindness filter?</h6>
            <h6><a class="bold" href="/pricing">JOIN</a> Colorffy and become Pro</h6>
            @else
            <!--COLOR BLINDNESS TABS-->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> <li class="nav-item"> <a class="nav-link active" id="pills-color1-tab" data-toggle="pill" href="#pills-color1" role="tab" aria-controls="pills-color1" aria-selected="true">{{$palette->color_1}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color2-tab" data-toggle="pill" href="#pills-color2" role="tab" aria-controls="pills-color2" aria-selected="false">{{$palette->color_2}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color3-tab" data-toggle="pill" href="#pills-color3" role="tab" aria-controls="pills-color3" aria-selected="false">{{$palette->color_3}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color4-tab" data-toggle="pill" href="#pills-color4" role="tab" aria-controls="pills-color4" aria-selected="false">{{$palette->color_4}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color5-tab" data-toggle="pill" href="#pills-color5" role="tab" aria-controls="pills-color5" aria-selected="false">{{$palette->color_5}}</a> </li> </ul> <div class="tab-content" id="pills-tabContent"> <div class="tab-pane fade show active" id="pills-color1" role="tabpanel" aria-labelledby="pills-color1-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_1}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color2" role="tabpanel" aria-labelledby="pills-color2-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_2}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color3" role="tabpanel" aria-labelledby="pills-color3-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_3}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color4" role="tabpanel" aria-labelledby="pills-color4-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_4}}"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color5" role="tabpanel" aria-labelledby="pills-color5-tab"> <div class="row"> <div class="col-4 col-sm-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body"style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> <div class="col-4 col-sm-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body" style="background-color:{{$palette->color_5}}"> </div> </div> </section> </div> </div> </div> </div>
            @endguest
        </div>
    </div>
    <hr><!--ICONS WITH COLOR PALETTES-->
    <h4 class="bold">Icons</h4>
        <div class="card shadow-medium">
            <div class="card-body">
                @guest
                    <h6>Do you want to see the color palette applied to icons?</h6>
                    <h6><a class="bold" href="/pricing">JOIN</a> Colorffy and become Pro</h6>
                @else
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path class="st0" d="M17,34V17.5c0-0.6,0.7-0.5,1.3-0.5h65.3c0.6,0,1.4,0,1.4,0.5V34H17z"/>
                            <path class="st1" d="M86,35H14V17.6c0-2.2,2.2-3.6,4.4-3.6h63.2c2.2,0,4.4,1.4,4.4,3.6V35z"/>
                                <circle class="st2" cx="28.8" cy="22.3" r="2.9"/>
                                <circle class="st3" cx="27.9" cy="21.3" r="2.9"/>
                                <line class="st1" x1="29" x2="29" y1="21" y2="8"/>
                                <line class="st4" x1="27" x2="27" y1="21" y2="8"/>
                                <circle class="st2" cx="73.1" cy="22.3" r="2.9"/>
                                <circle class="st3" cx="72.1" cy="21.3" r="2.9"/>
                                <line class="st1" x1="73" x2="73" y1="21" y2="8"/>
                                <line class="st4" x1="71" x2="71" y1="21" y2="8"/>
                            <line class="st1" x1="43" x2="57" y1="30" y2="30"/>
                            <path class="st5" d="M81.6,92H18.4c-2.2,0-4.4-1.3-4.4-3.5V35h72v53.5C86,90.7,83.8,92,81.6,92z"/>
                                <path class="st0" d="M39,56.8l-4.5,1l-1.2-4.6l6.8-2.3H44v25h-5V56.8z"/>
                                <path class="st0" d="M60.7,55H49v-4h18v3.8L55.9,76h-6L60.7,55z"/>
                        </svg>   
                    </div>
                    <div class="col-6 col-sm-2">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path class="st0" d="M90,86c0,2.2-1.8,4-4,4H14c-2.2,0-4-1.8-4-4V14c0-2.2,1.8-4,4-4h72c2.2,0,4,1.8,4,4V86z"/>
                            <path class="st1" d="m13 87.9v-73.7c0-0.6 0.7-1.2 1.2-1.2h73.7c0.6 0 1.1 0.7 1.1 1.2v71.7c0 1.7-1.4 3.1-3.1 3.1h-71.7c-0.5 0-1.2-0.5-1.2-1.1z"/>
                            <path class="st2" d="m30.5 77.6c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.6 3.8-3.8 3.8z"/>
                            <path class="st3" d="m30.5 70.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3c0.1-2.4-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m43.5 77.6c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z"/>
                            <path class="st3" d="m43.5 70.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <circle class="st2" cx="56.5" cy="73.8" r="3.8"/>
                            <path class="st3" d="m56.5 70.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m69.5 77.6c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z"/>
                            <path class="st3" d="m69.5 70.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3c-0.1-1.8 1.4-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m30.5 64.7c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.6 3.8-3.8 3.8z"/>
                            <path class="st3" d="m30.5 57.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m43.5 64.7c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z"/>
                            <path class="st3" d="m43.5 57.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <circle class="st2" cx="56.5" cy="60.8" r="3.8"/>
                            <path class="st3" d="m56.5 57.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m30.5 51.7c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8c0.1 2.1-1.6 3.8-3.8 3.8z"/>
                            <path class="st3" d="m30.5 44.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m43.5 51.7c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z"/>
                            <path class="st3" d="m43.5 44.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st2" d="m56.5 51.7c-2.1 0-3.8-1.7-3.8-3.8s1.7-3.8 3.8-3.8 3.8 1.7 3.8 3.8-1.7 3.8-3.8 3.8z"/>
                            <path class="st3" d="m56.5 44.5c1.8 0 3.3 1.5 3.3 3.3s-1.5 3.3-3.3 3.3-3.3-1.5-3.3-3.3 1.5-3.3 3.3-3.3m0-1c-2.4 0-4.3 1.9-4.3 4.3s1.9 4.3 4.3 4.3 4.3-1.9 4.3-4.3-1.9-4.3-4.3-4.3z"/>
                            <path class="st4" d="m69.1 64.6c-1.9 0-3.5-1.6-3.5-3.5v-13.6c0-1.9 1.6-3.5 3.5-3.5h0.6c1.9 0 3.5 1.6 3.5 3.5v13.5c0 1.9-1.6 3.5-3.5 3.5h-0.6z"/>
                            <path class="st3" d="m69.8 44.5c1.7 0 3 1.3 3 3v13.5c0 1.7-1.3 3-3 3h-0.6c-1.7 0-3-1.3-3-3v-13.5c0-1.7 1.3-3 3-3h0.6m0-1h-0.6c-2.2 0-4 1.8-4 4v13.5c0 2.2 1.8 4 4 4h0.6c2.2 0 4-1.8 4-4v-13.5c0-2.2-1.8-4-4-4z"/>
                            <path class="st3" d="m26.3 29.6v-4.6c0-1.1 0.9-2 2-2h43.5c1.1 0 2 0.9 2 2v4.6c0 1.1-0.9 2-2 2h-43.5c-1.1 0-2-0.9-2-2z"/>
                            <line class="st5" x1="10" x2="16" y1="37" y2="37"/>
                            <line class="st5" x1="84" x2="90" y1="37" y2="37"/>
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
    <script>
        function copyColor(){alert("Copied!")}function downloadimage(){var t=document.getElementById("htmltoimage");html2canvas(t,{allowTaint:!0}).then(function(t){var e=document.createElement("a");document.body.appendChild(e),e.download="palette{{$palette->name}}_{{$palette->id}}.jpg",e.href=t.toDataURL(),e.target="_blank",e.click()})}
    </script>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons' async='async'></script>
@endsection