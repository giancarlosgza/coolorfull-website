@extends('layouts.app')
@section('title', '3 Colors Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-poppins text-indigo">Gradient Generator</h3><br>
        </div>
    </div>
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="form-row justify-content-center">
                <div class="col-md-12 text-center mb-2">
                    <h1 class="text-poppins font-weight-bold">Make some crazy colors!</h1>
                </div>
                <div class="form-group col-6 col-md-4">
                    <label for="color_1" class="text-poppins">Color 1</label><br>
                    <input type="text" class="form-mat-g form-control" id="color_1" value="#000000">        
                </div>
                <div class="form-group col-6 col-md-4">
                    <label for="color_2" class="text-poppins">Color 2</label><br>
                    <input type="text" class="form-mat-g form-control" id="color_2" value="#000000">
                </div>
                <div class="form-group col-6 col-md-4">
                    <label for="color_3" class="text-poppins">Color 3</label><br>
                    <input type="text" class="form-mat-g form-control" id="color_3" value="#000000">
                </div>
            </div>
            @if($validSub)
                <div class="row">
                    <div class="col text-right">
                        <button id="save-gradient-btn" class="btn btn-primary shadow-medium">
                            Save gradient (PRO)
                        </button>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col text-right">
                        <button id="save-gradient-btn" class="btn btn-primary shadow-medium" disabled>
                            <i class="fas fa-lock"></i>
                            Save gradient (PRO)
                        </button>
                    </div>
                </div>
            @endif
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
            </a>
            <hr>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="text-poppins">CSS</h5>
                    <code id="css"></code>
                </div>
            </div>
        </div>
        <!-- TABLE COLORS CODE -->
        <div class="col-sm-12">
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
                                <tr>
                                    <th scope="row"><i class="fas fa-circle" id="color3"></i></th>
                                    <td id="hex3"></td>
                                    <td id="rgb3"></td>
                                    <td id="hsl3"></td>
                                    <td id="cmyk3"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--END TABLE-->
    </div>
    <hr>
    <div class="sharethis-inline-share-buttons"></div>
</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript">
    function downloadimage(){var e=document.getElementById("gradient_preview");html2canvas(e,{allowTaint:!0}).then(function(e){var n=document.createElement("a");document.body.appendChild(n),n.download="newGradient.jpg",n.href=e.toDataURL(),n.target="_blank",n.click()})}
    $("#color_1").minicolors({animationEasing:"swing"}),$("#color_2").minicolors({animationEasing:"swing"}),$("#color_3").minicolors({animationEasing:"swing"}),$(window).on("load",function(){function m(e,n,t){e/=255,n/=255,t/=255;var l,r,o=Math.max(e,n,t),a=Math.min(e,n,t),i=(o+a)/2;if(o==a)l=r=0;else{var d=o-a;switch(r=.5<i?d/(2-o-a):d/(o+a),o){case e:l=(n-t)/d+(n<t?6:0);break;case n:l=(t-e)/d+2;break;case t:l=(e-n)/d+4}
    l/=6}
    return[360*l+.5|0,(100*r+.5|0)+"%",(100*i+.5|0)+"%"]}
    function g(e,n,t){var l=0,r=0,o=0;e=parseInt((""+e).replace(/\s/g,""),10),n=parseInt((""+n).replace(/\s/g,""),10),t=parseInt((""+t).replace(/\s/g,""),10);if(0==e&&0==n&&0==t)return[0,0,0,1];l=1-e/255,r=1-n/255,o=1-t/255;var a=Math.min(l,Math.min(r,o));return[(100*(l=(l-a)/(1-a))+.5|0)+"%",(100*(r=(r-a)/(1-a))+.5|0)+"%",(100*(o=(o-a)/(1-a))+.5|0)+"%",(100*a+.5|0)+"%"]}
    $("#color_1").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")"
    document.getElementById("css").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");"
    document.getElementById("hex").innerHTML=e
    document.getElementById("hex2").innerHTML=n
    document.getElementById("hex3").innerHTML=t
    document.getElementById("color1").style.color=e;document.getElementById("color2").style.color=n;document.getElementById("color3").style.color=t;document.getElementById("rgb").innerHTML="rgb("+l+")"
    document.getElementById("hsl").innerHTML="hsl("+m.apply(null,l).join(",")+")"
    document.getElementById("cmyk").innerHTML="cmyk("+g.apply(null,l)+")"},13)}),$("#color_2").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")"
    document.getElementById("css").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");"
    document.getElementById("hex").innerHTML=e
    document.getElementById("hex2").innerHTML=n
    document.getElementById("hex3").innerHTML=t
    document.getElementById("color1").style.color=e;document.getElementById("color2").style.color=n;document.getElementById("color3").style.color=t;document.getElementById("rgb2").innerHTML="rgb("+l+")"
    document.getElementById("hsl2").innerHTML="hsl("+m.apply(null,l).join(",")+")"
    document.getElementById("cmyk2").innerHTML="cmyk("+g.apply(null,l)+")"},13)}),$("#color_3").bind("blur keydown",function(e){var c=this;setTimeout(function(){var e=document.getElementById("color_1").value,n=document.getElementById("color_2").value,t=document.getElementById("color_3").value,l=[],r=$(c),o=!1,a=r.val(),i=(a+"").replace(/#/,"");1===a.length&&"#"!==a&&r.val("#"+a),3==i.length&&(i+=i);for(var d=0;d<6;d+=2)l.push(parseInt(i.substr(d,2),16)),o=o||"NaN"===l[l.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+e+","+n+", "+t+")"
    document.getElementById("css").innerHTML="background: linear-gradient(to right, "+e+","+n+","+t+");"
    document.getElementById("hex").innerHTML=e
    document.getElementById("hex2").innerHTML=n
    document.getElementById("hex3").innerHTML=t
    document.getElementById("color1").style.color=e;document.getElementById("color2").style.color=n;document.getElementById("color3").style.color=t;document.getElementById("rgb3").innerHTML="rgb("+l+")"
    document.getElementById("hsl3").innerHTML="hsl("+m.apply(null,l).join(",")+")"
    document.getElementById("cmyk3").innerHTML="cmyk("+g.apply(null,l)+")"},13)})})
    </script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons'" async="async"></script>
    @if($validSub)
    <script>
    {{-- Only paid users will see this --}}

    $(document).ready(() => {
        const SAVE_GRADIENT_BTN = $('#save-gradient-btn')
        SAVE_GRADIENT_BTN.click(event => {
            swal({
                title: 'Saving a gradient',
                text: 'Type a name for your gradient',
                button: {
                    text: 'Save',
                    closeModal: false,
                },
                content: {
                    element: 'input',
                    attributes: {
                        placeholder: 'i.e. Sunrise'
                    }
                }
            }).then(name => {
                $.ajax({
                    method: 'POST',
                    url: '{{ route('saveGradient') }}',
                    data: {
                        name: name,
                        color1: $('#color_1').val(),
                        color2: $('#color_2').val(),
                        color3: $('#color_3').val(),
                    }
                }).done((response, status) => {
                    swal.stopLoading();
                    swal.close();
                    swal("Gradient saved!", "You can now navigate to My Gradients and see it there", "success");
                })
            })
        })
    })
    </script>
    @endif
@endsection