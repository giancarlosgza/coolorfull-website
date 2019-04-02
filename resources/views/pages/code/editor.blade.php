@extends('layouts.app')
@section('title', 'Code Editor')
@section('content')
<style>
.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-image:linear-gradient(to right,#255dce,#1c9fe7);border:0}
.frame {
    width: 100%;
    border: none;
    height: 400px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-body bold">💻 Code Editor</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">    
            <div class="table-responsive">
                <table class="table table-borderless table-sm">
                    <thead>
                        @foreach($gradients as $gradient)
                            <td scope="col">
                                <a class="copyCSS" onclick="copyColor()" data-toggle="tooltip" title="Click to copy gradient css"
                                    data-clipboard-text="@if($gradient->color_3)background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});" @else background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">@endif
                                    <div class="card text-center" title="{{$gradient->name}}">        
                                        <div class="card-body shadow-medium" title="{{$gradient->name}}" 
                                            @if($gradient->color_3)
                                            style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}}, {{$gradient->color_3}});">
                                            @else
                                            style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </td>
                        @endforeach   
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold">Code</h6><hr>
                    <button type="button" class="btn btn-primary shadow-medium" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-info-circle"></i> Open Me
                    </button><hr>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">HTML</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">CSS</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="form-group">
                                <label class="bold" for="html">HTML</label>
                                <textarea class="form-control" id="html" rows="3" placeholder="Write or paste your HTML...."></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="form-group">
                                <label class="bold" for="css">CSS</label>
                                <textarea class="form-control" id="css" rows="3" placeholder="Write or paste your CSS...."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h6 class="bold">Preview</h6><hr>
                    <iframe class="frame" id="code">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title bold" id="exampleModalLabel">Here some help!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h6 class="h6-responsive bold">✂️ Copy and paste Bootstrap 4 css link into the textarea for Bootstrap styles</h6>
            <h6 class="h6-responsive bold">Just remove the space between "<" and "link"</h6>
            <h6 class="h6-responsive"><code>< link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></code></h6>
            <hr>
            <h6 class="h6-responsive bold">
                📋 You can paste code from Bootstrap or write your own code and add your styles with CSS. 
                <br><br>
                ✋ One more thing! With the Pro version, you can copy the gradients css from the row above and paste it to preview your components with the gradients, so fast an easy!
                <hr>
                Make awesome things!
            </h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary shadow-medium" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
<!--End Modal-->
@endsection
@section('scripts')
<script>
function compile() {
  var html = document.getElementById("html");
  var css = document.getElementById("css");
  var code = document.getElementById("code").contentWindow.document;
  document.body.onkeyup = function() {
    code.open();
    code.writeln(
        html.value +
        "<style>" +
        css.value +
        "</style>"
    );
    code.close();
  };
}
compile();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" async='async'></script>
<script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script>
    new ClipboardJS(".copyCSS"),$(document).ready(function(){$("[data-toggle=\"tooltip\"]").tooltip()});
    function copyColor(){const a=Swal.mixin({toast:!0,position:"top-end",showConfirmButton:!1,timer:3e3});a.fire({type:"success",title:"COPIED!"})};
</script>
@endsection