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
                    <label for="colorm_1" class="bold">Color 1</label><br>
                    <input type="text" class="form-control" id="colorm_1" value="#7646AD">        
                </div>
                <div class="form-group col-6 col-sm-6">
                    <label for="colorm_2" class="bold">Color 2</label><br>
                    <input type="text" class="form-control" id="colorm_2" value="#EC3C5D">
                </div>
                <div class="form-group col-12 col-sm-12">
                    <label for="colorm_3" class="bold">Color 3</label><br>
                    <input type="text" class="form-control" id="colorm_3" value="#FFC8D0">
                </div>
                <button type="submit" onclick="generateMultiGradient()" class="btn btn-primary">Generate</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="jumbotron jumbotron-fluid" id="gradientMulti_preview">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="card shadow-medium">
                <div class="card-body">
                    <h5 class="bold">CSS</h5>
                    <code><h6 class="bold" id="multi_hexadecimal"></h6></code>
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

    function generateMultiGradient(color1, color2, color3){
        var color1 = document.getElementById("colorm_1").value;
        var color2 = document.getElementById("colorm_2").value;
        var color3 = document.getElementById("colorm_3").value;

        document.getElementById("gradientMulti_preview").style.background ="linear-gradient(to right, " + color1 + "," + color2 + ", " + color3 + ")";
        document.getElementById("multi_hexadecimal").innerHTML = "background: linear-gradient(to right, " + color1 + "," + color2 + "," + color3 + ");";
        document.getElementById("css_code").innerHTML = color1 + ", " + color2 + ", " + color3;
    }

    $('#colorm_1').minicolors({ animationEasing: 'swing'});
    $('#colorm_2').minicolors({ animationEasing: 'swing'});
    $('#colorm_3').minicolors({ animationEasing: 'swing'});

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