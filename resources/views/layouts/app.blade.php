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

    <title>@yield('title') | Colorffy</title>
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    
    <!--META FACEBOOK-->
    <meta property="og:url" content="https://www.colorffy.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Colorffy" />
    <meta property="og:description" content="Color gradients and palettes daily! Get css, image, ui previews or create your own gradients! " />
    <meta property="og:image" content="https://www.colorffy.com/assets/img/colorffy-full-width-card.jpg">
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="750">
    <meta property="og:image:height" content="350">
    <meta property="og:image:alt" content="Colorffy Logo" />

    <!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Colorffy" />
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
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Colorffy">
    <meta name="application-name" content="Colorffy">
    <meta name="msapplication-TileColor" content="#2d89ef">
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:400,500,700|Nunito:400,500,700" rel="stylesheet">
    
    <!--STYLES-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- MARKUP JSON-LD Google. -->
    <script type="application/ld+json">
        {
        "@context" : "http://schema.org",
        "@type" : "Article",
        "name" : "Colorffy",
        "author" : {
            "@type" : "Person",
            "name" : "©2019 Colorffy."
        },
        "articleSection" : "Color Gradients and Palettes!",
        "articleBody" : "Look, choose and use for free any colors from this collection.",
        "url" : "https://www.colorffy.com/"
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114030245-4');
    </script>

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
        if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <!--Wow.js
    <script type="text/javascript" src="https://wowjs.uk/dist/wow.min.js"></script>-->
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clipboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">
        
        new ClipboardJS('.btn');
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    @yield('scripts')
    <!--END SCRIPTS-->
</body>
</html>
