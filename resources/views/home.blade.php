@extends('layouts.app')
@section('title', 'Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                     @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="bold text-body">Hi {{ Auth::user()->name }}! 👋</h4>
                    <h5 class="bold">{{ Auth::user()->username }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold"><i class="fas fa-user"></i> Profile Information</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th>{{ Auth::user()->name }}</th>
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
        <div class="col-sm-12 col-md-4">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold"><i class="fas fa-share-alt-square"></i> Share Colorffy</h6>
                    <hr>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
            </div>
            <div class="card card-form">
                <div class="card-body bold">
                    <h6 class="bold"><i class="fas fa-fill-drip"></i> Color Shortcuts</h6>
                    <hr>
                    <a href="/saved/gradients" class="color-indigo">🔖 My Gradients</a><br>
                    <a href="/favorites/gradients" class="color-indigo text-spacing">❤️ Liked Gradients</a><br>
                    <a href="/favorites/palettes" class="color-indigo">❤️ Liked Palettes</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons'" async="async"></script>
    @if($alert)
    <script>
        swal("{{ _('Monthly subscription') }}", "{{ $alertMessage }}", "warning");
    </script>
    @endif
@endsection