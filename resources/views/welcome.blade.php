<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Knowledge base</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Maxsoft">
    <meta name="robots" content="index,follow" />
    <link href="images/favicon.png" rel="icon" />
    <link rel="stylesheet" type="text/css" href="assets/magnific-popup/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125" class="antialiased">

    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header -->
    <header id="header" class="sticky-top">
        <!-- Navbar -->
        <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
            <div class="container-fluid">
                <!-- Sidebar Toggler -->
                <button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>

                <!-- Logo -->
                <a class="logo ml-md-3" href="/" title="Logo"> <img src="images/logo.png" alt="logo" /> </a>
                <span class="text-2 ml-2">v1.2</span>
                <!-- Logo End -->

                <!-- Navbar Toggler -->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>


                <div id="header-nav" class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        @if (Route::has('login'))
                        @auth
                        <li><a href="{{ url('/documentation') }}" class="">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}" class="">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="">Register</a></li>
                        @endif
                        @endauth
                        @endif
                        <li><a target="_blank" href="https://www.maxsoft.pl">Support</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Content -->
    <div id="content" role="main">

        <div class="idocs-content">
            <div class="container">

                <section id="idocs_start">
                    <h1>Knowledge base</h1>
                    <h2>Welcome to the document management application.</h2>
                    <p class="lead">Basic information:</p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><strong>Version:</strong> 1.1</li>
                                <li><strong>Author:</strong> <a href="https://www.maxsoft.pl" target="_blank">Maxsoft</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><strong class="font-weight-700">Created:</strong> 19 August, 2023</li>
                                <li><strong>Update:</strong> 27 November, 2023</li>
                            </ul>
                        </div>
                    </div>
                    <p class="alert alert-info">If you have any questions that are beyond the scope of this help file, Please feel free to email via <a target="_blank" href="https://www.maxsoft.pl">Item Support Page</a>.</p>
                </section>

                <hr class="divider">

                <section id="idocs_installation">
                    <h2>Login and Registration</h2>
                    <p class="lead">To create your own documentation, you must register and log in.</p>
                    <ol>
                        <li>If you already have an account, click to go to the login page <a href="{{ route('login') }}" class="">Log in</a></li>
                        <li>If you don't have an account yet, please register <a href="{{ route('register') }}" class="">Register</a></li>
                    </ol>
                </section>

                <hr class="divider">

            </div>
        </div>

    </div>

    @include('components.footer')

    </div>
</body>

</html>