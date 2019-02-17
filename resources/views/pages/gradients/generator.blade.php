@extends('layouts.app')
@section('title', '2 Colors-Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">🎯 2 Colors-Gradient Generator</h4>
        </div>
    </div>
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6 col-sm-6">
                    <label for="color_1" class="bold">Color 1</label><br>
                    <input type="text" class="form-control" id="color_1" value="#000000">        
                </div>
                <div class="form-group col-6 col-sm-6">
                    <label for="color_2" class="bold">Color 2</label><br>
                    <input type="text" class="form-control" id="color_2" value="#000000">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="jumbotron jumbotron-fluid" id="gradient_preview">
            </div>
        </div>
        <div class="col-12 col-sm-12">
            <a class="btn btn-gradient" onclick="downloadimage()">
                <i class="fas fa-image"></i>
                Get IMG
            </a><hr>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">CSS</h5>
                    <code>
                        <h6 class="bold" id="hexadecimal"></h6>
                    </code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">HEX</h5>
                    <code>
                        <h6 class="bold" id="css_code"></h6>
                    </code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">RGB</h5>
                    <code>
                        <h6 class="bold" id="rgb"></h6>
                        <h6 class="bold" id="rgb2"></h6>
                    </code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">HSL</h5>
                    <code>
                        <h6 class="bold" id="hsl"></h6>
                        <h6 class="bold" id="hsl2"></h6>
                    </code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">CMYK</h5>
                    <code>
                        <h6 class="bold" id="cmyk"></h6>
                        <h6 class="bold" id="cmyk2"></h6>
                    </code>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <a class="twitter-share-button"
        href="https://twitter.com/intent/tweet?text=Hey!%20Check%20this%20amazing%202%20colors%20gradient%20generator!%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
</div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript">
        function downloadimage(){var e=document.getElementById("gradient_preview");html2canvas(e,{allowTaint:!0}).then(function(e){var n=document.createElement("a");document.body.appendChild(n),n.download="newGradient.jpg",n.href=e.toDataURL(),n.target="_blank",n.click()})}$("#color_1").minicolors({animationEasing:"swing"}),$("#color_2").minicolors({animationEasing:"swing"}),$(window).on("load",function(){function d(e,n,t){e/=255,n/=255,t/=255;var r,a,l=Math.max(e,n,t),o=Math.min(e,n,t),i=(l+o)/2;if(l==o)r=a=0;else{var c=l-o;switch(a=.5<i?c/(2-l-o):c/(l+o),l){case e:r=(n-t)/c+(n<t?6:0);break;case n:r=(t-e)/c+2;break;case t:r=(e-n)/c+4}r/=6}return[360*r+.5|0,(100*a+.5|0)+"%",(100*i+.5|0)+"%"]}function m(e,n,t){var r=0,a=0,l=0;e=parseInt((""+e).replace(/\s/g,""),10),n=parseInt((""+n).replace(/\s/g,""),10),t=parseInt((""+t).replace(/\s/g,""),10);if(0==e&&0==n&&0==t)return[0,0,0,1];r=1-e/255,a=1-n/255,l=1-t/255;var o=Math.min(r,Math.min(a,l));return[(100*(r=(r-o)/(1-o))+.5|0)+"%",(100*(a=(a-o)/(1-o))+.5|0)+"%",(100*(l=(l-o)/(1-o))+.5|0)+"%",(100*o+.5|0)+"%"]}$("#color_1").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=[],r=$(c),a=!1,l=r.val(),o=(l+"").replace(/#/,"");1===l.length&&"#"!==l&&r.val("#"+l),3==o.length&&(o+=o);for(var i=0;i<6;i+=2)t.push(parseInt(o.substr(i,2),16)),a=a||"NaN"===t[t.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+")",document.getElementById("hexadecimal").innerHTML="background: linear-gradient(to right, "+e+","+n+");",document.getElementById("css_code").innerHTML=e+", "+n,document.getElementById("rgb").innerHTML="rgb("+t+")",document.getElementById("hsl").innerHTML="hsl("+d.apply(null,t).join(",")+")",document.getElementById("cmyk").innerHTML="cmyk("+m.apply(null,t)+")"},13)}),$("#color_2").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=[],r=$(c),a=!1,l=r.val(),o=(l+"").replace(/#/,"");1===l.length&&"#"!==l&&r.val("#"+l),3==color_1.length&&(o+=o);for(var i=0;i<6;i+=2)t.push(parseInt(o.substr(i,2),16)),a=a||"NaN"===t[t.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+")",document.getElementById("hexadecimal").innerHTML="background: linear-gradient(to right, "+e+","+n+");",document.getElementById("css_code").innerHTML=e+", "+n,document.getElementById("rgb2").innerHTML="rgb("+t+")",document.getElementById("hsl2").innerHTML="hsl("+d.apply(null,t).join(",")+")",document.getElementById("cmyk2").innerHTML="cmyk("+m.apply(null,t)+")"},13)})});
    </script>
    <script>
        //twitter share btn
        window.twttr=function(t,e,r){var n,i=t.getElementsByTagName(e)[0],w=window.twttr||{};return t.getElementById(r)||((n=t.createElement(e)).id=r,n.src="https://platform.twitter.com/widgets.js",i.parentNode.insertBefore(n,i),w._e=[],w.ready=function(t){w._e.push(t)}),w}(document,"script","twitter-wjs");
    </script>
@endsection