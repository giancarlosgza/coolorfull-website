@extends('layouts.app')
@section('title', "$gradient->name")
@section('content')
<style>
    .protanopia{-webkit-filter:url(/assets/img/filters.svg#protanopia);filter:url(/assets/img/filters.svg#protanopia)}.protanomaly{-webkit-filter:url(/assets/img/filters.svg#protanomaly);filter:url(/assets/img/filters.svg#protanomaly)}.deuteranopia{-webkit-filter:url(/assets/img/filters.svg#deuteranopia);filter:url(/assets/img/filters.svg#deuteranopia)}.deuteranomaly{-webkit-filter:url(/assets/img/filters.svg#deuteranomaly);filter:url(/assets/img/filters.svg#deuteranomaly)}.tritanopia{-webkit-filter:url(/assets/img/filters.svg#tritanopia);filter:url(/assets/img/filters.svg#tritanopia)}.tritanomaly{-webkit-filter:url(/assets/img/filters.svg#tritanomaly);filter:url(/assets/img/filters.svg#tritanomaly)}.achromatopsia{-webkit-filter:url(/assets/img/filters.svg#achromatopsia);filter:url(/assets/img/filters.svg#achromatopsia)}.achromatomaly{-webkit-filter:url(/assets/img/filters.svg#achromatomaly);filter:url(/assets/img/filters.svg#achromatomaly)}
    .bg-1{background-color:{{$gradient->color_1}}}.bg-2{background-color:{{$gradient->color_2}}}.bg-gradient{background:linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}})}.bg-3-gradient{background:linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}})}.bg-3{background-color:{{$gradient->color_3}}}.color-1{color:{{$gradient->color_1}}}.color-2{color:{{$gradient->color_2}}}.color-3{color:{{$gradient->color_3}}}
