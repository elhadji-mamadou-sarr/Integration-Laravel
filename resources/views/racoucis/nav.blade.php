<nav class="main-menu">
    <ul>
        <li class="current-list-item"><a href="#">Accueil</a>
            <ul class="sub-menu">
                <li><a href="index.html">Static Home</a></li>
                <li><a href="index_2.html">Slider Home</a></li>
            </ul>
        </li>
        <li><a href="about.html">A propos</a></li>
        <li><a href="#">Pages</a>
        </li>
        <li><a href="news.html">News</a>
            <ul class="sub-menu">
                <li><a href="news.html">News</a></li>
                <li><a href="single-news.html">Single News</a></li>
            </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>

        </li>
        <li>
            <div class="header-icons">
                @if (Auth::user())
                    <a class="shopping-cart">{{ Auth::user()->prenom }}</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class="search-bar-icon"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Se deconnecter') }}
                        </x-dropdown-link>
                    </form>
                @else
                    <a class="shopping-cart" href="{{ route('login') }}">Se connecter</a>
                    <a class=" search-bar-icon" href="{{ route('register') }}">S'inscrire</a>
                @endif

            </div>
        </li>
    </ul>
</nav>
