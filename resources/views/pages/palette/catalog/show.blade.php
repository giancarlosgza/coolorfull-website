@extends('layouts.app')
@section('title', "$palette->name")
@section('content')
<div class="container btn-return">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-link" href="/palettes/catalog"><i class="fas fa-arrow-left"></i> Palettes</a>
            <br>
        </div>
    </div>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_1}}">
            <i class="fas fa-circle" style="color: {{$palette->color_1}};"></i> {{$palette->color_1}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_2}}">
            <i class="fas fa-circle" style="color: {{$palette->color_2}};"></i> {{$palette->color_2}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_3}}">
            <i class="fas fa-circle" style="color: {{$palette->color_3}};"></i> {{$palette->color_3}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_4}}">
            <i class="fas fa-circle" style="color: {{$palette->color_4}};"></i> {{$palette->color_4}}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-gradient" onclick="copyColor()" data-toggle="tooltip" title="Click to copy" data-clipboard-text="{{$palette->color_4}}">
            <i class="fas fa-circle" style="color: {{$palette->color_5}};"></i> {{$palette->color_5}}
        </a>
    </li>
</ul><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center bold uppercase">{{$palette->name}}</h4>
            <ul id="htmltoimage" class="list-group shadow-medium">
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_1}}"> </li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_2}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_3}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_4}}"></li>
                <li class="list-group-item palette-show" style="background-color:{{$palette->color_5}}"></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-gradient" onclick="downloadimage()">
                <i class="fas fa-image"></i>
                Get IMG
            </a>
        </div>
    </div>
    <hr>
    <a class="twitter-share-button "
        href="https://twitter.com/intent/tweet?text={{$palette->name}}%20Palette%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
</div>

@endsection
@section('scripts')
    <script>
        function copyColor() {
            alert("Copied!");
        }
        function downloadimage(){
            //var container = document.getElementById("image-wrap"); //specific element on page
            var container = document.getElementById("htmltoimage");; // full page 
            html2canvas(container,{allowTaint : true}).then(function(canvas) {
            
                var link = document.createElement("a");
                document.body.appendChild(link);
                link.download = "palette{{$palette->name}}_{{$palette->id}}.jpg";
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