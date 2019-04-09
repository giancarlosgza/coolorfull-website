@extends('layouts.app')
@section('title', 'Docs Design System')
@section('content')
@section('styles')
<style>
.gray {
    color: gray !important;
}
.red {
    color: red !important;
}
.blue {
    color: blue !important;
}
.cyan {
    color: cyan !important;
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
        <div class="col-md-4">
            <div class="card card-form">
               <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bold color-indigo">Getting Started</li>    
                        <li class="list-group-item">Quick Start</li>
                        <li class="list-group-item">Download</li>
                        <li class="list-group-item">Dependencies</li>
                        <li class="list-group-item">Starter Template</li>
                        <li class="list-group-item bold color-indigo">Components</li>
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
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="h6-responsive bold">Quick Start</h6>
                    <h6>
                        Hello! Getting started with Colorffy it's so fast.
                        Follow this guide and you will have a beautiful gradient UI 
                    </h6><hr>
                    <h6 class="h6-responsive bold">Download</h6>
                    <h6>
                        You can download the Material Gradients css from <a class="bold color-darkblue" href="/design/system">here!</a> <br>
                        Just copy-paste the stylesheet link into your head 
                        after Bootstrap styles to load this css.
                    </h6><hr>
                    <h6 class="h6-responsive bold">Dependencies</h6>
                    <h6>
                        Just Bootstrap 4’s core styles and jQuery. <br>
                        Read more about Bootstrap installation <a class="bold color-darkblue" target="_blank" rel="noopener" href="https://getbootstrap.com/docs/4.3/getting-started/introduction/">here</a>
                    </h6><hr>
                    <h6 class="h6-responsive bold">Starter Template</h6>
                    <h6>
                        <div class="card">
                            <div class="card-body">
                                <p>For example, if I have <code>&lt;p&gt</code>, I want the div to display in the browser as text not have the browser interpret it as html. Is this complicated to do?</p>
                                <figure>
                                    <pre>
                                        <code data-lang="html">
                                            <span class="gray">&lt;!-- Colorffy Material Gradient CSS --&gt;</span><br>
                                            <span class="blue">&lt;link</span> <span class="cyan">rel=</span><span class="red">"stylesheet"</span> <span class="cyan">href=</span><span class="red">"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"</span> <span class="blue">&gt;</span><br>
                                        </code>
                                    </pre>
                                </figure>
                            </div>
                        </div>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection