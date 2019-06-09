<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('templates/landing-page-demo/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('templates/landing-page-demo/css/floating-labels.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Template Demo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">8888-8888</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h5 class="text-poppins">WEBSITE DESIGN SOFTWARE</h5>
                <h2 class="font-weight-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
                <br>
                <div class="text-center">
                    <img src="{{asset('templates/landing-page-demo/img/startup_1.svg')}}" width="60%" alt="startup">
                    <br><br>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-poppins">Request a demo</h4>
                        <hr>
                        <form action="">
                            <div class="form-label-group">
                                <input type="text" id="inputName" class="form-control" placeholder="Name" required
                                    autofocus>
                                <label for="inputName">Name*</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="inputLastName" class="form-control" placeholder="Last Name"
                                    required autofocus>
                                <label for="inputLastName">Last Name*</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                    required autofocus>
                                <label for="inputEmail">Email*</label>
                            </div>

                            <div class="form-label-group">
                                <input type="tel" id="inputPhone" class="form-control" placeholder="Phone" required
                                    autofocus>
                                <label for="inputPhone">Phone*</label>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
    </section>

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