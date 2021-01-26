<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="2eKKWTKna_lC7HpLTviOMuq9XUgdrjsaFv0TBehL-KM" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DevPlus') }} - @yield('title')</title>

    <!-- Scripts -->


    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('assets')
</head>
<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a class="logo" href="{{ url('/') }}"><img src="{{ asset('img/logo.png')}}" alt="" class="img-fluid"></a>
            @guest
                
            @else
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="nav-item @if(Route::current()->getName() === 'home') active @endif">
                        <a class="nav-link"  href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item @if(Route::current()->getName() === 'links.create') active @endif">
                        <a class="nav-link" href="{{ route('links.create')}}">Ajouter un lien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
        
                </ul>
            </nav>
            @endguest
        
            @guest
                @if (Route::has('login') && Route::current()->getName() != 'login')
                    <a href="{{ route('login') }}" class="get-started-btn scrollto">{{ __('Login') }}</a>
                @endif
                
                @if (Route::has('register') && Route::current()->getName() != 'register')
                    <a href="{{ route('register') }}" class="get-started-btn scrollto">{{ __('Register') }}</a>
                @endif
            @else
                <a class="get-started-btn scrollto" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        
        </div>
    </header><!-- End Header -->

    @yield('content')
    
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
  
</body>
</html>
