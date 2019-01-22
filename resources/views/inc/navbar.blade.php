<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand nav-color logo" href="/">Colorffy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link nav-color" href="/"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" href="/palettes/catalog"><i class="fas fa-palette"></i> Palettes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" href="/gradients/catalog"><i class="fas fa-fill"></i> Gradients</a>
                </li>
                @guest
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdownHK" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Housekeeping
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownHK">
                        <a class="dropdown-item bold" href="/palettes/admin/panel"><i class="fas fa-palette"></i> Palettes Panel</a>
                        <a class="dropdown-item bold" href="/gradients/admin/panel"><i class="fas fa-fill"></i> Gradients Panel</a>                       
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAc" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAc">
                        <a class="dropdown-item bold" href="/home"><i class="fas fa-user-circle"></i> Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<br>
