<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#1f2aff"/>
    <meta name="description" content="A lot of colors gradients and palettes for inspiration with colors codes and css. Get more tools, like gradients generators, colors from images, web templates and more! Get a color for your next awesome project.">
    <meta name="keywords" content="Colors, Gradients, Palettes, Color Gradients, Color Palettes, Gradients Generators, Color Codes, Random Color, Color from Images, Web Teamplates, HTML 5 Templates, Design, Web Design, CSS, Hex, RGB, Fresh Colors, Colors Idea, Colors Inspiration">
    <title>@yield('title') - Colorffy</title>
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <!--Facebook Meta-->
    <meta property="og:url" content="https://www.colorffy.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title') - Colorffy"/>
    <meta property="og:description" content="A lot of colors gradients and palettes for inspiration with colors codes and css. Get more tools, like gradients generators, colors from images, web templates and more! Get a color for your next awesome project." />
    <meta property="og:image" content="https://www.colorffy.com/assets/img/colorffy-full-width-card.jpg">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="750">
    <meta property="og:image:height" content="350">
    <meta property="og:image:alt" content="Colorffy Banner" />
    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="@yield('title') - Colorffy" />
    <meta name="twitter:description" content="A lot of colors gradients and palettes for inspiration with colors codes and css. Get more tools, like gradients generators, colors from images, web templates and more! Get a color for your next awesome project."/>
	<meta name="twitter:creator" content="@giancarlosgza" />
	<meta name="twitter:image" content="https://www.colorffy.com/assets/img/colorffy-full-width-card.jpg" />
    <meta name="twitter:image:alt" content="Colorffy Image Card" />
    <meta name="twitter:site" content="@colorffy" />
    <meta name="twitter:domain" content="https://www.colorffy.com" />
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/favicon/apple-touch-icon.png?v=7k40M9jpLA')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/assets/img/favicon/chrome-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/img/favicon/favicon-32x32.png?v=7k40M9jpLA')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/favicon/favicon-16x16.png?v=7k40M9jpLA')}}">
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg?v=7k40M9jpLA')}}" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Colorffy">
    <meta name="application-name" content="Colorffy">
    <meta name="msapplication-TileColor" content="#1f2aff">
    <!-- Css -->
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:400,500&display=swap" rel="stylesheet">
    <!--Styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/themes.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('styles')
    <!--FONT AWESOME-->
    <!--<script src="https://kit.fontawesome.com/ddb7d75e39.js"></script>-->
    <!-- MARKUP JSON-LD Google. -->
    <script async type="application/ld+json">
        {"@context":"http://schema.org","@type":"Organization","name":"Colorffy","url":"https://colorffy.com","logo":"https://colorffy.com/assets/img/logo-gradient-bg.png"}
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
        window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date),gtag("config","UA-114030245-4");
    </script>
    <style>
        body{font-family:'Roboto',sans-serif; font-weight: 500 !important;}.logo{font-family:'Poppins',sans-serif}
    </style>
    @yield('googleads')
</head>
<body>
    @include('inc.navbar')
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
    <!--CONTENT-->
    @yield('content')
    <button onclick="topFunction()" id="backTop" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!--END CONTENT-->
    @include('inc.footer')
    <!--SCRIPTS-->
    <script type="text/javascript">
        "serviceWorker"in navigator&&window.addEventListener("load",function(){navigator.serviceWorker.register("/service-worker.js").then(function(a){console.log("ServiceWorker registration successful with scope: ",a.scope)},function(a){console.log("ServiceWorker registration failed: ",a)})});
    </script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        window.onscroll=function(){scrollFunction()};function scrollFunction(){document.getElementById("backTop").style.display=20<document.body.scrollTop||20<document.documentElement.scrollTop?"block":"none"}function topFunction(){document.body.scrollTop=0,document.documentElement.scrollTop=0}
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script async src="{{ asset('assets/js/dark-mode.js') }}"></script>
    @yield('scripts')
    <!--END SCRIPTS-->
</body>
</html>
