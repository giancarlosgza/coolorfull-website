@extends('layouts.app')
@section('title', 'Create Palette')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h3 class="text-montserrat">Create color palette</h3><br>
                    <!--FORM-->
                    <form method="POST" action="/palettes/new" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="text-montserrat">Name:</label>
                            <input type="name" class="form-mat-g form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="name" name="nombre" placeholder="Fire Red, Leaf Green" value="{{ old('nombre') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_1" class="text-montserrat">Color 1:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_1') ? ' is-invalid' : '' }}" id="color_1" name="color_1" placeholder="#11998e" value="{{ old('color_1') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_2" class="text-montserrat">Color 2:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_2') ? ' is-invalid' : '' }}" id="color_2" name="color_2" placeholder="#38ef7d" value="{{ old('color_2') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_3" class="text-montserrat">Color 3:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_3') ? ' is-invalid' : '' }}" id="color_3" name="color_3" placeholder="#5421rs" value="{{ old('color_3') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_4" class="text-montserrat">Color 4:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_4') ? ' is-invalid' : '' }}" id="color_4" name="color_4" placeholder="#000000" value="{{ old('color_4') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_4" class="text-montserrat">Color 5:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_4') ? ' is-invalid' : '' }}" id="color_5" name="color_5" placeholder="#0072ff" value="{{ old('color_5') }}">
                        </div>

                        <div class="form-group">
                            <label for="color_filter" class="text-montserrat">Color Filter:</label>
                            <select class="form-select form-mat-g form-control{{ $errors->has('color_filter') ? ' is-invalid' : '' }}" id="color_filter" name="color_filter" placeholder="Red, Blue, Green" value="{{ old('color_filter') }}">
                                <option>Red</option>
                                <option>Green</option>
                                <option>Blue</option>
                                <option>Cyan</option>
                                <option>Purple</option>
                                <option>Yellow</option>
                                <option>Orange</option>
                                <option>White</option>
                                <option>Black</option>
                                <option>Pink</option>
                                <option>Brown</option>
                                <option>Grey</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label for="color_filter_2" class="text-montserrat">Color Filter 2:</label>
                            <select class="form-select form-mat-g form-control{{ $errors->has('color_filter_2') ? ' is-invalid' : '' }}" id="color_filter_2" name="color_filter_2" placeholder="Red, Blue, Green" value="{{ old('color_filter_2') }}">
                                <option>Red</option>
                                <option>Green</option>
                                <option>Blue</option>
                                <option>Cyan</option>
                                <option>Purple</option>
                                <option>Yellow</option>
                                <option>Orange</option>
                                <option>White</option>
                                <option>Black</option>
                                <option>Pink</option>
                                <option>Brown</option>
                                <option>Grey</option>
                            </select>
                        </div><br>
                        <button type="submit" class="btn btn-primary shadow-medium button-block">
                            {{ __('Submit') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/jquery.minicolors.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
 <script type="text/javascript">
     $(document).ready(function(){
        $('.hexcolor').mask('SAAAAAA', {
            'translation': {
                S: {
                    pattern: /[#]/
                },
                A: {
                    pattern: /[A-Fa-f0-9]/
                }
            }
        });
    });
    $('#color_1').minicolors({ animationEasing: 'swing'});
    $('#color_2').minicolors({ animationEasing: 'swing'});
    $('#color_3').minicolors({ animationEasing: 'swing'});
    $('#color_4').minicolors({ animationEasing: 'swing'});
    $('#color_5').minicolors({ animationEasing: 'swing'});
 </script>   
@endsection