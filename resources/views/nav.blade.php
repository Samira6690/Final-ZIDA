<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
        <a href="" class="logo"><span>S</span>yliste <span>H</span>ouse</a>

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ asset('/accueil') }}">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ asset('/stylist') }}">STYLISTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ asset('/about') }}">A PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ asset('/contact') }}">CONTACT</a>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="d-flex align-item-center">
                    @auth
                        <x-responsive-nav-link :href="'/dashboard'">
                            <button class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                {{ Auth::user()->name }}
                            </button>
                        </x-responsive-nav-link>
                        <form method="POST" action="{{ ('logout') }}">
                            @csrf
                            <button class="se_deconnecter pt-2">{{ ('Deconnexion') }}</button>
                        </form>
                    @else
                        <a href={{ 'register' }} class="btn btn-outline-light">Inscription</a>
                        <a href="{{ 'login' }}" class="btn btn-outline-light ms-2">Connexion</a>
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
