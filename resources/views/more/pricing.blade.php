@extends('layouts.app')
@section('title', 'Pricing')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="bold">💳 Pricing - PRO</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-form">
                    <div class="card-body">
                        <h4 class="bold">🔥 Lifetime <span class="badge badge-primary">Best Value</span></h4>
                        <h5>$35 USD</h5>
                        <h6>Only one payment forever.</h6>
                        <hr>
                        <a href="/register" class="btn btn-primary shadow-medium">Join Colorffy</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-form">
                    <div class="card-body">
                        <h4 class="bold">👌 1 Month</h4>
                        <h5>$2.99 USD</h5>
                        <h6>Every month.</h6>
                        <hr>
                        <a href="/register" class="btn btn-primary shadow-medium">Join Colorffy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-form">
                    <div class="card-body">
                        <h5>❤️ Save your favorites gradients</h5>
                        <h5>💚 Save your favorites palettes</h5>
                        <h5>👓 Access to color blindness filter</h5>
                        <h5>🙆‍♂️ Save gradients created with generators</h5>
                        <h5>🎨 Preview icons with color palettes</h5>
                        <h5>🎁 Access to icons, backgrounds and illustrations (maybe)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection