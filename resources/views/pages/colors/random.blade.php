@extends('layouts.app')
@section('title', 'Random Color')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">Random Color</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="jumbotron jumbotron-fluid" id="color-random">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card shadow-medium">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col" class="text-montserrat">🎨</th>
                                <th scope="col" class="text-montserrat">👨‍💻 HEX</th>
                                <th scope="col" class="text-montserrat">💻 RGB</th>
                                <th scope="col" class="text-montserrat">💡 HSL</th>
                                <th scope="col" class="text-montserrat">🖨️ CMYK</th>
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
<script>
var r,g,b,h,s,l,hex;r=Math.floor(256*Math.random()).toString(16),g=Math.floor(256*Math.random()).toString(16),b=Math.floor(256*Math.random()).toString(16),r=2===r.length?r:"0"+r,g=2===g.length?g:"0"+g,b=2===b.length?b:"0"+b,hex=r+g+b,document.getElementById("hex").innerHTML="#"+hex,document.getElementById("color-random").style.backgroundColor="#"+hex,document.getElementById("color1").style.color="#"+hex;var C1="#"+hex;hexToRgb(C1);function hexToRgb(a){if("#"===a.charAt(0)&&(a=a.substr(1)),2>a.length||6<a.length)return!1;var c,d,e,f=a.split("");if(2===a.length)c=parseInt(f[0].toString()+f[1].toString(),16),d=c,e=c;else if(3===a.length)c=parseInt(f[0].toString()+f[0].toString(),16),d=parseInt(f[1].toString()+f[1].toString(),16),e=parseInt(f[2].toString()+f[2].toString(),16);else if(6===a.length)c=parseInt(f[0].toString()+f[1].toString(),16),d=parseInt(f[2].toString()+f[3].toString(),16),e=parseInt(f[4].toString()+f[5].toString(),16);else return!1;document.getElementById("rgb").innerHTML="rgb("+c+", "+d+", "+e+")"}hexToHsl(C1);function hexToHsl(a){let b=0,c=0,d=0;4==a.length?(b="0x"+a[1]+a[1],c="0x"+a[2]+a[2],d="0x"+a[3]+a[3]):7==a.length&&(b="0x"+a[1]+a[2],c="0x"+a[3]+a[4],d="0x"+a[5]+a[6]),b/=255,c/=255,d/=255;let e=Math.min(b,c,d),f=Math.max(b,c,d),g=f-e,i=0,j=0,k=0;i=0==g?0:f==b?(c-d)/g%6:f==c?(d-b)/g+2:(b-c)/g+4,i=Math.round(60*i),0>i&&(i+=360),k=(f+e)/2,j=0==g?0:g/(1-Math.abs(2*k-1)),j=+(100*j).toFixed(1),k=+(100*k).toFixed(1),document.getElementById("hsl").innerHTML="hsl("+Math.round(i)+"\xB0, "+Math.round(j)+"%, "+Math.round(k)+"%)"}hexToCmyk(C1);function hexToCmyk(a){var c=0,d=0,e=0,f=0;a="#"==a.charAt(0)?a.substring(1,7):a;var h=parseInt(a.substring(0,2),16),i=parseInt(a.substring(2,4),16),g=parseInt(a.substring(4,6),16);c=1-h/255,d=1-i/255,e=1-g/255;var b=Math.min(c,Math.min(d,e));c=(c-b)/(1-b),d=(d-b)/(1-b),e=(e-b)/(1-b),f=b,document.getElementById("cmyk").innerHTML="cmyk("+Math.round(100*c)+"%, "+Math.round(100*d)+"%, "+Math.round(100*e)+"%, "+Math.round(100*f)+"%)"}
</script>
@endsection