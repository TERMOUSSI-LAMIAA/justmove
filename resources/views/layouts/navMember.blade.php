<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar-height">
    <div class="container-fluid">
        <!-- Brand with Logo -->
       <img src="{{ URL::asset('/images/h.png') }}" alt="JustMove Logo" class="navbar-logo" height="50">
        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Static links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('displaySports') }}">Sports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('memberSession') }}">My Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <!-- Conditional links based on user authentication -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registerForm') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('loginform') }}">Log in</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>