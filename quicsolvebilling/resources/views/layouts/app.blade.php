<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quicsolve') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/lib/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/billing.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="stylesheet" href="assets/css/pages/calendar.css">
    <link rel="stylesheet" href="assets/css/pages/chat.css">
    <link rel="stylesheet" href="assets/css/pages/contacts.css">
    <link rel="stylesheet" href="assets/css/pages/dashboard.css">
    <link rel="stylesheet" href="assets/css/pages/filemgr.css">
    <link rel="stylesheet" href="assets/css/pages/landing.css">
    <link rel="stylesheet" href="assets/css/pages/profile.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light wd-100p">
                    <a href="/admin" class="aside-logo bg-white rounded pd-5">
                        <img class="navbar-brand" src="assets/img/logo.png" height="45" alt="QuicSolv">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-right ml-auto">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a href="{{ route('login') }}" class="nav-link">
                                        <i-feather class="mg-x-5" name="log-in"></i-feather>
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <!-- Scripts -->
   <!-- <script src="{{ asset('js/app.js') }}" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/feather-icons/feather.min.js"></script>
    <script src="assets/js/billing.js"></script>
    <script src="assets/js/billing.aside.js"></script>
</body>
</html>
