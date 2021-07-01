<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Tag  -->
    <title>Harftna - Plateforme E-commerce – Artisanat Marocaine.</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('style/images/favicon.png') }}">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('style/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('style/css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('style/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('style/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('style/css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('style/css/slicknav.min.css') }}">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('style/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/responsive.css') }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @notifyCss
    <style>
        .inset-0 {
            top: auto !important;
        }
    </style>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if (Auth::check())
                            <li class="nav-item"> <a class="nav-link" href="{{ route('order') }}">Order</a></li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret"> Menu </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @foreach (App\Models\Category::all() as $category)
                                    <a class="dropdown-item"
                                        href="{{ route('product.list', [$category->slug]) }}">{{ $category->name }}
                                    </a>
                                @endforeach

                            </div>
                        </li>

                        <!-- Authentication Links -->
                        <a href="{{ route('cart.show') }}" class="nav-link">
                            <span class="fas fa-shopping-cart">
                                ({{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }})
                            </span>
                        </a>

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><a href="tel:+212-532-456-523"><i class="ti-headphone-alt"></i> +212 (532)
                                        456-523</a></li>

                                <li><a href="mailto:support@harftna.com"><i class="ti-email"></i>
                                        support@harftna.com</a></li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> Maroc Souss-Massa Tiznit 85000 </li>

                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <i class="ti-power-off"></i><a href="{{ route('login') }}">Se connecter</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <i class="ti-user"></i> <a href="{{ route('register') }}">Créer un compte</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="ti-user"></i>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Déconnecter') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('/style/images/logo.png') }}"
                                    alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">Catégories</option>
                                    @foreach (App\Models\SubCategory::all() as $subcat)
                                        <option>{{ $subcat->name }}</option>
                                    @endforeach
                                </select>
                                <form action="{{ route('more.product') }}">
                                    <input name="search" placeholder="Rechercher les produits...." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">

                                @if (Auth::check())
                                    <a href="{{ route('order') }}" class="single-icon"><i class="fa fa-user-circle-o"
                                            aria-hidden="true"></i></i></a>
                                @endif
                            </div>
                            <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="{{ route('cart.show') }}" class="single-icon"><i class="ti-bag"></i> <span
                                        class="total-count">{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category" id="category-home">
                                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                                <ul class="main-category" id="category-subhome" style="display: none;">
                                    <!--foreach categories-->
                                    @foreach (App\Models\Category::all() as $cat)
                                        <li><a
                                                href="{{ route('product.list', [$cat->slug]) }}">{{ $cat->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
                                                <li><a href="{{ route('more.product') }}">Produits</a></li>
                                                <li><a href="{{ url('/contact') }}">Contactez-nous</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->
<br>
<br>
<br>
<br>
    @yield('content')
<br>
<br>
<br>
<br>
    <!-- Start Shop Services Area -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Livraison Gratuite</h4>
                        <p>Commander plus que 1000 Dhs</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Retour gratuit</h4>
                        <p>Dans 30 Jours</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Paiement sécurisé</h4>
                        <p>100% Paiement sécurisé</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Meilleur prix</h4>
                        <p>Produit garanti</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>newsletter</h4>
                            <p>Abonnez-vous à notre newsletter et obtenez<span> 10% </span>sur votre premier achat</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Votre adresse E-Mail" required="" type="email">
                                <button class="btn">s'abonner</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('/style/images/logo2.png') }}" alt="#"></a>
                            </div>
                            <p class="text">De nos jours, de nombreux artisans et associations d'industries
                                traditionnelles souffrent des problèmes de commercialisation de leurs produits, ce qui
                                est la raison de leur faillite, et de nombreux clients sont exposés à des fraudes et des
                                fraudes en raison de leur ignorance de la source et du prix réel du produit. Par
                                conséquent, ce site a été créé pour faciliter la relation vente-achat entre le client et
                                le vendeur avec une assurance qualité L'authenticité de la source et la présentation du
                                produit au plus grand nombre.</p>
                            <p class="call">Vous avez une question? Appelez-nous 24/7<span><a href="tel:123456789">+0123
                                        456
                                        789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">a propos de nous</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Termes et conditions</a></li>
                                <li><a href="#">Contactez-nous</a></li>
                                <li><a href="#">Aide</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>service client</h4>
                            <ul>
                                <li><a href="#">Modes de paiement</a></li>
                                <li><a href="#">Remboursement</a></li>
                                <li><a href="#">Retourne</a></li>
                                <li><a href="#">livraison</a></li>
                                <li><a href="#">politique de confidentialité</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Contactez-nous</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>ISTA MIRLEFT</li>
                                    <li>Maroc</li>
                                    <li>PFF@PFF.PFF</li>
                                    <li>+012 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2021 <a href="#" target="_blank">Harftna</a> - Tous les droits sont
                                    réservés.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->

    @include('notify::messages')
    @notifyJs

    <!-- Jquery -->
    <script src="{{ asset('style/js/jquery.min.js') }}"></script>
    <script src="{{ asset('style/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('style/js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('style/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('style/js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('style/js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('style/js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('style/js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('style/js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('style/js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('style/js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('style/js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('style/js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('style/js/easing.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('style/js/active.js') }}"></script>
</body>

</html>
