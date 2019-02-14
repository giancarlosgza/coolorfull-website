@extends('layouts.app')
@section('title', '2 Colors-Gradient Generator')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">2 Colors-Gradient Generator</h4>
        </div>
    </div>
    <div class="card shadow-medium">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-6 col-sm-6">
                    <label for="color_1" class="bold">Color 1</label><br>
                    <input type="text" class="form-control" id="color_1" value="#002DFF">        
                </div>
                <div class="form-group col-6 col-sm-6">
                    <label for="color_2" class="bold">Color 2</label><br>
                    <input type="text" class="form-control" id="color_2" value="#00F4FF">
                </div>
                <button type="submit" onclick="generateGradient()" class="btn btn-primary">Generate</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="jumbotron jumbotron-fluid" id="gradient_preview">
            </div>
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
                    <h5 class="bold">Hex Color Code</h5>
                    <code><h6 class="bold" id="css_code"></h6></code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">RGB</h5>
                    <code><h6 class="bold" id="rgb"></h6></code>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">HSL</h5>
                    <code><h6 class="bold" id="hsl"></h6></code>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <a class="twitter-share-button "
        href="https://twitter.com/intent/tweet?text=Hey!%20Check%20this%20amazing%202%20colors%20gradient%20generator!%20by%20@colorffy"
        data-size="large">
        Tweet
    </a>
</div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
    <script type="text/javascript">
    function generateGradient(color1, color_2){
        var color1 = document.getElementById("color_1").value;
        var color2 = document.getElementById("color_2").value;
        
        document.getElementById("gradient_preview").style.background ="linear-gradient(to right, " + color1 + "," + color2 + ")";
        document.getElementById("hexadecimal").innerHTML = "background: linear-gradient(to right, " + color1 + "," + color2 + ");";
        document.getElementById("css_code").innerHTML = color1 + ", " + color2;
    }
    
    $('#color_1').minicolors({ animationEasing: 'swing'});
    $('#color_2').minicolors({ animationEasing: 'swing'});

    //hex to rgb and hsl converter

    //twitter share btn
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