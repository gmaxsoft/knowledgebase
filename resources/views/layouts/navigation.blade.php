<nav x-data="{ open: false }" class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
    <div class="container-fluid">
        <button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>

        @guest
        <a class="logo ml-md-3" href="{{ url('/') }}" title="Logo"> <img src="{{ asset('/images/logo.png') }}" alt="logo" /> </a>
        @else
        <a class="logo ml-md-3" href="{{ route('documentation') }}" title="Logo"> <img src="{{ asset('/images/logo.png') }}" alt="logo" /> </a>
        @endguest
        <span class="text-2 ml-2">v1.2</span>

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>

        <div id="header-nav" class="collapse navbar-collapse justify-content-end navhead">
            @guest
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
            </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-nav-link :href="route('documentation')" :active="request()->routeIs('documentation')">
                        {{ __('Documentation') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('navs.index')" :active="request()->routeIs('navs')">
                        {{ __('Navigation') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('pages.index')" :active="request()->routeIs('pages')">
                        {{ __('Pages') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
            </a>
            @endguest
        </div>
    </div>
</nav>