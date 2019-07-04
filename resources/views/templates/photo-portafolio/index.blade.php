<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photography Portafolio</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700|Roboto:400,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('templates/photo-portafolio/css/styles.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114030245-4"></script>
    <script>
        window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date),gtag("config","UA-114030245-4");
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-primary font-weight-bold" href="#">
                Photography Logo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link nav-color" href="#home">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-color" href="#portafolio">Portafolio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-color" href="#services">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-color" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <section class="section-home" id="home">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Hello, Welcome to my Portafolio</h1>
                    <h2>I'm a freelance photographer, with 5 years of experience</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="section-portafolio" id="portafolio">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/600" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/601" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/602" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/603" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/599" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/598" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/597" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/500/596" class="img-fluid img-portafolio" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>
    <section class="section-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center font-weight-bold">Services</h1>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-icon-top">
                            <i class="fas fa-camera fa-3x"></i>
                        </div>
                        <div class="card-body">
                            <br>
                            <h3>Photography</h3>
                            <h5 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ut
                                ipsa soluta officia dolorem laudantium porro incidunt aut eius quia nisi quam, repellat
                                illo hic.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-icon-top">
                            <i class="fas fa-video fa-3x"></i>
                        </div>
                        <div class="card-body">
                            <br>
                            <h3>Video</h3>
                            <h5 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ut
                                ipsa soluta officia dolorem laudantium porro incidunt aut eius quia nisi quam, repellat
                                illo hic.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-icon-top">
                            <i class="fas fa-film fa-3x"></i>
                        </div>
                        <div class="card-body">
                            <br>
                            <h3>Video Editing</h3>
                            <h5 class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit ut
                                ipsa soluta officia dolorem laudantium porro incidunt aut eius quia nisi quam, repellat
                                illo hic.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center font-weight-bold">Contact</h1><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <a href="" class="btn btn-primary btn-block">Email Me</a>
                </div>
                <div class="col-md-12 text-center"><br><br>
                    <a href=""><i class="fab fa-facebook fa-2x"></i></a>
                    <a href=""><i class="fab fa-instagram fa-2x"></i></a>
                    <a href=""><i class="fab fa-twitter fa-2x"></i></a>
                    <a href=""><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    By <a href="https://www.colorffy.com" target="_blank" rel="noopener">Colorffy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>