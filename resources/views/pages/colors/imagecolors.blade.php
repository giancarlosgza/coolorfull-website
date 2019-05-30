@extends('layouts.app')
@section('title', 'Image Colors')
@section('content')
<style>
    .file{height:75px;border:1px solid #fff;margin:10px 5px 0 0;border-radius:15px}.img-palette{color:#000;text-align:center;font-weight:700}
    .svg-1{width:100px}.svg-2{width:120px}.svg-3{width:85px}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">Image Colors</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-medium">
                <div class="card-body">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <br>
                    <img id="img" class="file" src="" alt="">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @guest
                            <button class="btn btn-gradient" disabled>
                                <i class="fas fa-lock"></i>
                                Get IMG (PRO)
                            </button>
                            @else
                            <a class="btn btn-gradient" onclick="downloadimage()">
                                <i class="fas fa-image"></i>
                                Get IMG
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow-medium">
                <div class="card-body" id="palette-preview">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="htmltoimage" class="list-group">
                                <li id="palette-1" class="list-group-item palette-show"> </li>
                                <li id="palette-2" class="list-group-item palette-show"></li>
                                <li id="palette-3" class="list-group-item palette-show"></li>
                                <li id="palette-4" class="list-group-item palette-show"></li>
                                <li id="palette-5" class="list-group-item palette-show"></li>
                                <li id="palette-6" class="list-group-item palette-show"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="text-montserrat">Icon Preview</h4>
            <div class="card shadow-medium">
                <div class="card-body">
                    @guest
                    <h6>Do you want to see the color palette applied to an icon?</h6>
                    <h6><a class="text-montserrat color-indigo" href="/pricing">JOIN</a> Colorffy and become Pro</h6>
                    @else
                    <div class="row text-center">
                        <div class="col-12">
                            <?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
                            <svg class="svg-2" data-name="Capa 1" viewBox="0 0 581.24 345.71" xmlns="http://www.w3.org/2000/svg">
                                <title>Pc-icon</title>
                                <path class="cls-1" transform="translate(-279.76 -211.29)" d="m560 413s91 140 238 99"/>
                                <path class="cls-1" transform="translate(-279.76 -211.29)" d="m541 423.5s91 140 238 99"/>
                                <polygon id="palette-66" class="cls-2" points="230.58 323.95 186.58 323.95 166.17 56.09 248.93 56.09"/>
                                <rect id="palette-11" class="cls-3" width="412.32" height="271" rx="27.36" ry="27.36"/>
                                <rect id="palette-44" class="cls-4" x="125.17" y="310.63" width="169.4" height="33" rx="16.5" ry="16.5"/>
                                <path id="palette-22" class="cls-5" transform="translate(-279.76 -211.29)" d="M664,436.26V250.35a16,16,0,0,0-16.22-15.74H325.22a16.37,16.37,0,0,0-12.79,6.12L660,446.51A15.39,15.39,0,0,0,664,436.26Z"/>
                                <path class="cls-6" transform="translate(-279.76 -211.29)" d="M312.42,240.73a15.35,15.35,0,0,0-3.42,9.62V436.26A16,16,0,0,0,325.22,452H647.78A16.38,16.38,0,0,0,660,446.51Z"/>
                                <rect id="palette-33" class="cls-4" transform="translate(116.28 960.26) rotate(-90)" x="614.54" y="310.54" width="338.5" height="154.42" rx="9.44" ry="9.44"/>
                                <rect id="palette-55" class="cls-2" transform="translate(116.53 956.99) rotate(-90)" x="633.28" y="331.28" width="298" height="109.43" rx="7.53" ry="7.53"/>
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
                    @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/color-thief.js') }}"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    $(function(){$(":file").change(function(){if(this.files&&this.files[0]){var a=new FileReader;a.onload=imageIsLoaded,a.readAsDataURL(this.files[0])}setTimeout(function(){var a=new ColorThief,b=$("#img")[0];console.log(b);var c=a.getPalette(b,6);console.log("Palettes:"+c),document.getElementById("palette-1").style.backgroundColor="rgb("+c[0]+")",document.getElementById("palette-1").innerHTML="rgb("+c[0]+")",document.getElementById("palette-2").style.backgroundColor="rgb("+c[1]+")",document.getElementById("palette-2").innerHTML="rgb("+c[1]+")",document.getElementById("palette-3").style.backgroundColor="rgb("+c[2]+")",document.getElementById("palette-3").innerHTML="rgb("+c[2]+")",document.getElementById("palette-4").style.backgroundColor="rgb("+c[3]+")",document.getElementById("palette-4").innerHTML="rgb("+c[3]+")",document.getElementById("palette-5").style.backgroundColor="rgb("+c[4]+")",document.getElementById("palette-5").innerHTML="rgb("+c[4]+")",document.getElementById("palette-6").style.backgroundColor="rgb("+c[5]+")",document.getElementById("palette-6").innerHTML="rgb("+c[5]+")"
    @guest
    @else
    document.getElementById("palette-11").style.fill="rgb("+c[0]+")",document.getElementById("palette-22").style.fill="rgb("+c[1]+")",document.getElementById("palette-33").style.fill="rgb("+c[2]+")",document.getElementById("palette-44").style.fill="rgb("+c[3]+")",document.getElementById("palette-55").style.fill="rgb("+c[4]+")",document.getElementById("palette-66").style.fill="rgb("+c[5]+")"
    @endif
    console.log("FINISH")},1e3)})});
    function imageIsLoaded(a){$("#img").attr("src",a.target.result),console.log("START")}
    function downloadimage(){var a=document.getElementById("palette-preview");html2canvas(a,{allowTaint:!0}).then(function(a){var b=document.createElement("a");document.body.appendChild(b),b.download="newPalette.jpg",b.href=a.toDataURL(),b.target="_blank",b.click()})}
</script>
@endsection