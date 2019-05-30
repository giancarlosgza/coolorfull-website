@extends('layouts.app')
@section('title', 'Documentation MG')
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
    border-radius: 15px;
}
</style>
@endsection
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-montserrat text-indigo">Documentation MG</h3><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-form">
               <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <a href="#getting"><li class="list-group-item text-montserrat color-indigo">Getting Started</li></a>   
                        <a href="#start"><li class="list-group-item color-darkblue">Quick Start</li></a>
                        <a href="#download"><li class="list-group-item color-darkblue">Download</li></a>
                        <a href="#dependencies"><li class="list-group-item color-darkblue">Dependencies</li></a>
                        <a href="#links"><li class="list-group-item color-darkblue">Links</li></a>
                        <a href="#components"><li class="list-group-item text-montserrat color-indigo">Components</li></a>
                        <a href="#colors"><li class="list-group-item color-darkblue">Colors</li></a>
                        <a href="#alerts"><li class="list-group-item color-darkblue">Alerts</li></a>
                        <a href="#badges"><li class="list-group-item color-darkblue">Badges</li></a>
                        <a href="#breadcrumb"><li class="list-group-item color-darkblue">Breadcrumb</li></a>
                        <a href="#buttons"><li class="list-group-item color-darkblue">Buttons</li></a>
                        <a href="#cards"><li class="list-group-item color-darkblue">Cards</li></a>
                        <a href="#list"><li class="list-group-item color-darkblue">List Group</li></a>
                        <a href="#modals"><li class="list-group-item color-darkblue">Modals</li></a>
                        <a href="#navbars"><li class="list-group-item color-darkblue">Navbar</li></a>
                        <a href="#progress"><li class="list-group-item color-darkblue">Progress</li></a>
                        <a href="#form"><li class="list-group-item color-darkblue">Form</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-form">
                <div class="card-body">
                    <h6 id="getting" class="h6-responsive text-montserrat text-indigo">Getting Started</h6>
                    <h6 id="start" class="h6-responsive text-montserrat">Quick Start</h6>
                    <h6>
                        Hello! Getting started with Colorffy it's so fast.
                        Follow this guide and you will have a beautiful gradient UI 
                        <br>
                        For more information and componentes, check out Bootstrap 4 <a class="text-indigo" target="_blank" rel="noopener" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">documentation</a> 
                    </h6><hr>
                    <h6 id="download" class="h6-responsive text-montserrat">Download</h6>
                    <h6>
                        You can download the Material Gradients css from <a class="text-indigo" href="/design/system">here!</a> <br>
                    </h6><hr>
                    <h6 id="dependencies" class="h6-responsive text-montserrat">Dependencies</h6>
                    <h6>
                        Just Bootstrap 4’s core styles and jQuery. <br>
                        Read more about Bootstrap installation <a class="text-indigo" target="_blank" rel="noopener" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">here</a>
                    </h6><hr>
                    <h6 id="links" class="h6-responsive text-montserrat">Link</h6>
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
                    <h6 id="components" class="h6-responsive text-montserrat text-indigo">Components</h6>
                    <h6 id="colors" class="h6-responsive text-montserrat">Colors</h6>
                    <div class="card container-material">
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
                    <h6 id="alerts" class="h6-responsive text-montserrat">Alerts</h6>
                    <div class="card container-material">
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
                    <h6 id="badges" class="h6-responsive text-montserrat">Badges</h6>
                    <div class="card container-material">
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
                    <h6 id="breadcrumb" class="h6-responsive text-montserrat">Breadcrumb</h6>
                    <div class="card container-material">
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
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb breadcrumb-mat-g-dark">
                                            <li class="breadcrumb-item"><a href="#">Dark</a></li>
                                            <li class="breadcrumb-item active mat-g-white" aria-current="page">Data</li>
                                        </ol>
                                    </nav>
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!-- BREADCRUMB --&gt;</span><br>
                                            <span class="blue">&lt;nav</span> <span class="cyan">aria-label=</span><span class="red">"breadcrumb"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;ol</span> <span class="cyan">class=</span><span class="red">"breadcrumb breadcrumb-mat-g-primary"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item active mat-g-white"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Primary </span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;/ol></span><br>
                                            <span class="blue">&lt;/nav></span><br><br>

                                            <span class="blue">&lt;nav</span> <span class="cyan">aria-label=</span><span class="red">"breadcrumb"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;ol</span> <span class="cyan">class=</span><span class="red">"breadcrumb breadcrumb-mat-g-light"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Light </span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item active mat-g-black"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Library </span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;/ol></span><br>
                                            <span class="blue">&lt;/nav></span><br><br>
                                            
                                            <span class="blue">&lt;nav</span> <span class="cyan">aria-label=</span><span class="red">"breadcrumb"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;ol</span> <span class="cyan">class=</span><span class="red">"breadcrumb breadcrumb-mat-g-dark"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Dark </span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"breadcrumb-item active mat-g-white"</span> <span class="cyan">aria-current=</span><span class="red">"page"</span><span class="blue">&gt;</span> <span>Data </span><span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;/ol></span><br>
                                            <span class="blue">&lt;/nav></span><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 id="buttons" class="h6-responsive text-montserrat">Buttons</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-montserrat">Normal</h6>
                                    <h6>Just add the class <code>.ripple</code> to the buttons for a ripple efect</h6>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-primary ripple">Primary</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-secondary ripple">Secondary</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-success ripple">Success</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-danger ripple">Danger</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-warning ripple">Warning</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-info ripple">Info</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-light ripple">Light</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-dark ripple">Dark</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-link ripple">Link</button>
                                    <br><br>
                                    <h6 class="text-montserrat">Outline</h6>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-primary-out">Primary</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-secondary-out">Secondary</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-success-out">Success</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-danger-out">Danger</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-warning-out">Warning</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-info-out">Info</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-light-out">Light</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-dark-out">Dark</button>
                                    <button type="button" class="btn btn-mat-g btn-mat-g-link-out">Link</button><br><br>
                                    
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!-- BUTTONS --&gt;</span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-primary"</span><span class="blue">&gt;</span><span> Primary</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-secondary"</span><span class="blue">&gt;</span><span> Secondary</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-success"</span><span class="blue">&gt;</span><span> Success</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-danger"</span><span class="blue">&gt;</span><span> Danger</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-warning"</span><span class="blue">&gt;</span><span> Warning</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-info"</span><span class="blue">&gt;</span><span> Info</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-light"</span><span class="blue">&gt;</span><span> Light</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-dark"</span><span class="blue">&gt;</span><span> Dark</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-link"</span><span class="blue">&gt;</span><span> Link</span> <span class="blue">&lt;/button></span><br>
                                            <br>
                                            <span class="gray">&lt;!-- BUTTONS OUTLINE--&gt;</span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-primary-out"</span><span class="blue">&gt;</span><span> Primary</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-secondary-out"</span><span class="blue">&gt;</span><span> Secondary</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-success-out"</span><span class="blue">&gt;</span><span> Success</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-danger-out"</span><span class="blue">&gt;</span><span> Danger</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-warning-out"</span><span class="blue">&gt;</span><span> Warning</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-info-out"</span><span class="blue">&gt;</span><span> Info</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-light-out"</span><span class="blue">&gt;</span><span> Light</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-dark-out"</span><span class="blue">&gt;</span><span> Dark</span> <span class="blue">&lt;/button></span><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 id="cards" class="h6-responsive text-montserrat">Cards</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-montserrat">Simple</h6>
                                    <div class="card card-mat-g">
                                        <div class="card-body">
                                            <p class="card-text">A simple card.</p>
                                        </div>
                                    </div>
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!-- SIMPLE CARD --&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card card-mat-g"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;p</span> <span class="cyan">class=</span><span class="red">"card-text"</span><span class="blue">&gt;</span>A simple card.<span class="blue">&lt;/p></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                        </code>
                                    </figure><br>
                                </div>
                                <div class="col-md-12">
                                    <h6 class="text-montserrat">Card Image</h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-mat-g">
                                    <img src="{{asset('/assets/img/colorffy-twitter-card.png')}}" class="card-mat-g-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold ">One Card Title</h5>
                                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <hr>
                                            <a href="#" class="btn btn-mat-g btn-mat-g-primary">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-mat-g">
                                    <img src="{{asset('/assets/img/colorffy-twitter-card.png')}}" class="card-mat-g-img-top" alt="colorffy image">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold ">One Card Title</h5>
                                            <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <hr>
                                            <a href="#" class="btn btn-mat-g btn-mat-g-link">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--CARD IMAGE--&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card card-mat-g"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;img</span> <span class="cyan">src=</span><span class="red"> "..." </span>  <span class="cyan">class=</span><span class="red">"card-mat-g-img-top"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;h5</span> <span class="cyan">class=</span><span class="red">"card-title font-weight-bold"</span><span class="blue">&gt;</span>One Card Title<span class="blue">&lt;/h5></span><br>
                                            <span class="blue">&lt;p</span> <span class="cyan">class=</span><span class="red">"card-text"</span><span class="blue">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="blue">&lt;/p></span><br>
                                            <span class="blue">&lt;hr></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">href=</span><span class="red">"#"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-primary"</span><span class="blue">&gt;</span><span>Learn More</span><span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                        </code>
                                    </figure>
                                    <br>
                                </div>
                                 <div class="col-md-12">
                                    <h6 class="bold">Card Gradient</h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-mat-g mat-g-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold ">One Card Gradient</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <hr>
                                            <a href="#" class="btn btn-mat-g btn-mat-g-light-out">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-mat-g mat-g-light text-dark">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold ">One Card Gradient</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <hr>
                                            <a href="#" class="btn btn-mat-g btn-mat-g-link">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--CARD GRADIENT PRIMARY--&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card card-mat-g mat-g-primary text-white"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;h5</span> <span class="cyan">class=</span><span class="red">"card-title font-weight-bold"</span><span class="blue">&gt;</span>One Card Gradient<span class="blue">&lt;/h5></span><br>
                                            <span class="blue">&lt;p</span> <span class="cyan">class=</span><span class="red">"card-text"</span><span class="blue">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="blue">&lt;/p></span><br>
                                            <span class="blue">&lt;hr></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">href=</span><span class="red">"#"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-light-out"</span><span class="blue">&gt;</span><span>Learn More</span><span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br><br>

                                            <span class="gray">&lt;!--CARD GRADIENT LIGHT--&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card card-mat-g mat-g-light text-dark"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"card-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;h5</span> <span class="cyan">class=</span><span class="red">"card-title font-weight-bold"</span><span class="blue">&gt;</span>One Card Gradient<span class="blue">&lt;/h5></span><br>
                                            <span class="blue">&lt;p</span> <span class="cyan">class=</span><span class="red">"card-text"</span><span class="blue">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<span class="blue">&lt;/p></span><br>
                                            <span class="blue">&lt;hr></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">href=</span><span class="red">"#"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-link"</span><span class="blue">&gt;</span><span>Learn More</span><span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <h6 id="list" class="h6-responsive text-montserrat">List Group</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="list-group list-group-mat-g">
                                        <li class="list-group-item list-group-mat-g-item active">Cras justo odio</li>
                                        <li class="list-group-item list-group-mat-g-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item list-group-mat-g-item">Morbi leo risus</li>
                                        <li class="list-group-item list-group-mat-g-item active">Porta ac consectetur ac</li>
                                        <li class="list-group-item list-group-mat-g-item">Vestibulum at eros</li>
                                    </ul>
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--LIST GROUP--&gt;</span><br>
                                            <span class="blue">&lt;ul</span> <span class="cyan">class=</span><span class="red">"list-group list-group-mat-g"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"list-group-item list-group-mat-g-item active"</span><span class="blue">&gt;</span>Cras justo odio<span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"list-group-item list-group-mat-g-item"</span><span class="blue">&gt;</span>Dapibus ac facilisis in<span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"list-group-item list-group-mat-g-item"</span><span class="blue">&gt;</span>Morbi leo risus<span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"list-group-item list-group-mat-g-item active"</span><span class="blue">&gt;</span>Porta ac consectetur ac<span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;li</span> <span class="cyan">class=</span><span class="red">"list-group-item list-group-mat-g-item"</span><span class="blue">&gt;</span>Vestibulum at eros<span class="blue">&lt;/li></span><br>
                                            <span class="blue">&lt;/ul></span><br><br>
                                        </code>
                                    </figure>   
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <h6 id="modals" class="h6-responsive text-montserrat">Modal</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-mat-g btn-mat-g-primary ripple" data-toggle="modal" data-target="#exampleModal">
                                        Open Me!
                                    </button>
                                    <br><br>
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
                                                <button type="button" class="btn btn-mat-g btn-mat-g-link ripple" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-mat-g btn-mat-g-link ripple">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--MODAL--&gt;</span><br>

                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-primary"</span> <span class="cyan">data-target=</span><span class="red">"#exampleModal"</span> <span class="cyan">data-toggle=</span><span class="red">"modal"</span><span class="blue">></span> Open Me! <span class="blue">&lt;/button></span><br>
                                            <br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal fade"</span> <span class="cyan">id=</span><span class="red">"exampleModal"</span>  <span class="cyan">tabindex=</span><span class="red">"-1"</span>
                                            <span class="cyan">role=</span><span class="red">"dialog"</span> <span class="cyan">aria-labelledby=</span><span class="red">"exampleModalLabel"</span>  <span class="cyan">aria-hidden=</span><span class="red">"true"</span><span class="blue">&gt;</span><br>
                                            
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal-dialog"</span> <span class="cyan">role=</span><span class="red">"document"</span><span class="blue">&gt;</span><br>
                                            
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal-content modal-mat-g"</span><span class="blue">&gt;</span><br>
                                            
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal-header modal-mat-g-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;h5</span> <span class="cyan">class=</span><span class="red">"modal-title font-weight-bold text-body"</span> <span class="cyan">id=</span><span class="red">"exampleModalLabel"</span><span class="blue">&gt;</span>Some randome title<span class="blue">&lt;/h5></span><br>
                                            
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">button"</span> <span class="cyan">class=</span><span class="red">"close"</span>
                                            <span class="cyan">data-dismiss=</span><span class="red">"modal"</span> <span class="cyan">aria-label=</span><span class="red">"Close"</span><span class="blue">&gt;</span>
                                            <br><span class="blue">&lt;span</span> <span class="cyan">aria-hidden=</span> <span class="red">"true"</span><span class="blue"> ></span> & times; <span class="blue">&lt;/span></span>
                                            <br><span class="blue">&lt;/button></span><br>

                                            <span class="blue">&lt;/div></span><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal-body"</span><span class="blue">&gt;</span><br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                                            <span class="blue">&lt;/div></span><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"modal-footer modal-mat-g-body"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-link"</span> <span class="cyan">data-dismiss=</span><span class="red">"modal"</span><span class="blue">></span> Close <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">button"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-link"</span><span class="blue">></span> Continue <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;/div></span><br>

                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 id="navbars" class="h6-responsive text-montserrat">Navbars</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                </div>
                                <div class="col-md-12">
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--NAVBAR--&gt;</span><br>

                                            <span class="blue">&lt;nav</span> <span class="cyan">class=</span><span class="red">"navbar navbar-expand-lg navbar-light bg-light navbar-mat-g"</span> <span class="blue">></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"navbar-brand"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Navbar <span class="blue">&lt;/a></span><br>
                                            
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"navbar-toggler"</span> <span class="cyan">data-toggle=</span><span class="red">"collapse"</span>  <span class="cyan">data-target=</span><span class="red">"navbarNavAltMarkup"</span>
                                            <span class="cyan">aria-controls=</span><span class="red">"navbarNavAltMarkup"</span> <span class="cyan">aria-expanse=</span><span class="red">"false"</span> <span class="cyan">aria-label=</span><span class="red">"Toggle navigation"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;span</span> <span class="cyan">class=</span><span class="red">"navbar-toggler-icon"</span><span class="blue">></span> <span class="blue">&lt;/span></span><br>
                                            <span class="blue">&lt;/button></span><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"collapse navbar-collapse"</span> <span class="cyan">id=</span><span class="red">"navbarNavAltMarkup"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"navbar-nav"</span><span class="blue">&gt;</span><br> 
                                            
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link active"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Home 
                                            <span class="blue">&lt;span</span> <span class="cyan">class=</span><span class="red">"sr-only"</span><span class="blue">></span> (current) <span class="blue">&lt;/span></span> <span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Features <span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Pricing <span class="blue">&lt;/a></span><br>
                                            
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/nav></span><br><br>

                                            <span class="gray">&lt;!--NAVBAR GRADIENT--&gt;</span><br>

                                            <span class="blue">&lt;nav</span> <span class="cyan">class=</span><span class="red">"navbar navbar-expand-lg navbar-dark bg-dark navbar-mat-g-gradient"</span> <span class="blue">></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"navbar-brand"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Navbar <span class="blue">&lt;/a></span><br>
                                            
                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"button"</span> <span class="cyan">class=</span><span class="red">"navbar-toggler"</span> <span class="cyan">data-toggle=</span><span class="red">"collapse"</span>  <span class="cyan">data-target=</span><span class="red">"navbarNavAltMarkup"</span>
                                            <span class="cyan">aria-controls=</span><span class="red">"navbarNavAltMarkup"</span> <span class="cyan">aria-expanse=</span><span class="red">"false"</span> <span class="cyan">aria-label=</span><span class="red">"Toggle navigation"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;span</span> <span class="cyan">class=</span><span class="red">"navbar-toggler-icon"</span><span class="blue">></span> <span class="blue">&lt;/span></span><br>
                                            <span class="blue">&lt;/button></span><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"collapse navbar-collapse"</span> <span class="cyan">id=</span><span class="red">"navbarNavAltMarkup"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"navbar-nav"</span><span class="blue">&gt;</span><br> 
                                            
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link active"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Home 
                                            <span class="blue">&lt;span</span> <span class="cyan">class=</span><span class="red">"sr-only"</span><span class="blue">></span> (current) <span class="blue">&lt;/span></span> <span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Features <span class="blue">&lt;/a></span><br>
                                            <span class="blue">&lt;a</span> <span class="cyan">class=</span><span class="red">"nav-item nav-link"</span> <span class="cyan">href=</span><span class="red">"#"</span><span class="blue">&gt;</span> Pricing <span class="blue">&lt;/a></span><br>
                                            
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/nav></span><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h6 id="progress" class="h6-responsive text-montserrat">Progress</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar mat-g-bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <div class="col-md-12">
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--PROGRESS BAR--&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress-bar mat-g-bg-primary"</span>
                                            <span class="cyan">role=</span><span class="red">"progressbar"</span>
                                            <span class="cyan">style=</span><span class="red">"width: 25%"</span>
                                            <span class="cyan">aria-valuenow=</span><span class="red">"25"</span>
                                            <span class="cyan">aria-valuemin=</span><span class="red">"0"</span>
                                            <span class="cyan">aria-valuemax=</span><span class="red">"100"</span>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress-bar mat-g-bg-info"</span>
                                            <span class="cyan">role=</span><span class="red">"progressbar"</span>
                                            <span class="cyan">style=</span><span class="red">"width: 50%"</span>
                                            <span class="cyan">aria-valuenow=</span><span class="red">"50"</span>
                                            <span class="cyan">aria-valuemin=</span><span class="red">"0"</span>
                                            <span class="cyan">aria-valuemax=</span><span class="red">"100"</span>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress-bar mat-g-bg-warning"</span>
                                            <span class="cyan">role=</span><span class="red">"progressbar"</span>
                                            <span class="cyan">style=</span><span class="red">"width: 75%"</span>
                                            <span class="cyan">aria-valuenow=</span><span class="red">"75"</span>
                                            <span class="cyan">aria-valuemin=</span><span class="red">"0"</span>
                                            <span class="cyan">aria-valuemax=</span><span class="red">"100"</span>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"progress-bar mat-g-bg-danger"</span>
                                            <span class="cyan">role=</span><span class="red">"progressbar"</span>
                                            <span class="cyan">style=</span><span class="red">"width: 100%"</span>
                                            <span class="cyan">aria-valuenow=</span><span class="red">"100"</span>
                                            <span class="cyan">aria-valuemin=</span><span class="red">"0"</span>
                                            <span class="cyan">aria-valuemax=</span><span class="red">"100"</span>
                                            <span class="blue">&lt;/div></span><br>
                                            <span class="blue">&lt;/div></span><br>
                                        </code>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <h6 id="form" class="h6-responsive text-montserrat">Form</h6>
                    <div class="card container-material">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-mat-g" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-mat-g" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-mat-g btn-mat-g-primary ripple">Submit</button>
                                    </form>
                                    <br>
                                    <figure class="codebox">
                                        <code data-lang="html">
                                            <span class="gray">&lt;!--FORM--&gt;</span><br>
                                            <span class="blue">&lt;form</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"form-group"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;input</span> 
                                            <span class="cyan">type=</span><span class="red">"email"</span>
                                            <span class="cyan">class=</span><span class="red">"form-control form-mat-g"</span>
                                            <span class="cyan">id=</span><span class="red">"exampleInputEmail1"</span>
                                            <span class="cyan">aria-describedby=</span><span class="red">"emailHelp"</span>
                                            <span class="cyan">placeholder=</span><span class="red">"Email"</span>
                                            <span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;/div></span><br>

                                            <span class="blue">&lt;div</span> <span class="cyan">class=</span><span class="red">"form-group"</span><span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;input</span> 
                                            <span class="cyan">type=</span><span class="red">"password"</span>
                                            <span class="cyan">class=</span><span class="red">"form-control form-mat-g"</span>
                                            <span class="cyan">id=</span><span class="red">"exampleInputPassword1"</span>
                                            <span class="cyan">placeholder=</span><span class="red">"Password"</span>
                                            <span class="blue">&gt;</span><br>
                                            <span class="blue">&lt;/div></span><br>

                                            <span class="blue">&lt;button</span> <span class="cyan">type=</span><span class="red">"submit"</span> <span class="cyan">class=</span><span class="red">"btn btn-mat-g btn-mat-g-primary"</span><span class="blue">&gt;</span><span> Submit</span> <span class="blue">&lt;/button></span><br>
                                            <span class="blue">&lt;/form></span><br><br>
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