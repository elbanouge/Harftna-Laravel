@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <main role="main">

            <div class="container">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        @if (count($sliders) > 0)
                            @foreach ($sliders as $key => $slider)

                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} ">
                                    <img src="{{ Storage::url($slider->image) }}">
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="container">
                <h2>Category</h2>
                @foreach (App\Models\Category::all() as $cat)
                    <a href="{{ route('product.list', [$cat->slug]) }}"> <button
                            class="btn btn-secondary">{{ $cat->name }}</button></a>
                @endforeach

                <div class="album py-5 bg-light">
                    <div class="container">
                        <h2>Products</h2>

                        <div class="row">

                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="{{ Storage::url($product->image) }}" height="200" style="width: 100%">
                                        <div class="card-body">
                                            <p><b>{{ $product->name }}</b></p>
                                            <p class="card-text">
                                                {{ Str::limit($product->description, 120) }}
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('product.view', [$product->id]) }}"> <button
                                                            type="button"
                                                            class="btn btn-sm btn-outline-success">View</button>
                                                    </a>
                                                    <a href="{{ route('add.cart', [$product->id]) }}"> <button type="button"
                                                            class="btn btn-sm btn-outline-primary">Add to cart</button></a>
                                                </div>
                                                <small class="text-muted">${{ $product->price }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <center>
                        <a href="{{ route('more.product') }}"><button class="btn btn-success">More Product</button>
                        </a>
                    </center>



                </div>

                <div class="jumbotron">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach ($randomActiveProducts as $product)
                                        <div class="col-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="{{ Storage::url($product->image) }}" height="200"
                                                    style="width: 100%">
                                                <div class="card-body">
                                                    <p><b>{{ $product->name }}</b></p>
                                                    <p class="card-text">
                                                        {{ Str::limit($product->description, 120) }}
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-success">View</button>
                                                            <a href="">
                                                                <a href="{{ route('add.cart', [$product->id]) }}"> <button
                                                                        type="button"
                                                                        class="btn btn-sm btn-outline-primary">Add to
                                                                        cart</button></a>
                                                            </a>
                                                        </div>
                                                        <small class="text-muted">${{ $product->price }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    @foreach ($randomItemProducts as $product)

                                        <div class="col-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="{{ Storage::url($product->image) }}" height="200"
                                                    style="width: 100%">
                                                <div class="card-body">
                                                    <p><b>{{ $product->name }}</b></p>
                                                    <p class="card-text">
                                                        {{ Str::limit($product->description, 120) }}
                                                    </p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">
                                                            <a href="{{ route('product.view', [$product->id]) }}"> <button
                                                                    type="button"
                                                                    class="btn btn-sm btn-outline-success">View</button></a>
                                                            <a href="{{ route('add.cart', [$product->id]) }}"> <button
                                                                    type="button" class="btn btn-sm btn-outline-primary">Add
                                                                    to cart</button></a>
                                                        </div>
                                                        <small class="text-muted">${{ $product->price }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>




        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a
                        href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>
    </div> --}}


    <body class="js">

        @if (count($sliders) > 0)
            @foreach ($sliders as $key => $slider)
            @endforeach
            <!-- Slider Area -->
            <section class="hero-slider">
                <!-- Single Slider -->
                <div class="single-slider" style="background-image: url({{ Storage::url($slider->image) }}) !important;">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-9 offset-lg-3 col-12">
                                <div class="text-inner">
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="hero-text">
                                                <h1>{{ $slider->name }}</h1>
                                                <div class="button">
                                                    <a href="{{ route('product.view', [$slider->url]) }}"
                                                        class="btn">Achetez Maintenant</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
            </section>
            <!--/ End Slider Area -->
        @endif

        <!-- Start Small Banner  -->
        <section class="small-banner section">
            <div class="container-fluid">
                <div class="row">
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-banner">
                            <img src="{{ Storage::url('product/CN1.jpg') }}" alt="#">
                            <div class="content">
                                <h1 style="color: #f7941d !important;">Argent</h1>
                                <a href="{{ route('product.list', 'agent') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-banner">
                            <img src="{{ Storage::url('product/CZ1.jpg') }}" alt="#">
                            <div class="content">
                                <h1 style="color: #f7941d !important;">Zellige</h1>
                                <a href="{{ route('product.list', 'agent') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-12">
                        <div class="single-banner tab-height">
                            <img src="{{ Storage::url('product/CH1.jpg') }}" alt="#">
                            <div class="content">
                                <h1 style="color: #f7941d !important;">Terre</h1>
                                <a href="{{ route('product.list', 'agent') }}">Discover Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- /End Single Banner  -->
                </div>
            </div>
        </section>
        <!-- End Small Banner -->

        <!-- Start Product Area -->
        <div class="product-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Article tendance</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-info">
                            <div class="nav-main">
                                <!-- Tab Nav -->
                                <ul class="nav nav-tabs">
                                    @foreach (App\Models\Category::all() as $cat)
                                        <li class="nav-item" style="cursor: pointer;"><a class="nav-link active"
                                                href="{{ route('product.list', [$cat->slug]) }}">{{ $cat->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <!--/ End Tab Nav -->
                            </div>


                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="{{ Storage::url($product->image) }}" height="200" style="width: 100%">
                                        <div class="card-body">
                                            <p><b>{{ $product->name }}</b></p>
                                            <p class="card-text">
                                                {{ Str::limit($product->description, 120) }}
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('product.view', [$product->id]) }}"> <button
                                                            type="button"
                                                            class="btn btn-sm btn-outline-success">View</button>
                                                    </a>
                                                    <a href="{{ route('add.cart', [$product->id]) }}"> <button
                                                            type="button" class="btn btn-sm btn-outline-primary">Add to
                                                            cart</button></a>
                                                </div>
                                                <small class="text-muted">${{ $product->price }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="tab-content" id="myTabContent">
                                <!-- Start Single Tab -->
                                <div class="tab-pane fade show active">
                                    <div class="tab-single">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="{{ route('product.view', [$product->id]) }}">
                                                                <img class="default-img"
                                                                    src="{{ Storage::url($product->image) }}"
                                                                    style="width: 100%; height: 330px; cursor: pointer;"
                                                                    alt="#">
                                                            </a>
                                                            <div class="button-head">
                                                                <div class="product-action">
                                                                    <a title="Boutique rapide"
                                                                        href="{{ route('product.view', [$product->id]) }}"><i
                                                                            class=" ti-eye"></i><span>Boutique
                                                                            rapide</span></a>
                                                                    <a><i></i><span></span></a>
                                                                </div>
                                                                <div class="product-action-2">
                                                                    <a title="Ajouter au panier"
                                                                        href="{{ route('add.cart', [$product->id]) }}">Ajouter
                                                                        au panier</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h3><a
                                                                    href="{{ route('product.view', [$product->id]) }}">{{ $product->name }}</a>
                                                            </h3>
                                                            <div class="product-price">
                                                                <span>{{ $product->price }} Dhs</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <center>
                                                <a href="{{ route('more.product') }}"><button class="btn btn-success">More Product</button></a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Area -->

        <!-- Start Most Popular -->
        <div class="product-area most-popular section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Hot Item</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <span class="out-of-stock">Hot</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                    <div class="product-price">
                                        <span class="old">$60.00</span>
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <span class="new">New</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                                    Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Popular Area -->

        <!-- Start Shop Services Area -->
        <section class="shop-services section home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Free shiping</h4>
                            <p>Orders over $100</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Free Return</h4>
                            <p>Within 30 days returns</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Sucure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Best Peice</h4>
                            <p>Guaranteed price</p>
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
                                <h4>Newsletter</h4>
                                <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                    <button class="btn">Subscribe</button>
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
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 offset-lg-3 col-12">
                                <h4
                                    style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">
                                    Eshop Free Lite</h4>
                                <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.
                                    <h3>
                                        <p
                                            style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">
                                            Please, purchase full version of the template to get all pages, features and
                                            commercial license</p>
                                        <div class="button" style="margin-top:30px;">
                                            <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/"
                                                target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                                        </div>
                            </div>
                        </div>
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
                                <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
                                    eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
                                    facilisis luctus, metus.</p>
                                <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
                                            789</a></span></p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer links">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer links">
                                <h4>Customer Service</h4>
                                <ul>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer social">
                                <h4>Get In Tuch</h4>
                                <!-- Single Widget -->
                                <div class="contact">
                                    <ul>
                                        <li>NO. 342 - London Oxford Street.</li>
                                        <li>012 United Kingdom.</li>
                                        <li>info@eshop.com</li>
                                        <li>+032 3456 7890</li>
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
                                    <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com"
                                            target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="right">
                                    <img src="images/payments.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /End Footer Area -->
    </body>

@endsection
