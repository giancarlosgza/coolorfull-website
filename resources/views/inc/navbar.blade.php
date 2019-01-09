<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a class="navbar-brand nav-color" href="/">Coolorfull</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link nav-color" href="/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" href="#">Paletas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" href="/gradients/catalog">Degradados</a>
                </li>
                @guest
                @else
                <li class="nav-item">
                    <a class="nav-link nav-color" href="/gradients/admin/panel">{{ Auth::user()->name }}</a>
                </li>
                
                @endguest
            </ul>
        </div>
    </div>
</nav>
<br>