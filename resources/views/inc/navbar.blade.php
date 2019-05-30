<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand text-montserrat logo-brand" href="/">
            <img src="{{asset('/assets/img/logo-form.svg')}}" width="50px" alt="Colorffy logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link nav-color" href="/">Home</a>
                </li>
                <li class="nav-item {{ (request()->is('palettes/catalog')) ? 'active' : '' }}">
                    <a class="nav-link nav-color" href="/palettes/catalog">Palettes</a>
                </li>
                <li class="nav-item {{ (request()->is('gradients/catalog')) ? 'active' : '' }}">
                    <a class="nav-link nav-color" href="/gradients/catalog">Gradients</a>
                </li>
                <li class="nav-item {{ (request()->is('design/system')) ? 'active' : '' }}">
                    <a class="nav-link nav-color" href="/design/system">Design System</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdownGG" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Tools <span class="badge badge-secondary">New</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownGG">
                        <a class="dropdown-item" href="/generator/gradients">2️⃣ Color Gradient</a>
                        <a class="dropdown-item" href="/generator/mgradients">3️⃣ Color Gradient</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/random/color">🎲 Random Color</a>
                        <a class="dropdown-item" href="/image/color">🖼️ Image Colors</a>              
                    </div>
                </li>
                @guest
                <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
                    <a class="nav-link nav-color" href="/login">Login</a>
                </li>
                <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
                    <a class="nav-link nav-color logo-brand" href="/register">Sign Up</a>
                </li>
                @else
                @if(auth()->user()->is_admin == 1)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdownHK" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Housekeeping
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownHK">
                        <a class="dropdown-item" href="/palettes/admin/panel">⚙️ Palettes Panel</a>
                        <a class="dropdown-item" href="/gradients/admin/panel">⚙️ Gradients Panel</a>                       
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAc" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAc">
                        <a class="dropdown-item" href="/home">✌️ Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/saved/gradients">🔖 My Gradients</a>
                        <a class="dropdown-item" href="/favorites/palettes">❤️ Liked Palettes</a>
                        <a class="dropdown-item" href="/favorites/gradients">❤️ Liked Gradients</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            👋 {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAc" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAc">
                        <a class="dropdown-item" href="/home">✌️ Account</a>
                        @if(!Auth::user()->validSubscription())
                        <a class="dropdown-item" href="{{ route('payingForm') }}">⚠️ Renew Subscription</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/saved/gradients">🔖 My Gradients</a>
                        <a class="dropdown-item" href="/favorites/palettes">❤️ Liked Palettes</a>
                        <a class="dropdown-item" href="/favorites/gradients">❤️ Liked Gradients</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            👋 {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endif
                @endguest
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" id="checkbox" class="custom-control-input">
                            <label class="custom-control-label theme-switch" for="checkbox">Dark Mode</label>
                        </div>
                    </label>
                </div>
            </ul>
        </div>
    </div>
</nav>
<br>
