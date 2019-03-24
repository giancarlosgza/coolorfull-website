@extends('layouts.app')
@section('title', 'What´s new')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold text-body">🆕 What's new?</h4><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card card-form">
                <div class="card-body">
                    <h5 class="bold">
                        <img src="{{asset('/assets/img/logo-form.svg')}}" width="50px" alt="Colorffy logo">
                        Colorffy
                    </h5>
                    <hr>
                    <h6><i class="fas fa-check-circle text-success"></i> Version 2.0</h6>
                    <hr>
                    <ul>
                        <li class="bold">Colorffy PRO</li>
                        <li>Like your favorites gradients (PRO)</li>
                        <li>Like your favorites palettes (PRO)</li>
                        <li>Create and save unlimited gradients (PRO)</li>
                        <li>HEX, RGB, HSL & CMYK for every gradients and generators</li>
                        <li>Color blindness filter for gradients and palettes (PRO)</li>
                        <li>Preview icons with color palettes applied (PRO)</li>
                        <li>Preview UI elements with the gradients applied</li>
                        <li>Some UI elements redesign</li>
                        <li>Random color generator</li>
                        <li>Get colors from image</li>
                    </ul>
                    <hr>
                    <h6 class="bold"><i class="fas fa-calendar-alt"></i> March 2019</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection