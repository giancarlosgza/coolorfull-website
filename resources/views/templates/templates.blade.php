@extends('layouts.app')
@section('title', 'Templates')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-montserrat text-indigo">Templates</h3>
            <h5>Become PRO, download the themes, use it for whatever you want and modify if you want.</h5>
            <br>
        </div>
        <div class="col-md-4">
            <div class="card shadow-medium">
            <img src="{{asset('assets/img/admin-v2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="text-indigo text-center">Admin-v2</h3>
                    <hr>
                    <h5>A Bootstrap 4 material design admin theme with dark mode toggle.</h5>
                    <hr>
                    <a href="/templates/dashboard-v2/index" target="_blank" class="btn btn-primary-light shadow-medium">Live Preview</a>
                    @guest
                    <button href="#" class="btn btn-primary shadow-medium" disabled>Download (PRO)</button>
                    @else
                    <a href="https://dl.dropboxusercontent.com/s/0jonin02cxccz8m/dashboard-v2.zip?dl=0" download class="btn btn-primary shadow-medium">Download</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
