<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins,Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('templates/download-now/css/styles.css')}}">
    <script src="https://kit.fontawesome.com/557c7a86e1.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
        window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date),gtag("config","UA-114030245-4");
    </script>
    <title>Download Now</title>
</head>

<body>
    <nav class="navbar navbar-light" id="navbar">
        <a id="banner" class="navbar-brand" href="#">Theme</a>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <h1 id="download">Download now!</h1>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="#" id="icon"><i class="fab fa-windows"></i></a>
                            <h3 id="OS">For Windows</h3>
                        </div>
                    </div>
                </a><br>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="#" id="icon"><i class="fab fa-apple"></i></a>
                            <h3 id="OS">For Mac Os</h3>
                        </div>
                    </div>
                </a><br>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a href="#">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="#" id="icon"><i class="fab fa-linux"></i></a>
                            <h3 id="OS">For Linux</h3>
                        </div>
                    </div>
                </a><br>
            </div>
        </div>

        <div class="container text-center" id="block-buttons">
            <button type="button" class="btn btn-outline-light btn-lg" id="button">See more</button>
            <button type="button" class="btn btn-outline-light btn-lg" id="button">Start now</button>
            <button type="button" class="btn  btn-outline-light btn-lg" id="button">Community</button>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

</body>

</html>