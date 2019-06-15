<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('templates/landing-page/css/styles.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-primary font-weight-bold" href="#">
                Logo
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
                        <a class="nav-link nav-color" href="#services">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav-color" href="#about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <section class="section-home" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h1 class="font-weight-bold text-poppins">The most simples and beautiful templates</h1>
                    <br>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laborum pariatur ratione eius
                        libero impedit natus corporis. Id cum incidunt sit ipsum aliquid itaque, debitis, natus
                        excepturi
                        aperiam enim architecto?</h5>
                    <br>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="col-md-12 col-lg-6 text-center">
                    <img class="img-landing" src="{{asset('templates/landing-page/img/creative_process.svg')}}" alt="creative_process" width="80%">
                </div>
            </div>
        </div>
    </section>
    <section class="section-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-bold text-primary text-poppins">Services</h2>
                    <h2 class="font-weight-bold">Text about something you want</h2><br>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laborum pariatur ratione eius
                        libero impedit natus corporis. Id cum incidunt sit ipsum aliquid itaque, debitis, natus
                        excepturi
                        aperiam enim architecto?</h5>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-3x"></i><br><br>
                            <h3 class="text-center text-poppins">Develop</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-layer-group fa-3x"></i><br><br>
                            <h3 class="text-center text-poppins">Design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-bullhorn fa-3x"></i><br><br>
                            <h3 class="text-center text-poppins">Marketing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-ruler fa-3x"></i><br><br>
                            <h3 class="text-center text-poppins">UI/UX</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </section>
    <section class="section-about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h2 class="font-weight-bold text-primary text-poppins">About Us</h2>
                    <h2 class="font-weight-bold">Text about something you want</h2>
                    <br>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laborum pariatur ratione eius
                        libero impedit natus corporis. Id cum incidunt sit ipsum aliquid itaque, debitis, natus
                        excepturi
                        aperiam enim architecto?</h5>
                    <br>
                    <a href="#" class="btn btn-primary-light">View More</a>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <div class="col-md-12 col-lg-6 text-center">
                    <img class="img-landing" src="{{asset('templates/landing-page/img/career_1.svg')}}" alt="carrer" width="80%">
                </div>
            </div>
        </div>
    </section>
    <section class="section-important">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center">Important quotes</h1>
                    <br>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-light btn-block">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="font-weight-bold">Logo</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laborum pariatur ratione eius
                        libero impedit natus corporis. Id cum incidunt sit ipsum aliquid itaque, debitis, natus
                        excepturi aperiam enim architecto?
                    </p>
                </div>
                <div class="col-md-4 offset-md-4">
                    <h4 class="font-weight-bold">More</h4>
                    <a href="#">Link 1</a><br>
                    <a href="#">Link 2</a><br>
                    <a href="#">Link 3</a><br>
                    <a href="#">Link 4</a><br>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right small align-self-end"><br>
                    <a href="" title="Twitter" alt="Twitter" target="_blank" rel="noopener"><i
                            class="fab fa-twitter fa-2x"></i></a>
                    <a href="" title="Instagram" alt="Instagram" target="_blank" rel="noopener"><i
                            class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-right small align-self-center">©2019 Colorffy v2.3 🎉</div>
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