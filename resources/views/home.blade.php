@extends('layouts.app')
@section('title', 'Account')

@section('content')
<div class="section profile-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-montserrat">Hi {{ Auth::user()->name }}! 👋</h3>
                <h5 class="text-montserrat">{{ Auth::user()->email }}</h5>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-montserrat">Shortcuts</h4>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <a href="/saved/gradients">
                <div class="card shadow-medium">
                    <div class="card-body">
                        <img src="/assets/img/illustrations/designer_3.svg" width="54%" alt="">
                        <h3 class="bold-500 color-indigo">
                            <br>
                            My Gradients
                        </h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/favorites/palettes">
                <div class="card shadow-medium">
                    <div class="card-body">
                        <img src="/assets/img/illustrations/creative_process_2.svg" width="61%" alt="">
                        <h3 class="bold-500 color-indigo">
                            <br>
                            Liked Palettes
                        </h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="/favorites/gradients">
                <div class="card shadow-medium">
                    <div class="card-body">
                        <img src="/assets/img/illustrations/like.svg" width="50%" alt="">
                        <h3 class="bold-500 color-indigo">
                            <br>
                            Liked Gradients
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h4 class="text-montserrat">Your Information</h4>
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="text-montserrat"><i class="fas fa-user"></i> Profile Information</h6>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Account</th>
                                    <td>@if(Auth::user()->is_admin == 1)Admin @else Pro @endif</td>
                                </tr>
                                <tr>
                                    <th scope="row">Paid Until</th>
                                    <td>
                                        @if(Auth::user()->paid_until == NULL)
                                        Lifetime 🔥
                                        @else
                                        {{date('F, d, Y', strtotime(Auth::user()->paid_until))}} 👌
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons'"
    async="async"></script>
@if($alert)
<script>
    swal("{{ _('Monthly subscription') }}", "{{ $alertMessage }}", "warning");

</script>
@endif
@endsection
