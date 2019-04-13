@extends('layouts.app')
@section('title', 'Material Gradient Design System')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{ asset('/assets/css/design-system/colorffy.matgradient.css')}}">
@endsection
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Colorffy Design System</h4>
        </div>
        <div class=" col-12 col-sm-6">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle shadow-medium" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Design system
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item bold" href="#material-gradient"><i class="fas fa-unlock"></i> Material Gradient</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Material White-Gradient (Soon)</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Flat Gradient (Soon)</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Flat White-Gradient (Soon)</a>
                </div>
            </div><br>
        </div>
        <div class="col-12 col-sm-6">
            <a href="{{ asset('/assets/css/design-system/colorffy.matgradient.css')}}" class="btn btn-primary shadow-medium text-right small align-self-end" download>
                <i class="fas fa-download"></i> Download Free
            </a>
            <a href="/design/system/docs" class="btn btn-primary shadow-medium text-right small align-self-end">
                <i class="fas fa-book"></i> Docs
            </a>
        </div>
    </div><br>
</div>
<div class="container" id="material-gradient">
    <div class="row">
        <div class="col-sm-12">
            <h5 class="logo color-indigo">Material Gradient</h5>
            <h5 class="bold">Components</h5><hr>
            <!--COLORS MATERIAL GRADIENT-->
            <h5 class="bold">Colors</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-primary text-white">.mat-g-primary</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-secondary text-dark">.mat-g-secondary</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-success text-white">.mat-g-success</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-danger text-white">.mat-g-danger</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-warning text-dark">.mat-g-warning</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-info text-white">.mat-g-info</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg mat-g-light text-dark">.mat-g-light</div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 mb-2 mat-bg  mat-g-dark text-white">.mat-g-dark</div>
                </div>
            </div>
            <hr>
            <!--ALERTS MATERIAL GRADIENT-->
            <h5 class="bold">Alerts</h5>
            <div class="alert alert-mat-g-primary" role="alert">
                Hello! A primary alert!
            </div>
            <div class="alert alert-mat-g-secondary" role="alert">
                LOL! a secondary alert!
            </div>
            <div class="alert alert-mat-g-success" role="alert">
                Great! A success alert!
            </div>
            <div class="alert alert-mat-g-danger" role="alert">
                Oh Oh! A danger alert!
            </div>
            <div class="alert alert-mat-g-warning" role="alert">
                Oops! A warning alert!
            </div>
            <div class="alert alert-mat-g-info" role="alert">
                Hey! A info alert!
            </div>
            <div class="alert alert-mat-g-light" role="alert">
                Cool! A light alert!
            </div>
            <div class="alert alert-mat-g-dark" role="alert">
                Join me and together...! A dark alert!
            </div>
            <div class="alert alert-mat-g-success" role="alert">
            <h4 class="alert-heading bold">Good Job!</h4>
            <p>Hello there!</p>
            <hr>
            <p class="mb-0">Green like https.</p>
            </div>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--BADGES MATERIAL GRADIENT-->
            <h5 class="bold">Badges</h5>
            <span class="badge badge-mat-g badge-mat-g-primary">Primary</span>
            <span class="badge badge-mat-g badge-mat-g-secondary">Secondary</span>
            <span class="badge badge-mat-g badge-mat-g-success">Success</span>
            <span class="badge badge-mat-g badge-mat-g-danger">Danger</span>
            <span class="badge badge-mat-g badge-mat-g-warning">Warning</span>
            <span class="badge badge-mat-g badge-mat-g-info">Info</span>
            <span class="badge badge-mat-g badge-mat-g-light">Light</span>
            <span class="badge badge-mat-g badge-mat-g-dark">Dark</span>
            <br><br>
            <button type="button" class="btn btn-mat-g btn-mat-g-primary">
            Notifications <span class="badge badge-mat-g badge-light">4</span>
            </button>
        </div>
        <div class="col-md-12">
            <hr>
            <!--BREADCRUMB-->
            <h5 class="bold">Breadcrumb</h5>    
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-mat-g-primary">
                <li class="breadcrumb-item active mat-g-white" aria-current="page">Primary</li>
            </ol>
            </nav>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-mat-g-light">
                <li class="breadcrumb-item"><a href="#">Light</a></li>
                <li class="breadcrumb-item active mat-g-black" aria-current="page">Library</li>
            </ol>
            </nav>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-mat-g-dark">
                <li class="breadcrumb-item"><a href="#">Dark</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active mat-g-white" aria-current="page">Data</li>
            </ol>
            </nav>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--BUTTONS-->
            <h5 class="bold">Buttons</h5>
            <h6>Normal</h6>
            <button type="button" class="btn btn-mat-g btn-mat-g-primary">Primary</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-secondary">Secondary</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-success">Success</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-danger">Danger</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-warning">Warning</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-info">Info</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-light">Light</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-dark">Dark</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-link">Link</button>
            <br><br>
            <h6>Outline</h6>
            <button type="button" class="btn btn-mat-g btn-mat-g-primary-out">Primary</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-secondary-out">Secondary</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-success-out">Success</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-danger-out">Danger</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-warning-out">Warning</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-info-out">Info</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-light-out">Light</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-dark-out">Dark</button>
            <button type="button" class="btn btn-mat-g btn-mat-g-link-out">Link</button> 
        </div>
        <div class="col-sm-12">
            <hr>
            <!--BUTTONS-->
            <h5 class="bold">Cards</h5>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-mat-g">
            <img src="{{asset('/assets/img/colorffy-twitter-card.png')}}" class="card-mat-g-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold ">One Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <a href="#" class="btn btn-mat-g btn-mat-g-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-mat-g">
                <img src="{{asset('/assets/img/colorffy-twitter-card.png')}}" class="card-mat-g-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Two Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <a href="#" class="btn btn-mat-g btn-mat-g-light">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-mat-g">
                <img src="{{asset('/assets/img/colorffy-twitter-card.png')}}" class="card-mat-g-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Three Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <a href="#" class="btn btn-mat-g btn-mat-g-link">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--LIST GROUP-->
            <h5 class="bold">List Group</h5>
            <ul class="list-group list-group-mat-g">
                <li class="list-group-item list-group-mat-g-item active">Cras justo odio</li>
                <li class="list-group-item list-group-mat-g-item">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-mat-g-item">Morbi leo risus</li>
                <li class="list-group-item list-group-mat-g-item active">Porta ac consectetur ac</li>
                <li class="list-group-item list-group-mat-g-item">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--MODAL-->
            <h5 class="bold">Modal</h5>
            <button type="button" class="btn btn-mat-g btn-mat-g-primary" data-toggle="modal" data-target="#exampleModal">
                Open Me!
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-mat-g">
                        <div class="modal-header modal-mat-g-body">
                        <h5 class="modal-title font-weight-bold text-body" id="exampleModalLabel">Some random title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                        <div class="modal-footer modal-mat-g-body">
                        <button type="button" class="btn btn-mat-g btn-mat-g-link" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-mat-g btn-mat-g-link">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--NAVBAR-->
            <h5 class="bold">Navbar</h5>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-mat-g">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    </div>
                </div>
            </nav><br>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-mat-g-gradient">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkupEx" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkupEx">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--PROGRESS-->
            <h5 class="bold">Progress</h5>
            <div class="progress">
                <div class="progress-bar mat-g-bg-primary" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar mat-g-bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar mat-g-bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
            <div class="progress">
                <div class="progress-bar mat-g-bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div><br>
        </div>
        <div class="col-sm-12">
            <hr>
            <!--FORM-->
            <h5 class="bold">Form</h5>
            <div class="card card-mat-g">
                <div class="card-body">
                    <h5 class="bold">Register</h5><hr>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control form-mat-g" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-mat-g" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-mat-g btn-mat-g-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


