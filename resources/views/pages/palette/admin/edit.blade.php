@extends('layouts.app')
@section('title', 'Edit Palette')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h4 class="bold">🆙 Edit color palette</h4>
                    <!--FORM-->
                    <form method="POST" action="/palettes/edit" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="invisible_id" value="{{$palette->id}}" name="palette_id">

                        <div class="form-group">
                            <label for="name" class="bold">Name:</label>
                            <input type="name" value="{{ $palette->name }}" class="form-mat-g form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" id="name" name="nombre">
                        </div>

                        <div class="form-group">
                            <label for="color_1" class="bold">Color 1:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_1') ? ' is-invalid' : '' }}" value="{{ $palette->color_1 }}" id="color_1" name="color_1">
                        </div>

                        <div class="form-group">
                            <label for="color_2" class="bold">Color 2:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_2') ? ' is-invalid' : '' }}" value="{{ $palette->color_2 }}" id="color_2" name="color_2">
                        </div>

                        <div class="form-group">
                            <label for="color_3" class="bold">Color 3:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_3') ? ' is-invalid' : '' }}" value="{{ $palette->color_3 }}" id="color_3" name="color_3">
                        </div>

                        <div class="form-group">
                            <label for="color_4" class="bold">Color 4:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_4') ? ' is-invalid' : '' }}" value="{{ $palette->color_4 }}" id="color_4" name="color_4">
                        </div>

                        <div class="form-group">
                            <label for="color_5" class="bold">Color 5:</label>
                            <input type="text" class="form-mat-g hexcolor form-control{{ $errors->has('color_5') ? ' is-invalid' : '' }}" value="{{ $palette->color_5 }}" id="color_5" name="color_5">
                        </div>

                        <div class="form-group">
                            <label for="color_filter" class="bold">Color Filter:</label>
                            <select id="color_filter" value="{{ $palette->color_filter }}" class="form-mat-g form-select form-control{{ $errors->has('color_filter') ? ' is-invalid' : '' }}"  name="color_filter">
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
                            <label for="color_filter_2" class="bold">Color Filter 2:</label>
                            <select id="color_filter_2" value="{{ $palette->color_filter_2 }}" class="form-mat-g form-select form-control{{ $errors->has('color_filter_2') ? ' is-invalid' : '' }}"  name="color_filter_2">
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
                            {{ __('Update') }}
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