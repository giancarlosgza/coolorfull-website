<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#258bff"/>
    <meta name="description" content="Color gradients and palettes daily! Get css, image, and ui previews.">
    <meta name="keywords" content="Color, Gradients, Palettes, Color Gradients, Color Palettes, Illustrations">
    <title>@yield('title') - Colorffy</title>
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <!--META FACEBOOK-->
    <meta property="og:url" content="https://www.colorffy.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title') | Colorffy"/>
    <meta property="og:description" content="Color gradients and palettes daily! Get css, image, ui previews or create your own gradients! " />
    <meta property="og:image" content="https://www.colorffy.com/assets/img/colorffy-full-width-card.jpg">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="750">
    <meta property="og:image:height" content="350">
    <meta property="og:image:alt" content="Colorffy Banner" />
    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="@yield('title') | Colorffy" />
    <meta name="twitter:description" content="Color gradients and palettes daily! Get css, image, ui previews or create your own gradients!"/>
	<meta name="twitter:creator" content="@giancarlosgza" />
	<meta name="twitter:image" content="https://www.colorffy.com/assets/img/colorffy-full-width-card.jpg" />
    <meta name="twitter:image:alt" content="Colorffy Image Card" />
    <meta name="twitter:site" content="@colorffy" />
    <meta name="twitter:domain" content="https://www.colorffy.com" />
    <!--FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg')}}" color="#17b7e5">
    <meta name="apple-mobile-web-app-title" content="Colorffy">
    <meta name="application-name" content="Colorffy">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <!-- CSS -->
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700|Nunito:400,700" rel="stylesheet">
    <!--STYLES-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    @yield('styles')
    <!-- MARKUP JSON-LD Google. -->
    <script async type="application/ld+json">
        {"@context":"http://schema.org","@type":"Organization","name":"Colorffy","url":"https://colorffy.com","logo":"https://colorffy.com/assets/new-logo.png"}
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
        window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date),gtag("config","UA-114030245-4");
    </script>
    <style>
        @font-face{font-family:'Montserrat';font-style:normal;font-weight:700;font-display:swap;src:local('Montserrat Bold'),local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;font-display:swap;src:local('Montserrat Bold'),local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;font-display:swap;src:local('Montserrat Bold'),local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;font-display:swap;src:local('Montserrat Bold'),local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Montserrat';font-style:normal;font-weight:700;font-display:swap;src:local('Montserrat Bold'),local('Montserrat-Bold'),url(https://fonts.gstatic.com/s/montserrat/v12/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:local('Nunito Regular'),local('Nunito-Regular'),url(https://fonts.gstatic.com/s/nunito/v10/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:local('Nunito Regular'),local('Nunito-Regular'),url(https://fonts.gstatic.com/s/nunito/v10/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:local('Nunito Regular'),local('Nunito-Regular'),url(https://fonts.gstatic.com/s/nunito/v10/XRXV3I6Li01BKofINeaB.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Nunito';font-style:normal;font-weight:700;font-display:swap;src:local('Nunito Bold'),local('Nunito-Bold'),url(https://fonts.gstatic.com/s/nunito/v10/XRXW3I6Li01BKofAjsOUbuvISTs.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Nunito';font-style:normal;font-weight:700;font-display:swap;src:local('Nunito Bold'),local('Nunito-Bold'),url(https://fonts.gstatic.com/s/nunito/v10/XRXW3I6Li01BKofAjsOUb-vISTs.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Nunito';font-style:normal;font-weight:700;font-display:swap;src:local('Nunito Bold'),local('Nunito-Bold'),url(https://fonts.gstatic.com/s/nunito/v10/XRXW3I6Li01BKofAjsOUYevI.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
    </style>
</head>
<body>
    @include('inc.navbar')
    <!--ALERTS-->
    @if(session('info'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="alert alert-info" role="alert">
                    {{ session('info')}}
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="alert alert-success" role="alert">
                    Color submitted!
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(session('delete'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="alert alert-warning" role="alert">
                    Color deleted!
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(session('error'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="alert alert-danger" role="alert">
                    You are not allowed to this page
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(count($errors))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <!--END ALERTS-->
    <!--CONTENT-->
    @yield('content')
    <!--END CONTENT-->
    @include('inc.footer')
    <!--SCRIPTS-->
    <script type="text/javascript">
        "serviceWorker"in navigator&&window.addEventListener("load",function(){navigator.serviceWorker.register("/service-worker.js").then(function(a){console.log("ServiceWorker registration successful with scope: ",a.scope)},function(a){console.log("ServiceWorker registration failed: ",a)})});
    </script>    
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('scripts')
    <!--END SCRIPTS-->
</body>
</html>
