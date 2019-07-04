<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coming Soon</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('templates/coming-soon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('templates/coming-soon/css/particles.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
        window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date),gtag("config","UA-114030245-4");
    </script>
</head>

<body>
    <div id="particles-js"></div>
    <div class="main">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-12">
                    <h3 class="text-uppercase">Your Website / App</h3>
                    <h1 class="text-uppercase font-weight-bold">Coming Soon</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="font-weight-bold" id="days"></h2>
                            <h3>Days</h3>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="font-weight-bold" id="hours"></h2>
                            <h3>Hours</h3>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="font-weight-bold" id="minutes"></h2>
                            <h3>Minutes</h3>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="font-weight-bold" id="seconds"></h2>
                            <h3>Seconds</h3>
                        </div>
                    </div><br>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-md-6">
                    <h5>Subscribe to stay tuned!</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="youremail@mail.com"
                            aria-label="youremail@mail.com" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script async src="{{asset('templates/coming-soon/js/scripts.js')}}"></script>
    <script async src="{{asset('templates/coming-soon/js/particles.js')}}"></script>
</body>

</html>