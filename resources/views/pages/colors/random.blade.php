@extends('layouts.app')
@section('title', 'Random Color')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">Random Color</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="jumbotron mb-2" id="color-random">
            </div>
            <h6 class="mt-0"><i class="material-icons-outlined">looks_one</i> Color</h6>
        </div>
        <div class="col-12 col-md-4">
            <div class="jumbotron mb-2" id="color-complementary">
            </div>
            <h6 class="mt-0"><i class="material-icons-outlined">looks_two</i> Complementary</h6>
        </div>
        <div class="col-md-12 mb-3">
            <hr>
            <button class="btn btn-primary shadow-medium" onClick="window.location.reload();">Reload page</button>
        </div>
        <div class="col-sm-12">
            <div class="card card-outline">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col" class="text-poppins">🎨</th>
                                <th scope="col" class="text-poppins">👨‍💻 HEX</th>
                                <th scope="col" class="text-poppins">💻 RGB</th>
                                <th scope="col" class="text-poppins">💡 HSL</th>
                                <th scope="col" class="text-poppins">🖨️ CMYK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><i class="fas fa-circle" id="color1"></i></th>
                                    <td id="hex"></td>
                                    <td id="rgb"></td>
                                    <td id="hsl"></td>
                                    <td id="cmyk"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fas fa-circle" id="color2"></i></th>
                                    <td id="hex2"></td>
                                    <td id="rgb2"></td>
                                    <td id="hsl2"></td>
                                    <td id="cmyk2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Colors.js/1.2.3/colors.min.js"></script>
<script>
var r,g,b,h,s,l,hex;r=Math.floor(256*Math.random()).toString(16),g=Math.floor(256*Math.random()).toString(16),b=Math.floor(256*Math.random()).toString(16),r=2===r.length?r:"0"+r,g=2===g.length?g:"0"+g,b=2===b.length?b:"0"+b,hex=r+g+b,document.getElementById("hex").innerHTML="#"+hex,document.getElementById("color-random").style.backgroundColor="#"+hex,document.getElementById("color1").style.color="#"+hex;var C1="#"+hex;hexToRgb(C1);function hexToRgb(b){if("#"===b.charAt(0)&&(b=b.substr(1)),2>b.length||6<b.length)return!1;var g,h,i,j=b.split("");if(2===b.length)g=parseInt(j[0].toString()+j[1].toString(),16),h=g,i=g;else if(3===b.length)g=parseInt(j[0].toString()+j[0].toString(),16),h=parseInt(j[1].toString()+j[1].toString(),16),i=parseInt(j[2].toString()+j[2].toString(),16);else if(6===b.length)g=parseInt(j[0].toString()+j[1].toString(),16),h=parseInt(j[2].toString()+j[3].toString(),16),i=parseInt(j[4].toString()+j[5].toString(),16);else return!1;document.getElementById("rgb").innerHTML="rgb("+g+", "+h+", "+i+")"}hexToHsl(C1);function hexToHsl(h){let a=0,l=0,m=0;4==h.length?(a="0x"+h[1]+h[1],l="0x"+h[2]+h[2],m="0x"+h[3]+h[3]):7==h.length&&(a="0x"+h[1]+h[2],l="0x"+h[3]+h[4],m="0x"+h[5]+h[6]),a/=255,l/=255,m/=255;let n=Math.min(a,l,m),e=Math.max(a,l,m),f=e-n,g=0,o=0,p=0;g=0==f?0:e==a?(l-m)/f%6:e==l?(m-a)/f+2:(a-l)/f+4,g=Math.round(60*g),0>g&&(g+=360),p=(e+n)/2,o=0==f?0:f/(1-Math.abs(2*p-1)),o=+(100*o).toFixed(1),p=+(100*p).toFixed(1),document.getElementById("hsl").innerHTML="hsl("+Math.round(g)+"\xB0, "+Math.round(o)+"%, "+Math.round(p)+"%)"}hexToCmyk(C1);function hexToCmyk(j){var k=0,l=0,m=0,n=0;j="#"==j.charAt(0)?j.substring(1,7):j;var o=parseInt(j.substring(0,2),16),h=parseInt(j.substring(2,4),16),i=parseInt(j.substring(4,6),16);k=1-o/255,l=1-h/255,m=1-i/255;var g=Math.min(k,Math.min(l,m));k=(k-g)/(1-g),l=(l-g)/(1-g),m=(m-g)/(1-g),n=g,document.getElementById("cmyk").innerHTML="cmyk("+Math.round(100*k)+"%, "+Math.round(100*l)+"%, "+Math.round(100*m)+"%, "+Math.round(100*n)+"%)"}var C2=$c.complement(C1);function colors(a){var b=$c.complement(a);$("#hex2").html(b),$("#color-complementary").css({"background-color":b}),$("#color2").css({color:b}),console.log(b)}$(document).ready(function(){colors(C1)}),hexToRgb2(C2);function hexToRgb2(b){if("#"===b.charAt(0)&&(b=b.substr(1)),2>b.length||6<b.length)return!1;var g,h,i,j=b.split("");if(2===b.length)g=parseInt(j[0].toString()+j[1].toString(),16),h=g,i=g;else if(3===b.length)g=parseInt(j[0].toString()+j[0].toString(),16),h=parseInt(j[1].toString()+j[1].toString(),16),i=parseInt(j[2].toString()+j[2].toString(),16);else if(6===b.length)g=parseInt(j[0].toString()+j[1].toString(),16),h=parseInt(j[2].toString()+j[3].toString(),16),i=parseInt(j[4].toString()+j[5].toString(),16);else return!1;document.getElementById("rgb2").innerHTML="rgb("+g+", "+h+", "+i+")"}hexToHsl2(C2);function hexToHsl2(h){let a=0,l=0,m=0;4==h.length?(a="0x"+h[1]+h[1],l="0x"+h[2]+h[2],m="0x"+h[3]+h[3]):7==h.length&&(a="0x"+h[1]+h[2],l="0x"+h[3]+h[4],m="0x"+h[5]+h[6]),a/=255,l/=255,m/=255;let n=Math.min(a,l,m),e=Math.max(a,l,m),f=e-n,g=0,o=0,p=0;g=0==f?0:e==a?(l-m)/f%6:e==l?(m-a)/f+2:(a-l)/f+4,g=Math.round(60*g),0>g&&(g+=360),p=(e+n)/2,o=0==f?0:f/(1-Math.abs(2*p-1)),o=+(100*o).toFixed(1),p=+(100*p).toFixed(1),document.getElementById("hsl2").innerHTML="hsl("+Math.round(g)+"\xB0, "+Math.round(o)+"%, "+Math.round(p)+"%)"}hexToCmyk2(C2);function hexToCmyk2(j){var k=0,l=0,m=0,n=0;j="#"==j.charAt(0)?j.substring(1,7):j;var o=parseInt(j.substring(0,2),16),h=parseInt(j.substring(2,4),16),i=parseInt(j.substring(4,6),16);k=1-o/255,l=1-h/255,m=1-i/255;var g=Math.min(k,Math.min(l,m));k=(k-g)/(1-g),l=(l-g)/(1-g),m=(m-g)/(1-g),n=g,document.getElementById("cmyk2").innerHTML="cmyk("+Math.round(100*k)+"%, "+Math.round(100*l)+"%, "+Math.round(100*m)+"%, "+Math.round(100*n)+"%)"}
</script>
@endsection