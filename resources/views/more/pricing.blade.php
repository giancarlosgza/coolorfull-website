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
                        {{-- <h6><i class="fas fa-check-circle text-primary mb-4"></i> No ads in the website.</h6> --}}
                        <hr>
                        <a href="/register" class="btn btn-primary btn-block ripple">Start my first month</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
@section('scripts')
<script>
;(function(y, a, f, i) {
    var head = a.getElementsByTagName('head')[0];
    var script = a.createElement('script');

    y['_yafi-widget'] = { siteId: i, url: f };

    script.async = 1;
    script.src = f + 'widget/' + i;

    head.appendChild(script);
})(window, document, 'https://widget.yafi.pro/', '5d1654a725b528002ae69f30');
</script>
@endsection