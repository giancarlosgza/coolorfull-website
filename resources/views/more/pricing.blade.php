@extends('layouts.app')
@section('title', 'Pricing')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-montserrat text-indigo">Pricing</h3><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card card-form">
                    <div class="card-body text-left">
                        <h3 class="text-montserrat text-center">Free</h3>
                        <h3 class="text-montserrat  color-indigo text-center">$0 USD</h3>
                        <h6 class="text-center">No account.</h6>
                        <br>
                        <h6><i class="fas fa-check-circle text-indigo"></i> Access to every Colorffy's tools</h6>
                        <h6><i class="fas fa-times-circle text-danger"></i> Ads in the website.</h6>
                        <h6><i class="fas fa-times-circle text-danger"></i> No account.</h6>
                        <br>
                        <br>
                        <hr>
                        <a href="/" class="btn btn-secondary btn-block shadow-medium">Browse</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card card-form">
                    <div class="card-body text-left">
                        <h3 class="text-montserrat text-center">1 Month</h3>
                        <h3 class="text-montserrat text-indigo text-center">$1.99 USD</h3>
                        <h6 class="text-center">No subscription. Only pay for the month that you want to use Colorfy.</h6>
                        <br>
                        <h6><i class="fas fa-check-circle text-indigo"></i> Access to every Colorffy's tools.</h6>
                        <h6><i class="fas fa-check-circle text-indigo"></i> Save your favorites gradients and palettes.</h6>
                        <h6><i class="fas fa-check-circle text-indigo"></i> Create and save unlimited gradients.</h6>
                        <h6><i class="fas fa-check-circle text-indigo"></i> No ads in the website.</h6>
                        <hr>
                        <a href="/register" class="btn btn-primary btn-block shadow-medium">Join colorffy now</a>
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