@extends('layouts.app')
@section('title', '2 Colors Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="font-weight-bold">Gradient Generator</h4><br>
        </div>
    </div>
    <div class="card card-static-elevation mb-3">
        <div class="card-body">
            <div class="form-row justify-content-center mb-2">
                <div class="col-md-12 text-center mb-2">
                    <h3 class="font-weight-bold">Make some crazy colors!</h3>
                </div>
                <div class="form-group col-6 col-md-4">
                    <label for="color_1" class="text-poppins">Color 1</label><br>
                    <input type="text" class="form-mat-g form-control" id="color_1" value="#000000">        
                </div>
                <div class="form-group col-6 col-md-4">
                    <label for="color_2" class="text-poppins">Color 2</label><br>
                    <input type="text" class="form-mat-g form-control" id="color_2" value="#000000">
                </div>
            </div>
            @if($validSub)
            <div class="row">
                <div class="col text-right">
                    <button id="save-gradient-btn" class="btn btn-primary">
                        Save gradient (PRO)
                    </button>
                </div>
            </div>
            @else 
            <div class="row">
                <div class="col text-right">
                    <button id="save-gradient-btn" class="btn btn-primary" disabled>
                        <i class="material-icons">lock</i>
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
            <a class="btn btn-secondary ripple ripple-dark" onclick="downloadimage()">
                <i class="material-icons">image</i>
                Get IMG
            </a>
            <hr>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 mb-3">
            <div class="card card-outline">
                <div class="card-body">
                    <h5 class="font-weight-bold">CSS</h5>
                    <code id="css">
                    </code>
                </div>
            </div>
        </div>
        <!-- TABLE COLORS CODE -->
        <div class="col-sm-12 mb-3">
            <div class="card card-outline">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--END TABLE-->
    </div>
    <hr>
</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript">
    function downloadimage(){var a=document.getElementById("gradient_preview");html2canvas(a,{allowTaint:!0}).then(function(a){var b=document.createElement("a");document.body.appendChild(b),b.download="newGradient.jpg",b.href=a.toDataURL(),b.target="_blank",b.click()})}
    $("#color_1").minicolors({animationEasing:"swing"}),$("#color_2").minicolors({animationEasing:"swing"}),$(window).on("load",function(){function b(b,d,f){b/=255,d/=255,f/=255;var g,h,j=Math.max(b,d,f),k=Math.min(b,d,f),l=(j+k)/2;if(j==k)g=h=0;else{var i=j-k;switch(h=.5<l?i/(2-j-k):i/(j+k),j){case b:g=(d-f)/i+(d<f?6:0);break;case d:g=(f-b)/i+2;break;case f:g=(b-d)/i+4}
    g/=6}
    return[0|360*g+.5,(0|100*h+.5)+"%",(0|100*l+.5)+"%"]}
    function d(b,c,d){var f=0,g=0,h=0;if(b=parseInt((""+b).replace(/\s/g,""),10),c=parseInt((""+c).replace(/\s/g,""),10),d=parseInt((""+d).replace(/\s/g,""),10),0==b&&0==c&&0==d)return[0,0,0,1];f=1-b/255,g=1-c/255,h=1-d/255;var i=Math.min(f,Math.min(g,h));return[(0|100*(f=(f-i)/(1-i))+.5)+"%",(0|100*(g=(g-i)/(1-i))+.5)+"%",(0|100*(h=(h-i)/(1-i))+.5)+"%",(0|100*i+.5)+"%"]}
    $("#color_1").bind("blur keydown",function(){var f=this;setTimeout(function(){var c=document.getElementById("color_1").value,e=document.getElementById("color_2").value,g=[],h=$(f),j=!1,k=h.val(),l=(k+"").replace(/#/,"");1===k.length&&"#"!==k&&h.val("#"+k),3==l.length&&(l+=l);for(var m=0;6>m;m+=2)
    g.push(parseInt(l.substr(m,2),16))
    j=j||"NaN"===g[g.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+c+","+e+")"
    document.getElementById("css").innerHTML="background: linear-gradient(to right, "+c+","+e+");"
    document.getElementById("color1").style.color=c;document.getElementById("color2").style.color=e;document.getElementById("hex").innerHTML=c
    document.getElementById("hex2").innerHTML=e
    document.getElementById("rgb").innerHTML="rgb("+g+")"
    document.getElementById("hsl").innerHTML="hsl("+b.apply(null,g).join(",")+")"
    document.getElementById("cmyk").innerHTML="cmyk("+d.apply(null,g)+")"},13)}),$("#color_2").bind("blur keydown",function(){var f=this;setTimeout(function(){var c=document.getElementById("color_1").value,e=document.getElementById("color_2").value,g=[],h=$(f),j=!1,k=h.val(),l=(k+"").replace(/#/,"");1===k.length&&"#"!==k&&h.val("#"+k),3==color_1.length&&(l+=l);for(var m=0;6>m;m+=2)g.push(parseInt(l.substr(m,2),16)),j=j||"NaN"===g[g.length-1].toString();document.getElementById("gradient_preview").style.background="linear-gradient(to right, "+c+","+e+")"
    document.getElementById("css").innerHTML="background: linear-gradient(to right, "+c+","+e+");"
    document.getElementById("color1").style.color=c;document.getElementById("color2").style.color=e;document.getElementById("hex").innerHTML=c
    document.getElementById("hex2").innerHTML=e
    document.getElementById("rgb2").innerHTML="rgb("+g+")"
    document.getElementById("hsl2").innerHTML="hsl("+b.apply(null,g).join(",")+")"
    document.getElementById("cmyk2").innerHTML="cmyk("+d.apply(null,g)+")"},13)})})
    </script>
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