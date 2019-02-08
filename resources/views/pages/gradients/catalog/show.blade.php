@extends('layouts.app')
@section('title', "$gradient->name")
@section('content')
<div class="container btn-return">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link" href="/gradients/catalog"><i class="fas fa-arrow-left"></i> Gradients</a>
            <br>
        </div>
    </div>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy"
            data-clipboard-text="{{$gradient->color_1}}">
            <i class="fas fa-circle" style="color: {{$gradient->color_1}};"></i> {{$gradient->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy"
            data-clipboard-text="{{$gradient->color_2}}">
            <i class="fas fa-circle" style="color: {{$gradient->color_2}};"></i> {{$gradient->color_2}}
        </a>
    </li>
</ul><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h4 class="text-center bold uppercase">{{$gradient->name}}</h4>
            <div id="htmltoimage" class="jumbotron jumbotron-fluid" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <!-- Button trigger modal -->
            <a class="btn btn-gradient" data-toggle="modal" data-target="#exampleModal">
                <i class="fab fa-css3-alt"></i> 
                Get CSS
            </a>
            <a class="btn btn-gradient" onclick="downloadimage()">
                <i class="fas fa-image"></i>
                Get IMG
            </a>
            <hr>
            <h4 class="bold">Preview UI Elements</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6"><br>
            <h4>Buttons</h4>
            <div class="btn btn-outline-light btn-sm" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
            <div class="btn btn-outline-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
            <div class="btn btn-outline-light btn-lg" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</div>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Badges</h4>
            <span class="badge badge-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</span>
            <span class="badge badge-dark" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">{{$gradient->name}}</span>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Navbar text-black</h4>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <a class="navbar-brand text-body logo">Colorffy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2"
                    aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Gradients</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Navbar text-white</h4>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <a class="navbar-brand text-white logo">Colorffy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3"
                    aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav3">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Gradients</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6"><br>
            <h4>Card text-black</h4>
            <div class="card text-body" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <div class="card-body">
                    <h4 class="card-title bold"><i class="far fa-clock"></i> 9:30 AM</h4>
                    <p class="card-text bold">Work Meeting</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6"><br>
            <h4>Card text-white</h4>
            <div class="card text-white" style="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">
                <div class="card-body">
                    <h4 class="card-title bold"><i class="far fa-clock"></i> 6:30 PM</h4>
                    <p class="card-text bold">Pizza time!</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <a class="twitter-share-button "
        href="https://twitter.com/intent/tweet?text={{$gradient->name}}%20Gradient%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CSS: {{$gradient->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><code>background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});</code></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="copyColor(this)" data-toggle="tooltip" title="Click to copy" data-clipboard-text="background: linear-gradient(to right, {{$gradient->color_1}}, {{$gradient->color_2}});">Copy</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    //function copyColor(element) {
    //    element.title = "Copied!";
    //}
    function copyColor() {
        alert("Copied!");
    }

    function downloadimage(){
	 	//var container = document.getElementById("image-wrap"); //specific element on page
		var container = document.getElementById("htmltoimage");; // full page 
		html2canvas(container,{allowTaint : true}).then(function(canvas) {
		
			var link = document.createElement("a");
			document.body.appendChild(link);
			link.download = "gradient{{$gradient->name}}_{{$gradient->id}}.jpg";
			link.href = canvas.toDataURL();
			link.target = '_blank';
			link.click();
		});
	}

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
