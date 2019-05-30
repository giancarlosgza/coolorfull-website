@extends('layouts.app')
@section('title', 'Team')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-body">👨‍💻 Team</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <h4 class="text-montserrat">Giancarlos Garza</h4>
                    <p>Founder | UI & UX</p><hr>
                    <a href="https://twitter.com/giancarlosgza" class="color-indigo footer-icon" title="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/giancarlosgza" class="color-indigo footer-icon" title="Github" target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <h4 class="text-montserrat">Carlos Lopez</h4>
                    <p>Co-Founder | Developer</p><hr>
                    <a href="https://twitter.com/carloselilopez" class="color-indigo footer-icon" title="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/Serveix" class="color-indigo footer-icon" title="Github" target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-form">
                <div class="card-body text-center">
                    <h4 class="text-montserrat">Abner Anzures</h4>
                    <p>Co-Founder | Designer</p><hr>
                    <a href="https://twitter.com/AbnerAnzures" class="color-indigo footer-icon" title="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/AAbbnneerr" class="color-indigo footer-icon" title="Github" target="_blank" rel="noopener"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection