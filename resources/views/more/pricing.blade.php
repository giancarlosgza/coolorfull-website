@extends('layouts.app')
@section('title', 'Pricing')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-3">
                <h4 class="font-weight-bold">Pricing</h4>
                <h6 class="">Save your favorites colors in one place. No commitment.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-outline mb-3">
                    <div class="card-body text-left">
                        <h4 class="text-center">Free</h4>
                        <h4 class="font-weight-bold text-center text-primary">$0 USD</h4>
                        <h6 class="text-center mb-5">No account.</h6>
                        
                        <h6 class="text-roboto"><i class="fas fa-check-circle text-primary"></i> Access to every Colorffy's tools</h6>
                        {{-- <h6><i class="fas fa-times-circle text-danger"></i> Ads in the website.</h6> --}}
                        <h6 class="text-roboto"><i class="fas fa-times-circle text-danger"></i> No account.</h6>
                        <hr>
                        <a href="/" class="btn btn-secondary btn-block ripple ripple-dark">Browse the site</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-outline mb-3">
                    <div class="card-body text-left">
                        <h4 class="text-center">1 Month</h4>
                        <h4 class="font-weight-bold text-center text-primary">$1.99 USD</h4>
                        <h6 class="text-center mb-5">No auto renewal. Feel safe.</h6>
                        
                        <h6 class="text-roboto"><i class="fas fa-check-circle text-primary"></i> Access to every Colorffy's tools.</h6>
                        <h6 class="text-roboto"><i class="fas fa-check-circle text-primary"></i> Save your favorites gradients and palettes.</h6>
                        <h6 class="text-roboto"><i class="fas fa-check-circle text-primary"></i> Create and save unlimited gradients.</h6>
                        <h6 class="text-roboto"><i class="fas fa-check-circle text-primary"></i> Get Android colors from palettes and gradients</h6>
                        {{-- <h6><i class="fas fa-check-circle text-primary mb-4"></i> No ads in the website.</h6> --}}
                        <hr>
                        <a href="/register" class="btn btn-primary btn-block ripple">Start my first month</a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 text-center mb-3">
                @guest
                <br>
                <!-- colorffy_ads_md -->
                <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEBI6K7Y&placement=wwwcolorffycom" id="_carbonads_js"></script>
                @else
                @endguest
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
</script>
@endsection