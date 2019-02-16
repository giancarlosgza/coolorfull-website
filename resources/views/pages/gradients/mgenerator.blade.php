@extends('layouts.app')
@section('title', '3 Colors-Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">3 Colors-Gradient Generator</h4>
        </div>
    </div>
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6 col-sm-6">
                    <label for="color_1" class="bold">Color 1</label><br>
                    <input type="text" class="form-control" id="color_1" value="#7646AD">        
                </div>
                <div class="form-group col-6 col-sm-6">
                    <label for="color_2" class="bold">Color 2</label><br>
                    <input type="text" class="form-control" id="color_2" value="#EC3C5D">
                </div>
                <div class="form-group col-12 col-sm-12">
                    <label for="color_3" class="bold">Color 3</label><br>
                    <input type="text" class="form-control" id="color_3" value="#FFC8D0">
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
    <a class="twitter-share-button "
        href="https://twitter.com/intent/tweet?text=Hey!%20Check%20this%20amazing%203%20colors%20gradient%20generator!%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
</div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript">
    $('#color_1').minicolors({ animationEasing: 'swing'});
    $('#color_2').minicolors({ animationEasing: 'swing'});
    $('#color_3').minicolors({ animationEasing: 'swing'});

    //hex to rgb and hsl converter
    $(window).on('load', function(){

    /* Change color on every key input. 1*/
    $('#color_1').bind('blur keydown', function (event) {
        var el = this;
        setTimeout(function () {
            var color1 = document.getElementById("color_1").value;
            var color2 = document.getElementById("color_2").value;
            var color3 = document.getElementById("color_3").value;

            var rgb = [],
                $input = $(el),
                fail = false,
                original = $input.val(),
            
            color_1 = (original+'').replace(/#/, '');
            
            if (original.length === 1 && original !== '#') { $input.val('#' + original); }
            if (color_1.length == 3) color_1 = color_1 + color_1;

            for (var i = 0; i < 6; i+=2) {
            rgb.push(parseInt(color_1.substr(i,2),16));
            fail = fail || rgb[rgb.length - 1].toString() === 'NaN';
            }
            
            document.getElementById("gradient_preview").style.background ="linear-gradient(to right, " + color1 + "," + color2 + ", " + color3 + ")";
            document.getElementById("hexadecimal").innerHTML = "background: linear-gradient(to right, " + color1 + "," + color2 + "," + color3 + ");";
            document.getElementById("css_code").innerHTML = color1 + ", " + color2 + ", " + color3;
            document.getElementById("rgb").innerHTML = 'rgb(' + rgb + ')';
            document.getElementById("hsl").innerHTML = 'hsl(' + rgbToHsl.apply(null, rgb).join(',') + ')';
            document.getElementById("cmyk").innerHTML = 'cmyk(' + rgb2cmyk.apply(null, rgb) + ')';
        }, 13);
    });
    /* Change color on every key input. 2*/
    $('#color_2').bind('blur keydown', function (event) {
        var el = this;
        setTimeout(function () {
            var color1 = document.getElementById("color_1").value;
            var color2 = document.getElementById("color_2").value;
            var color3 = document.getElementById("color_3").value;

            var rgb = [],
                $input = $(el),
                fail = false,
                original = $input.val(),
            
            color_2 = (original+'').replace(/#/, '');
            
            if (original.length === 1 && original !== '#') { $input.val('#' + original); }
            if (color_2.length == 3) color_2 = color_2 + color_2;

            for (var i = 0; i < 6; i+=2) {
            rgb.push(parseInt(color_2.substr(i,2),16));
            fail = fail || rgb[rgb.length - 1].toString() === 'NaN';
            }
            
            document.getElementById("gradient_preview").style.background ="linear-gradient(to right, " + color1 + "," + color2 + ", " + color3 + ")";
            document.getElementById("hexadecimal").innerHTML = "background: linear-gradient(to right, " + color1 + "," + color2 + "," + color3 + ");";
            document.getElementById("css_code").innerHTML = color1 + ", " + color2 + ", " + color3;
            document.getElementById("rgb2").innerHTML = 'rgb(' + rgb + ')';
            document.getElementById("hsl2").innerHTML = 'hsl(' + rgbToHsl.apply(null, rgb).join(',') + ')';
            document.getElementById("cmyk2").innerHTML = 'cmyk(' + rgb2cmyk.apply(null, rgb) + ')';
        }, 13);
    });
    /* Change color on every key input. */
    $('#color_3').bind('blur keydown', function (event) {
        var el = this;
        setTimeout(function () {
            var color1 = document.getElementById("color_1").value;
            var color2 = document.getElementById("color_2").value;
            var color3 = document.getElementById("color_3").value;

            var rgb = [],
                $input = $(el),
                fail = false,
                original = $input.val(),
            
            color_3 = (original+'').replace(/#/, '');
            
            if (original.length === 1 && original !== '#') { $input.val('#' + original); }
            if (color_3.length == 3) color_3 = color_3 + color_3;

            for (var i = 0; i < 6; i+=2) {
            rgb.push(parseInt(color_3.substr(i,2),16));
            fail = fail || rgb[rgb.length - 1].toString() === 'NaN';
            }
            
            document.getElementById("gradient_preview").style.background ="linear-gradient(to right, " + color1 + "," + color2 + ", " + color3 + ")";
            document.getElementById("hexadecimal").innerHTML = "background: linear-gradient(to right, " + color1 + "," + color2 + "," + color3 + ");";
            document.getElementById("css_code").innerHTML = color1 + ", " + color2 + ", " + color3;
            document.getElementById("rgb3").innerHTML = 'rgb(' + rgb + ')';
            document.getElementById("hsl3").innerHTML = 'hsl(' + rgbToHsl.apply(null, rgb).join(',') + ')';
            document.getElementById("cmyk3").innerHTML = 'cmyk(' + rgb2cmyk.apply(null, rgb) + ')';
        }, 13);
    });
    /* Function to convert rgb-to-hsl. */
    function rgbToHsl(r, g, b){
        r /= 255, g /= 255, b /= 255;
        var max = Math.max(r, g, b), min = Math.min(r, g, b);
        var h, s, l = (max + min) / 2;

        if (max == min) { h = s = 0; } 
        else {
            var d = max - min;
            s = l > 0.5 ? d / (2 - max - min) : d / (max + min);

            switch (max){
                case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                case g: h = (b - r) / d + 2; break;
                case b: h = (r - g) / d + 4; break;
            }
            h /= 6;
        }
        return [(h*360+0.5)|0, ((s*100+0.5)|0) + '%', ((l*100+0.5)|0) + '%'];
    }

    //RGB TO CMYK
    function rgb2cmyk (r,g,b) {
        var C = 0;
        var M = 0;
        var Y = 0;
        var K = 0;
        //remove spaces from input RGB values, convert to int
        var r = parseInt( (''+r).replace(/\s/g,''),10 ); 
        var g = parseInt( (''+g).replace(/\s/g,''),10 ); 
        var b = parseInt( (''+b).replace(/\s/g,''),10 ); 

        // BLACK
        if (r==0 && g==0 && b==0) {
        K = 1;
        return [0,0,0,1];
        }

        C = 1 - (r/255);
        M = 1 - (g/255);
        Y = 1 - (b/255);

        var minCMY = Math.min(C,
                    Math.min(M,Y));
        C = (C - minCMY) / (1 - minCMY) ;
        M = (M - minCMY) / (1 - minCMY) ;
        Y = (Y - minCMY) / (1 - minCMY) ;
        K = minCMY;

        return [((C*100+0.5)|0) + '%', ((M*100+0.5)|0) + '%', ((Y*100+0.5)|0) + '%', ((K*100+0.5)|0) + '%'];
        }
    });
    //download image
    function downloadimage(){
	 	//var container = document.getElementById("image-wrap"); //specific element on page
		var container = document.getElementById("gradient_preview");; // full page 
		html2canvas(container,{allowTaint : true}).then(function(canvas) {
		
			var link = document.createElement("a");
			document.body.appendChild(link);
			link.download = "newGradient.jpg";
			link.href = canvas.toDataURL();
			link.target = '_blank';
			link.click();
		});
	}
    </script>
    <script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
    </script>
@endsection