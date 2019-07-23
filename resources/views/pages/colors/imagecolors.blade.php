@extends('layouts.app')
@section('title', 'Color Extraction')
@section('content')
<style>
    .file{height:100%; width: 100%; border-radius:15px}.img-palette{color:#000;text-align:center; background: azure;}
    .svg-1{width:100px}.svg-2{width:120px}.svg-3{width:85px}
    .upload-btn-wrapper{position:relative;overflow:hidden;display:inline-block}.upload-btn-wrapper input[type=file]{font-size:100px;position:absolute;left:0;top:0;opacity:0}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">Color Extraction <span class="badge badge-secondary">Beta</span></h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-medium">
                <div class="card-body text-center">
                    
                    <h3 class="font-weight-bold">Upload or take a photo</h3>
                    <h5>PNG, JPEG, JPG or SVG</h5>
                    <br>
                    <div class="row">
                        <div class="col-6 text-right">
                            <div class="upload-btn-wrapper">
                                <button class="btn btn-primary shadow-medium"><i class="fas fa-upload"></i> Choose file</button>
                                <input type="file" name="myfile" />
                            </div>
                        </div>
                        <div class="col-6 text-left">
                            <a class="btn btn-secondary" onclick="downloadimage()">
                                <i class="fas fa-image"></i>
                                Get IMG
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow-medium">
                <div class="card-body" id="palette-preview">
                    <div class="row">
                        <div class="col-md-8">
                            <img id="img" class="file" src="" alt="">
                        </div>
                        <div class="col-md-4">
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
                    <div class="col-md-12">
                        <br>
                        <h6 class="font-weight-bold">By colorffy.com</h6>
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
    $(function(){$(":file").change(function(){if(this.files&&this.files[0]){var a=new FileReader;a.onload=imageIsLoaded,a.readAsDataURL(this.files[0])}setTimeout(function(){var a=new ColorThief,b=$("#img")[0];console.log(b);var c=a.getPalette(b,6);console.log("Palettes:"+c),document.getElementById("palette-1").style.backgroundColor="rgb("+c[0]+")",document.getElementById("palette-2").style.backgroundColor="rgb("+c[1]+")",document.getElementById("palette-3").style.backgroundColor="rgb("+c[2]+")",document.getElementById("palette-4").style.backgroundColor="rgb("+c[3]+")",document.getElementById("palette-5").style.backgroundColor="rgb("+c[4]+")",document.getElementById("palette-6").style.backgroundColor="rgb("+c[5]+")"
    
    document.getElementById("palette-11").style.fill="rgb("+c[0]+")",document.getElementById("palette-22").style.fill="rgb("+c[1]+")",document.getElementById("palette-33").style.fill="rgb("+c[2]+")",document.getElementById("palette-44").style.fill="rgb("+c[3]+")",document.getElementById("palette-55").style.fill="rgb("+c[4]+")",document.getElementById("palette-66").style.fill="rgb("+c[5]+")"

    console.log("FINISH")},1e3)})});
    function imageIsLoaded(a){$("#img").attr("src",a.target.result),console.log("START")}
    function downloadimage(){var a=document.getElementById("palette-preview");html2canvas(a,{allowTaint:!0}).then(function(a){var b=document.createElement("a");document.body.appendChild(b),b.download="newPalette.jpg",b.href=a.toDataURL(),b.target="_blank",b.click()})}
</script>
@endsection