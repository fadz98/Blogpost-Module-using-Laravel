<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- ======= Header ======= -->
            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center justify-content-between">

                    <h1><a href="/"><img src="{{ asset('img/aidantech.png') }}" width="70%"></a></h1>

                    @if (Route::has('login'))
                    @auth
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="/">
                                    <h5>Home</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="/">
                                    <h5>About</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="/">
                                    <h5>Services</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="/">
                                    <h5>Solutions</h5>
                                </a></li>
                            <li><a class="nav-link scrollto " href="/posts">
                                    <h5>Blog</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="/">
                                    <h5>Contact</h5>
                                </a></li>
                            <li class="dropdown"><a href="/home" class="nav-link dropdown-toggle" role="button"
                                    data-toggle="dropdown" v-pre>
                                    <h5>{{ Auth::user()->name }}</h5>
                                </a>
                                <ul>
                                    <li><a href="/home">
                                            <h5>Dashboard</h5>
                                        </a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                            <h5>{{ __('Logout') }}</h5>
                                        </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                    @else
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="/">
                                    <h5>Home</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="#about">
                                    <h5>About</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="#features">
                                    <h5>Services</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="#services">
                                    <h5>Solutions</h5>
                                </a></li>
                            <li><a class="nav-link scrollto " href="/posts">
                                    <h5>Blog</h5>
                                </a></li>
                            <li><a class="nav-link scrollto" href="#contact">
                                    <h5>Contact</h5>
                                </a></li>
                            <li><a class="getstarted scrollto" href="{{ route('login') }}">
                                    <h5>Create A Post</h5>
                                </a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                    @endauth
                    @endif
                </div>
            </header><!-- End Header -->
        </div>
    </div>
</nav>
