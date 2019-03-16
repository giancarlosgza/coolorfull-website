@extends('layouts.app')
@section('title', '3 Colors-Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">🎯 3 Colors-Gradient Generator</h4>
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
                <div class="form-group col-12 col-sm-12">
                    <label for="color_3" class="bold">Color 3</label><br>
                    <input type="text" class="form-control" id="color_3" value="#000000">
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
                    <code><h6 class="bold" id="hexadecimal"></h6></code>
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
                        <h6 class="bold" id="rgb3"></h6>
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
                        <h6 class="bold" id="hsl3"></h6>
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
                        <h6 class="bold" id="cmyk3"></h6>
                    </code>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="sharethis-inline-share-buttons"></div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript">
        function downloadimage(){var e=document.getElementById("gradient_preview");html2canvas(e,{allowTaint:!0}).then(function(e){var n=document.createElement("a");document.body.appendChild(n),n.download="newGradient.jpg",n.href=e.toDataURL(),n.target="_blank",n.click()})}$("#color_1").minicolors({animationEasing:"swing"}),$("#color_2").minicolors({animationEasing:"swing"}),$("#color_3").minicolors({animationEasing:"swing"}),$(window).on("load",function(){function m(e,n,t){e/=255,n/=255,t/=255;var l,r,o=Math.max(e,n,t),a=Math.min(e,n,t),i=(o+a)/2;if(o==a)l=r=0;else{var d=o-a;switch(r=.5<i?d/(2-o-a):d/(o+a),o){case e:l=(n-t)/d+(n<t?6:0);break;case n:l=(t-e)/d+2;break;case t:l=(e-n)/d+4}l/=6}return[360*l+.5|0,(100*r+.5|0)+"%",(100*i+.5|0)+"%"]}function g(e,n,t){var l=0,r=0,o=0;e=parseInt((""+e).replace(/\s/g,""),10),n=parseInt((""+n).replace(/\s/g,""),10),t=parseInt((""+t).replace(/\s/g,""),10);if(0==e&&0==n&&0==t)return[0,0,0,1];l=1-e/255,r=1-n/255,o=1-t/255;var a=Math.min(l,Math.min(r,o));return[(100*(l=(l-a)/(1-a))+.5|0)+"%",(100*(r=(r-a)/(1-a))+.5|0)+"%",(100*(o=(o-a)/(1-a))+.5|0)+"%",(100*a+.5|0)+"%"]}$("#color_1").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")",document.getElementById("hexadecimal").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");",document.getElementById("css_code").innerHTML=e+", "+n+", "+t,document.getElementById("rgb").innerHTML="rgb("+l+")",document.getElementById("hsl").innerHTML="hsl("+m.apply(null,l).join(",")+")",document.getElementById("cmyk").innerHTML="cmyk("+g.apply(null,l)+")"},13)}),$("#color_2").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")",document.getElementById("hexadecimal").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");",document.getElementById("css_code").innerHTML=e+", "+n+", "+t,document.getElementById("rgb2").innerHTML="rgb("+l+")",document.getElementById("hsl2").innerHTML="hsl("+m.apply(null,l).join(",")+")",document.getElementById("cmyk2").innerHTML="cmyk("+g.apply(null,l)+")"},13)}),$("#color_3").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")",document.getElementById("hexadecimal").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");",document.getElementById("css_code").innerHTML=e+", "+n+", "+t,document.getElementById("rgb3").innerHTML="rgb("+l+")",document.getElementById("hsl3").innerHTML="hsl("+m.apply(null,l).join(",")+")",document.getElementById("cmyk3").innerHTML="cmyk("+g.apply(null,l)+")"},13)})});
    </script>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons' async='async'></script>
@endsection