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
            <h4 class="text-body bold">Code Editor</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-8">
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
            <h6 class="h6-responsive bold">Copy and paste Bootstrap 4 css link into the textarea for Bootstrap Styles</h6>
            <h6 class="h6-responsive">< link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></h6>
            <hr>
            <h6 class="h6-responsive bold">
                Paste code from Bootstrap or write your own code and add styles with CSS
            </h6>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary shadow-medium" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
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
@endsection