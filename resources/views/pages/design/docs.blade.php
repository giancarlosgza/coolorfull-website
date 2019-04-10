@extends('layouts.app')
@section('title', 'Docs Design System')
@section('content')
@section('styles')
<link rel="stylesheet" href="{{ asset('/assets/css/design-system/colorffy.matgradient.css')}}">
<style>
.gray {
    color: #757575 !important;
}
.red {
    color: #b71c1c !important;
}
.blue {
    color: #0d47a1 !important;
}
.cyan {
    color: #0097a7 !important;
}
.codebox {
    padding: 20px;
    margin-top: 0;
    margin-bottom: 0;
    background-color: #f8f8f8;
    border: 0;
}
</style>
@endsection
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Docs Design System</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-form">
               <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bold color-indigo">Getting Started</li>    
                        <li class="list-group-item">Quick Start</li>
                        <li class="list-group-item">Download</li>
                        <li class="list-group-item">Dependencies</li>
                        <li class="list-group-item">Starter Template</li>
                        <li class="list-group-item bold color-indigo">Components</li>
                        <li class="list-group-item">Colors</li>
                        <li class="list-group-item">Alerts</li>
                        <li class="list-group-item">Badges</li>
                        <li class="list-group-item">Breadcrumb</li>
                        <li class="list-group-item">Buttons</li>
                        <li class="list-group-item">Cards</li>
                        <li class="list-group-item">List Group</li>
                        <li class="list-group-item">Modal</li>
                        <li class="list-group-item">Navbar</li>
                        <li class="list-group-item">Progress</li>
                        <li class="list-group-item">Form</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="h6-responsive bold color-indigo">Getting Started</h6>
                    <h6 class="h6-responsive bold">Quick Start</h6>
                    <h6>
                        Hello! Getting started with Colorffy it's so fast.
                        Follow this guide and you will have a beautiful gradient UI 
                    </h6><hr>
                    <h6 class="h6-responsive bold">Download</h6>
                    <h6>
                        You can download the Material Gradients css from <a class="bold color-darkblue" href="/design/system">here!</a> <br>
                    </h6><hr>
                    <h6 class="h6-responsive bold">Dependencies</h6>
                    <h6>
                        Just Bootstrap 4’s core styles and jQuery. <br>
                        Read more about Bootstrap installation <a class="bold color-darkblue" target="_blank" rel="noopener" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">here</a>
                    </h6><hr>
                    <h6 class="h6-responsive bold">Link</h6>
                    <h6 class="h6-responsive">Just copy-paste the stylesheet link into your head after Bootstrap styles to load this css.</h6>
                    <div class="card">
                        <div class="card-body">
                            <figure class="codebox">
                                <code data-lang="html">
                                    <span class="gray">&lt;!-- Colorffy Material Gradient CSS --&gt;</span><br>
                                    <span class="blue">&lt;link</span> <span class="cyan">rel=</span><span class="red">"stylesheet"</span> <span class="cyan">href=</span><span class="red">"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"</span> <span class="blue">&gt;</span><br>
                                    <span class="blue">&lt;link</span> <span class="cyan">rel=</span><span class="red">"stylesheet"</span> <span class="cyan">href=</span><span class="red">"/css/colorffy.matgradient.css"</span> <span class="blue">&gt;</span><br>
                                </code>
                            </figure>
                        </div>
                    </div><hr>
                    <h6 class="h6-responsive bold color-indigo">Components</h6>
                    <h6 class="h6-responsive bold">Colors</h6>
                    <div class="card">
                        <div class="card-body">
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
                            <figure class="codebox">
                                <code data-lang="html">
                                    <span class="gray">&lt;!-- COLORS --&gt;</span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-primary text-white"</span><span class="blue">&gt;</span><span> .mat-g-primary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-secondary text-dark"</span><span class="blue">&gt;</span><span> .mat-g-secondary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-success text-white"</span><span class="blue">&gt;</span><span> .mat-g-success</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-danger text-white"</span><span class="blue">&gt;</span><span> .mat-g-danger</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-warning text-dark"</span><span class="blue">&gt;</span><span> .mat-g-warning</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-info text-white"</span><span class="blue">&gt;</span><span> .mat-g-info</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-light text-dark"</span><span class="blue">&gt;</span><span> .mat-g-light</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"mat-g-dark text-white"</span><span class="blue">&gt;</span><span> .mat-g-dark</span> <span class="blue">&lt;/div></span><br>               
                                </code>
                            </figure>
                        </div>
                    </div>
                    <hr>
                    <h6 class="h6-responsive bold">Alerts</h6>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                </div>
                            </div>
                            <figure class="codebox">
                                <code data-lang="html">
                                    <span class="gray">&lt;!-- ALERTS --&gt;</span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-primary"</span> <span class="cyan">role=</span><span class="red">"alert"</span> <span class="blue">&gt;</span><span> alert primary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-secondary"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert secondary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-success"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert success</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-danger"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert danger</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-warning"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert warning</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-info"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert info</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-light"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert light</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"alert alert-mat-g-dark"</span> <span class="cyan">role=</span><span class="red">"alert"</span><span class="blue">&gt;</span><span> alert dark</span> <span class="blue">&lt;/div></span><br>               
                                </code>
                            </figure>
                        </div>
                    </div>
                    <hr>
                    <h6 class="h6-responsive bold">Badges</h6>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="badge badge-mat-g badge-mat-g-primary">Primary</span>
                                    <span class="badge badge-mat-g badge-mat-g-secondary">Secondary</span>
                                    <span class="badge badge-mat-g badge-mat-g-success">Success</span>
                                    <span class="badge badge-mat-g badge-mat-g-danger">Danger</span>
                                    <span class="badge badge-mat-g badge-mat-g-warning">Warning</span>
                                    <span class="badge badge-mat-g badge-mat-g-info">Info</span>
                                    <span class="badge badge-mat-g badge-mat-g-light">Light</span>
                                    <span class="badge badge-mat-g badge-mat-g-dark">Dark</span>
                                </div>
                            </div><br>
                            <figure class="codebox">
                                <code data-lang="html">
                                    <span class="gray">&lt;!-- BADGES --&gt;</span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-primary"</span> <span class="blue">&gt;</span><span> Primary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-secondary"</span> <span class="blue">&gt;</span><span> Secondary</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-success"</span> <span class="blue">&gt;</span><span> Success</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-danger"</span> <span class="blue">&gt;</span><span> Danger</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-warning"</span> <span class="blue">&gt;</span><span> Warning</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-info"</span> <span class="blue">&gt;</span><span> Info</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-light"</span> <span class="blue">&gt;</span><span> Light</span> <span class="blue">&lt;/div></span><br>
                                    <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"badge badge-mat-g badge-mat-g-dark"</span> <span class="blue">&gt;</span><span> Dark</span> <span class="blue">&lt;/div></span><br>               
                                </code>
                            </figure>
                        </div>
                    </div>
                    <hr>
                    <h6 class="h6-responsive bold">Breadcrumb</h6>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!-- BREADCRUMB --&gt;</span><br>
                                            <span class="blue">&lt;nav</span> <span class="cyan">aria-label=</span><span class="red">"breadcrumb"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;ol</span> <span class="cyan">class=</span><span class="red">"breadcrumb breadcrumb-mat-g-primary"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item active mat-g-white"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Library</span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;/ol></span>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection