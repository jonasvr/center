<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://use.fontawesome.com/9aee54992d.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav navbar-text">
                    <li class="font-size-16"> Tel:03 489 02 06</li>
                </ul>



                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right text-capitalize">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kantoren <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="padding-14 hover-li gray" id="4-persons">4 persoons</li>
                            <li class="padding-14 hover-li gray" id="6-persons">6 persoons</li>
                            <li class="padding-14 hover-li gray" id="8-persons">8 persoons</li>
                        </ul>
                    </li>
                    <li><a href="#service">service</a></li>
                    <li><a href="#grondplan">grondplan</a></li>
                    <li><a href="{{ url('/contact') }}">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/test.js"></script>
</body>
</html>