</style>
<div class="container btn-return">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link color-indigo" href="/gradients/catalog"><i class="fas fa-arrow-left"></i> Gradients</a>
            <br>
        </div>
    </div>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy"
            data-clipboard-text="{{$gradient->color_1}}">
            <i class="fas fa-circle color-1"></i> {{$gradient->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy"
            data-clipboard-text="{{$gradient->color_2}}">
            <i class="fas fa-circle color-2"></i> {{$gradient->color_2}}
        </a>
    </li>
    @if($gradient->color_3)
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy"
            data-clipboard-text="{{$gradient->color_3}}">
            <i class="fas fa-circle color-3"></i> {{$gradient->color_3}}
        </a>
    </li>
    @else
    @endif
</ul><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card shadow-medium">
                <div class="card-body">
                   <h4 class="text-center text-poppins uppercase">{{$gradient->name}}</h4>
                    <div id="htmltoimage" class="card-form jumbotron jumbotron-fluid @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <!-- Button trigger modal -->
            <a class="btn btn-gradient" data-toggle="modal" data-target="#exampleModal">
                <i class="fab fa-css3-alt"></i> 
                Get CSS
            </a>
            <a class="btn btn-gradient" onclick="downloadimage()">
                <i class="fas fa-image"></i>
                Get IMG
            </a>
            <hr>
            <div class="card shadow-medium">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">🎨</th>
                                <th scope="col" class="text-poppins">👨‍💻 HEX</th>
                                <th scope="col" class="text-poppins">💻 RGB</th>
                                <th scope="col" class="text-poppins">💡 HSL</th>
                                <th scope="col" class="text-poppins">🖨️ CMYK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><i class="fas fa-circle color-1"></i></th>
                                    <td>{{$gradient->color_1}}</td>
                                    <td><?php $hex="$gradient->color_1"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                                    <td id="hsl"></td>
                                    <td id="cmyk"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fas fa-circle color-2"></i></th>
                                    <td>{{$gradient->color_2}}</td>
                                    <td><?php $hex="$gradient->color_2"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                                    <td id="hsl2"></td>
                                    <td id="cmyk2"></td>
                                </tr>
                                @if($gradient->color_3)
                                <tr>
                                    <th scope="row"><i class="fas fa-circle color-3"></i></th>
                                    <td>{{$gradient->color_3}}</td>
                                    <td><?php $hex="$gradient->color_3"; list($r, $g, $b)=sscanf($hex, "#%02x%02x%02x"); echo "rgb($r, $g, $b)"; ?></td>
                                    <td id="hsl3"></td>
                                    <td id="cmyk3"></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <h3 class="text-poppins">Preview UI Components</h3>
    <h6><strong>Note:</strong> The color blindness filters doesn't work on some browsers</h6>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="" class="font-weight-bold">Color Blindnes Filter</label>
            <select name="" class="form-control" id="selectBox" onchange="changeFunc();">
                <option value="" selected disabled>-Select-</option>
                <option value="Normal">Normal</option>
                <option value="Protanopia">Protanopia</option>
                <option value="Protanomaly">Protanomaly</option>
                <option value="Deuteranopia">Deuteranopia</option>
                <option value="Deuteranomaly">Deuteranomaly</option>
                <option value="Tritanopia">Tritanopia</option>
                <option value="Tritanomaly">Tritanomaly</option>
                <option value="Achromatopsia">Achromatopsia</option>
                <option value="Achromatomaly">Achromatomaly</option>
            </select>
        </div>
    </div>
    <div class="card shadow-medium">
        <div class="card-body">  
            <!--UI ELEMENTS-->
            <div class="" id="sectionFilter">
            <div class="row"> <div class="col-sm-12 col-md-6"><br> <h3>Buttons</h3> <div class="btn btn-outline-light btn-sm @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">{{$gradient->name}}</div> <div class="btn btn-outline-light @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">{{$gradient->name}}</div> <div class="btn btn-outline-light btn-lg @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">{{$gradient->name}}</div> </div> <div class="col-sm-12 col-md-6"><br> <h3>Badges</h3> <span class="badge badge-light uppercase @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">{{$gradient->name}}</span> <span class="badge badge-dark uppercase @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif">{{$gradient->name}}</span> </div> <div class="col-sm-12 col-md-6"><br> <h3>Navbar black text</h3> <nav class="navbar navbar-expand-lg navbar-dark @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif"> <a class="navbar-brand text-dark text-poppins">Colorffy</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarNav2"> <ul class="navbar-nav"> <li class="nav-item"> <a class="nav-link text-dark">Home</a> </li> <li class="nav-item"> <a class="nav-link text-dark">Gradients</a> </li> </ul> </div> </nav> </div> <div class="col-sm-12 col-md-6"><br> <h3>Navbar white text</h3> <nav class="navbar navbar-expand-lg navbar-dark bg-dark @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif"> <a class="navbar-brand text-white logo">Colorffy</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarNav3"> <ul class="navbar-nav"> <li class="nav-item"> <a class="nav-link">Home</a> </li> <li class="nav-item"> <a class="nav-link">Gradients</a> </li> </ul> </div> </nav> </div></div><div class="row"> <div class="col-sm-12 col-md-6"><br> <h3>Card black text</h3> <div class="card text-body shadow-medium @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif"> <div class="card-body"> <h3 class="card-title text-dark"><i class="far fa-clock"></i> 9:30 AM</h3> <p class="card-text bold text-dark">Work Meeting</p> </div> </div> </div> <div class="col-sm-12 col-md-6"><br> <h3>Card white text</h3> <div class="card text-white shadow-medium @if($gradient->color_3) bg-3-gradient @else bg-gradient @endif"> <div class="card-body"> <h3 class="card-title"><i class="far fa-clock"></i> 6:30 PM</h3> <p class="card-text bold">Pizza time!</p> </div> </div> </div></div>
            </div>
        </div>
    </div>
    <h3 class="text-poppins">Color Blindness</h3>
    <h6><strong>Note:</strong> The color blindness filters doesn't work on some browsers</h6>
    <div class="card shadow-medium">
        <div class="card-body">
            <!--COLOR BLINDNESS TABS-->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"> <li class="nav-item"> <a class="nav-link active" id="pills-color1-tab" data-toggle="pill" href="#pills-color1" role="tab" aria-controls="pills-color1" aria-selected="true">{{$gradient->color_1}}</a> </li> <li class="nav-item"> <a class="nav-link" id="pills-color2-tab" data-toggle="pill" href="#pills-color2" role="tab" aria-controls="pills-color2" aria-selected="false">{{$gradient->color_2}}</a> </li> @if($gradient->color_3) <li class="nav-item"> <a class="nav-link" id="pills-color3-tab" data-toggle="pill" href="#pills-color3" role="tab" aria-controls="pills-color3" aria-selected="false">{{$gradient->color_3}}</a> </li> @endif</ul><div class="tab-content" id="pills-tabContent"> <div class="tab-pane fade show active" id="pills-color1" role="tabpanel" aria-labelledby="pills-color1-tab"> <div class="row"> <div class="col-6 col-md-3 col-lg-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body bg-1"></div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body bg-1"> </div> </div> </section> </div> </div> </div> <div class="tab-pane fade" id="pills-color2" role="tabpanel" aria-labelledby="pills-color2-tab"> <div class="row"> <div class="col-6 col-md-3 col-lg-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body bg-2"> </div> </div> </section> </div> </div> </div> @if($gradient->color_3) <div class="tab-pane fade" id="pills-color3" role="tabpanel" aria-labelledby="pills-color3-tab"> <div class="row"> <div class="col-6 col-md-3 col-lg-2"> <section> <h6>Normal</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanopia"> <h6>Protanopia</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="protanomaly"> <h6>Protanomaly</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranopia"> <h6>Deuteranopia</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="deuteranomaly"> <h6>Deuteranomaly</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanopia"> <h6>Tritanopia</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="tritanomaly"> <h6>Tritanomaly</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatopsia"> <h6>Achromatopsia</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> <div class="col-6 col-md-3 col-lg-2"> <section class="achromatomaly"> <h6>Achromatomaly</h6> <div class="card"> <div class="card-body bg-3"> </div> </div> </section> </div> </div> </div> @endif</div>
        </div>
    </div>
    <hr>
    <div class="sharethis-inline-share-buttons"></div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title text-poppins uppercase" id="exampleModalLabel">CSS: {{$gradient->name}}</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <div class="table-responsive"> <table class="table table-hover table-borderless"> <thead> <tr class="h6-responsive"> <th scope="col">Orientation</th> <th scope="col">CSS</th> <th>Action</th> </tr> </thead> <tbody> <tr class="h6-responsive"> <th scope="row" class="text-center">➡️</th> <td><code>background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);</code></td> <td><button type="button" class="btn btn-primary shadow-medium " data-dismiss="modal" onclick="copyColor(this)" data-toggle="tooltip" title="Click to copy" data-clipboard-text="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);">Copy</button></td> </tr> <tr class="h6-responsive"> <th scope="row" class="text-center">⬅️</th> <td><code>background: linear-gradient(to left, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);</code></td> <td><button type="button" class="btn btn-primary shadow-medium " data-dismiss="modal" onclick="copyColor(this)" data-toggle="tooltip" title="Click to copy" data-clipboard-text="background: linear-gradient(to left, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);">Copy</button></td> </tr> <tr class="h6-responsive"> <th scope="row" class="text-center">⬇️</th> <td><code>background: linear-gradient(to bottom, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);</code></td> <td><button type="button" class="btn btn-primary shadow-medium " data-dismiss="modal" onclick="copyColor(this)" data-toggle="tooltip" title="Click to copy" data-clipboard-text="background: linear-gradient(to bottom, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);">Copy</button></td> </tr> <tr class="h6-responsive"> <th scope="row" class="text-center">⬆️</th> <td><code>background: linear-gradient(to top, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);</code></td> <td><button type="button" class="btn btn-primary shadow-medium " data-dismiss="modal" onclick="copyColor(this)" data-toggle="tooltip" title="Click to copy" data-clipboard-text="background: linear-gradient(to top, {{$gradient->color_1}}, {{$gradient->color_2}}@if($gradient->color_3), {{$gradient->color_3}}@endif);">Copy</button></td> </tr> </tbody> </table> </div> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary shadow-medium " data-dismiss="modal">Close</button> </div> </div> </div></div>
</div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" async='async'></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <script>
    new ClipboardJS(".btn"),$(document).ready(function(){$("[data-toggle=\"tooltip\"]").tooltip()});
    function copyColor(){const a=Swal.mixin({toast:!0,position:"top-end",showConfirmButton:!1,timer:3e3});a.fire({type:"success",title:"COPIED!"})}function downloadimage(){var t=document.getElementById("htmltoimage");html2canvas(t,{allowTaint:!0}).then(function(t){var a=document.createElement("a");document.body.appendChild(a),a.download="gradient{{$gradient->name}}_{{$gradient->id}}.jpg",a.href=t.toDataURL(),a.target="_blank",a.click()})}
    var C1="{{$gradient->color_1}}",C2="{{$gradient->color_2}}";hexToHsl("{{$gradient->color_1}}",C2);function hexToHsl(a,c){let d=0,e=0,f=0;4==a.length?(d="0x"+a[1]+a[1],e="0x"+a[2]+a[2],f="0x"+a[3]+a[3]):7==a.length&&(d="0x"+a[1]+a[2],e="0x"+a[3]+a[4],f="0x"+a[5]+a[6]),d/=255,e/=255,f/=255;let i=Math.min(d,e,f),j=Math.max(d,e,f),k=j-i,m=0,n=0,o=0;m=0==k?0:j==d?(e-f)/k%6:j==e?(f-d)/k+2:(d-e)/k+4,m=Math.round(60*m),0>m&&(m+=360),o=(j+i)/2,n=0==k?0:k/(1-Math.abs(2*o-1)),n=+(100*n).toFixed(1),o=+(100*o).toFixed(1);let p=0,q=0,t=0;4==c.length?(p="0x"+c[1]+c[1],q="0x"+c[2]+c[2],t="0x"+c[3]+c[3]):7==c.length&&(p="0x"+c[1]+c[2],q="0x"+c[3]+c[4],t="0x"+c[5]+c[6]),p/=255,q/=255,t/=255;let u=Math.min(p,q,t),v=Math.max(p,q,t),w=v-u,x=0,y=0,z=0;x=0==w?0:v==p?(q-t)/w%6:v==q?(t-p)/w+2:(p-q)/w+4,x=Math.round(60*x),0>x&&(x+=360),z=(v+u)/2,y=0==w?0:w/(1-Math.abs(2*z-1)),y=+(100*y).toFixed(1),z=+(100*z).toFixed(1),document.getElementById("hsl").innerHTML="hsl("+Math.round(m)+","+Math.round(n)+"%,"+Math.round(o)+"%)",document.getElementById("hsl2").innerHTML="hsl("+Math.round(x)+","+Math.round(y)+"%,"+Math.round(z)+"%)"}hexToCmyk("{{$gradient->color_1}}");function hexToCmyk(a){var c=0,d=0,e=0,f=0;a="#"==a.charAt(0)?a.substring(1,7):a;var h=parseInt(a.substring(0,2),16),i=parseInt(a.substring(2,4),16),g=parseInt(a.substring(4,6),16);c=1-h/255,d=1-i/255,e=1-g/255;var b=Math.min(c,Math.min(d,e));c=(c-b)/(1-b),d=(d-b)/(1-b),e=(e-b)/(1-b),f=b,document.getElementById("cmyk").innerHTML="cmyk("+Math.round(100*c)+"%,"+Math.round(100*d)+"%,"+Math.round(100*e)+"%,"+Math.round(100*f)+"%)"}hexToCmyk2(C2);function hexToCmyk2(a){var c=0,d=0,e=0,f=0;a="#"==a.charAt(0)?a.substring(1,7):a;var h=parseInt(a.substring(0,2),16),i=parseInt(a.substring(2,4),16),g=parseInt(a.substring(4,6),16);c=1-h/255,d=1-i/255,e=1-g/255;var b=Math.min(c,Math.min(d,e));c=(c-b)/(1-b),d=(d-b)/(1-b),e=(e-b)/(1-b),f=b,document.getElementById("cmyk2").innerHTML="cmyk("+Math.round(100*c)+"%,"+Math.round(100*d)+"%,"+Math.round(100*e)+"%,"+Math.round(100*f)+"%)"}
    @if($gradient->color_3)
    var C3="{{$gradient->color_3}}";hexToHsl3("{{$gradient->color_3}}");function hexToHsl3(a){let b=0,c=0,d=0;4==a.length?(b="0x"+a[1]+a[1],c="0x"+a[2]+a[2],d="0x"+a[3]+a[3]):7==a.length&&(b="0x"+a[1]+a[2],c="0x"+a[3]+a[4],d="0x"+a[5]+a[6]),b/=255,c/=255,d/=255;let e=Math.min(b,c,d),f=Math.max(b,c,d),g=f-e,h=0,i=0,j=0;h=0==g?0:f==b?(c-d)/g%6:f==c?(d-b)/g+2:(b-c)/g+4,h=Math.round(60*h),0>h&&(h+=360),j=(f+e)/2,i=0==g?0:g/(1-Math.abs(2*j-1)),i=+(100*i).toFixed(1),j=+(100*j).toFixed(1),document.getElementById("hsl3").innerHTML="hsl("+Math.round(h)+","+Math.round(i)+"%,"+Math.round(j)+"%)"}hexToCmyk3("{{$gradient->color_3}}");function hexToCmyk3(a){var c=0,d=0,e=0,f=0;a="#"==a.charAt(0)?a.substring(1,7):a;var h=parseInt(a.substring(0,2),16),i=parseInt(a.substring(2,4),16),g=parseInt(a.substring(4,6),16);c=1-h/255,d=1-i/255,e=1-g/255;var b=Math.min(c,Math.min(d,e));c=(c-b)/(1-b),d=(d-b)/(1-b),e=(e-b)/(1-b),f=b,document.getElementById("cmyk3").innerHTML="cymk("+Math.round(100*c)+"%,"+Math.round(100*d)+"%,"+Math.round(100*e)+"%,"+Math.round(100*f)+"%)"}
    @endif
    </script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons' async='async'></script>
    <script>
        function changeFunc(){var a=document.getElementById("selectBox"),b=a.options[a.selectedIndex].value;switch(b){case"Protanopia":console.log("Protanopia"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("protanopia");break;case"Protanomaly":console.log("Protanomaly"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("protanomaly");break;case"Deuteranopia":console.log("Deuteranopia"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("deuteranopia");break;case"Deuteranomaly":console.log("Deuteranomaly"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("deuteranomaly");break;case"Tritanopia":console.log("Tritanopia"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("tritanopia");break;case"Tritanomaly":console.log("Tritanomaly"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("tritanomaly");break;case"Achromatopsia":console.log("Achromatopsia"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("achromatopsia");break;case"Achromatomaly":console.log("Achromatomaly"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("achromatomaly");break;default:console.log("Normal"),document.getElementById("sectionFilter").className="";var c=document.getElementById("sectionFilter");c.classList.add("normal");}}
    </script>
@endsection
