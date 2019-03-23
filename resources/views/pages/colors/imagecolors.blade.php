@extends('layouts.app')
@section('title', 'Image Colors')
@section('content')
<style>
    .file {
        height: 75px;
        border: 1px solid #ffffff;
        margin: 10px 5px 0 0;
        border-radius: 15px;
    }
    #palette {
        display: block;
        text-align: center;
    }
    #colordiv {
        display: block;
        text-align: center;
    }
    .color {
        width: 150px;
        height: 30px;
        margin: 5px;
        display: inline-block;
        background-color: #ffffff;
        border: 2px solid #eeeeee;
        border-radius: 15px;
        color: #ffffff;
    }
    .palette-color {
        width: 150px;
        height: 30px;
        margin: 5px;
        display: inline-block;
        background-color: #ffffff;
        border: 2px solid #eeeeee;
        border-radius: 15px;
        color: #ffffff;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">🎲 Image Color</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow-medium">
            <div class="card-body">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <br>
                <div>
                    <img id="img" class="file" src="#" alt="Upload your image" height=200 width=100 >
                </div>
                
                <img src="/assets/img/logo-form.svg" height=150 width=200 alt="Image">
                
                <hr>
                <strong>Colors:</strong>
                
                <div id="colordiv"></div>
                <div id="palette"></div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/color-thief.js') }}"></script>
<script>
 /* The uploader form */
 $(function () {
        $(":file").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    imageIsLoaded(e)
    function imageIsLoaded(e) {
        $('#img').attr('src', e.target.result);
            console.log('Hola')
            
            // Create colorThief object
            var colorThief = new ColorThief();
            // Make sure everything is loaded
            $(window).on('load', function() {
            // Create image object
            var sourceImage = $('#img')[0];
            // Get the dominant color of image
            var color = colorThief.getColor(sourceImage);
            $('#colordiv').append(
                    '<div class="color" style="background-color: rgb('+color+');">rgb('+color+')</div>'
                    );
            // Get palette of 4 colors of image
            var palette = colorThief.getPalette(sourceImage, 4);
            // Fill palette container with the colors
            for(var i = 0; i < palette.length; i++) {
                $('#palette').append(
                    '<div class="palette-color" style="background-color: rgb('+palette[i]+');">rgb('+palette[i]+')</div>'
                    );
            }
            });
            console.log('FINISH')
    };

 
</script>
@endsection