@extends('layouts.app')
@section('title', 'Edit Gradient')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.minicolors.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h3 class="text-montserrat">Edit Gradient</h3><br>
                    <!--FORM-->
                    <form method="POST" action="/gradients/edit" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="invisible_id" value="{{$gradient->id}}" name="gradient_id">

                        <div class="form-group">
                            <label for="name" class="text-montserrat">Name:</label>
                            <input type="name" id="name" value="{{ $gradient->name }}" name="nombre" class="form-mat-g form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group">
                            <label for="color_1" class="text-montserrat">Color 1:</label>
                            <input type="text" id="color_1" value="{{ $gradient->color_1 }}" name="color_1" class="form-mat-g hexcolor form-control{{ $errors->has('color_1') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group">
                            <label for="color_2" class="text-montserrat">Color 2:</label>
                            <input type="text" id="color_2" value="{{ $gradient->color_2 }}" name="color_2" class="form-mat-g form-control{{ $errors->has('color_2') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="form-group">
                            <label for="color_3" class="text-montserrat">Color 3: (OPTIONAL)</label>
                            <input type="text" id="color_3" value="{{ $gradient->color_3 }}" name="color_3" class="form-mat-g form-control{{ $errors->has('color_3') ? ' is-invalid' : '' }}" >
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label for="color_filter" class="text-montserrat">Color Filter:</label>
                                    <select id="color_filter" value="{{ $gradient->color_filter }}" class="form-mat-g form-select form-control{{ $errors->has('color_filter') ? ' is-invalid' : '' }}"  name="color_filter">
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
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="form-group">
                                    <label for="color_filter_2" class="text-montserrat">Color Filter 2:</label>
                                    <select id="color_filter_2" value="{{ $gradient->color_filter_2 }}" class="form-mat-g form-select form-control{{ $errors->has('color_filter_2') ? ' is-invalid' : '' }}"  name="color_filter_2">
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
                            </div>
                        </div>                        
                        <br>
                        <button type="submit" class="btn btn-primary button-block shadow-medium">
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
 </script>   
@endsection