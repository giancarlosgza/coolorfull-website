<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-v2 - Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700|Roboto:400,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Sidebar CSS -->
    <link rel="stylesheet" href="{{asset('templates/dashboard-v2/css/sidebar.css')}}">
    <!-- Colorffy Dashboard v2 Styles-->
    <link rel="stylesheet" href="{{asset('templates/dashboard-v2/css/styles.css')}}">
    <!-- Dark Mode JS -->
    <script async src="{{asset('templates/dashboard-v2/js/dark-mode.js')}}">
    </script>
</head>

<body>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3 class="text-montserrat font-weight-bold">Admin-v2</h3>
        </div>
        <ul class="list-sidebar components">
            <li class="active">
                <a href="/templates/dashboard-v2/index" class="ripple"><i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="#componentsSubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle ripple"><i class="fab fa-html5"></i> Components
                    <i class="fas fa-caret-down"></i></a>
                <ul class="collapse list-sidebar" id="componentsSubmenu">
                    <li>
                        <a href="/templates/dashboard-v2/components#buttons" class="ripple">Buttons</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/components#cards" class="ripple">Cards</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/components#modals" class="ripple">Modals</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/components#navbar" class="ripple">Navbar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#utilitiesSubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle ripple"><i class="fab fa-css3-alt"></i> Utilities
                    <i class="fas fa-caret-down"></i></a>
                <ul class="collapse list-sidebar" id="utilitiesSubmenu">
                    <li>
                        <a href="/templates/dashboard-v2/utilities#borders" class="ripple">Borders</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/utilities#colors" class="ripple">Colors</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/utilities#typography" class="ripple">Typography</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ripple"><i
                        class="fas fa-file-code"></i> Pages
                    <i class="fas fa-caret-down"></i></a>
                <ul class="collapse list-sidebar" id="pagesSubmenu">
                    <li>
                        <a href="/templates/dashboard-v2/pages/login" class="ripple">Login</a>
                    </li>
                    <li>
                        <a href="/templates/dashboard-v2/pages/register" class="ripple">Register</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!--END SIDEBAR-->

    <!--CONTENT-->
    <div id="content">
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-align-left"></i>
                </button>
                <a href="/templates/themes" class="nav-item nav-link ripple text-montserrat font-weight-bold"> Colorffy</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-item nav-link ripple" data-toggle="modal" data-target="#notificationModal"><i
                                class="fas fa-file-alt"></i> <span class="badge badge-secondary">0</span></a>
                        <a class="nav-item nav-link ripple" data-toggle="modal" data-target="#passwordModal"><i
                                class="fas fa-key"></i></a>
                        <a class="nav-item nav-link ripple" href="#">John Doe</a>
                        <a class="nav-item nav-link ripple" href="#"><i class="fas fa-sign-out-alt"></i></a>
                    </ul>
                </div>
            </div>
        </nav><br>
        <!--END NAVBAR-->

        <!--MAIN CONTENT-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-primary font-weight-bold">Dashboard</h3>
                </div>
                <div class="col-md-6 text-right">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" id="checkbox" class="custom-control-input">
                                <label class="custom-control-label theme-switch" for="checkbox">Dark Mode</label>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h4 class="title text-montserrat">Today Sales</h4>
                                    <h1 class="font-weight-bold text-primary"><i class="fas fa-money-bill-wave"></i>
                                        $100.50</h1>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h4 class="title text-montserrat">Orders</h4>
                                    <h1 class="font-weight-bold text-primary"><i class="fas fa-box-open"></i> 50</h1>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h4 class="title text-montserrat">New Visitors</h4>
                                    <h1 class="font-weight-bold text-primary"><i class="fas fa-chart-area"></i> 130</h1>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h4 class="title text-montserrat">Monthly Sales</h4>
                                    <h1 class="font-weight-bold text-primary"><i class="fas fa-money-check-alt"></i>
                                        $2450.00</h1>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="font-weight-bold text-montserrat"> Demo bar Chart.js</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChartDemo1" width="auto" height="auto"></canvas>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="font-weight-bold text-montserrat">Demo 2 line Chart.js</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChartDemo2" width="auto" height="auto"></canvas>
                        </div>
                    </div><br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="font-weight-bold text-montserrat">Tables</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END MAIN CONTENT-->

        <!--MODALS-->
        <!-- PASSWORD MODAL -->
        <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold text-montserrat" id="exampleModalLabel">Change Password
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="form-label-group">
                                <input type="password" class="form-control" id="previousPassword"
                                    placeholder="Password">
                                <label for="previousPassword">Previous Password</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" class="form-control" id="newPassword" placeholder="Password">
                                <label for="newPassword">New Password</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Password">
                                <label for="confirmPassword">Confirm Password</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- NOTIFICATIONS MODAL -->
        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold text-montserrat" id="exampleModalLabel">Activities <span
                                class="badge badge-secondary">0 Activities left</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <h4>Activity 1</h4>
                                <hr>
                                <h4>There's not activities right now</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-link" data-dismiss="modal">View all activities</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODALS-->

        <!--FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center small align-self-center">©2019 Colorffy v2.3 🎉</div>
                </div>
            </div>
        </footer>

        <!--END FOOTER-->
    </div>
    <!--END CONTENT-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script src="{{asset('templates/dashboard-v2/js/sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('templates/dashboard-v2/js/vendor/chart.min.js')}}">
    </script>
    <script src="{{asset('templates/dashboard-v2/js/vendor/demo-line.js')}}">
    </script>
</body>

</html>
