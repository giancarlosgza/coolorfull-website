@extends('layouts.app')
@section('title', 'Docs Design System')
@section('content')
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
                                    
                                        <code data-lang="html">
                                            <span class="cp">&lt;!doctype html&gt;</span><br>
                                            <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span><br>
                                            <span class="nt">&lt;head&gt;</span><br>
                                            <span class="c">&lt;!-- Required meta tags --&gt;</span><br>
                                            <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span><br>
                                            <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1, shrink-to-fit=no"</span><span class="nt">&gt;</span><br>
                                            
                                            <span class="c">&lt;!-- Bootstrap CSS --&gt;</span><br>
                                            <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"</span> <span class="na">integrity=</span><span class="s">"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;</span><br>
                                            
                                            <span class="nt">&lt;title&gt;</span>Hello, world!<span class="nt">&lt;/title&gt;</span><br>
                                            <span class="nt">&lt;/head&gt;</span><br>
                                            <span class="nt">&lt;body&gt;</span><br>
                                            <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span><br>
                                            
                                            <span class="c">&lt;!-- Optional JavaScript --&gt;</span><br>
                                            <span class="c">&lt;!-- jQuery first, then Popper.js, then Bootstrap JS --&gt;</span><br>
                                            <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://code.jquery.com/jquery-3.3.1.slim.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span><br>
                                            <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span><br>
                                            <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"</span> <span class="na">integrity=</span><span class="s">"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span><br>
                                            <span class="nt">&lt;/body&gt;</span><br>
                                            <span class="nt">&lt;/html&gt;</span><br>
                                        </code>
                                    
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