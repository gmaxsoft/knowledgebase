<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Knowledge base</title>
    <meta name="author" content="Maxsoft">
    <meta name="robots" content="noindex,nofollow" />
    <link href="images/favicon.png" rel="icon" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/magnific-popup/magnific-popup.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/highlight.js/styles/github.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('/assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>
    <script src="{{ asset('/assets/jquery/jquery.min.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">

        <!-- Header -->
        <header id="header" class="sticky-top">
            @include('layouts.navigation')
        </header>
        <!-- Header End -->

        <!-- Page Content   -->
        <div id="content" role="main">
            <div class="container">
                @include('components.messages')
                @yield('content')
            </div>
        </div>

        @if(Request::is('documentation'))
        @include('components.footer-app')
        @else
        @include('components.footer')
        @endif

        @include('components.scripts')

    </div>
</body>

</html>