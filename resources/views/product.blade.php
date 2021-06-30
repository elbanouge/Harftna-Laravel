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
                                <a href="{{ route('product.list', 'agent') }}">Découvrir maintenant</a>
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
                                <a href="{{ route('product.list', 'agent') }}">Achetez maintenant</a>
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
                                <a href="{{ route('product.list', 'agent') }}">Découvrir maintenant</a>
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
                            <h2>Produits</h2>
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
                                        <li class="nav-item"><a class="nav-link active"
                                                href="{{ route('product.list', [$cat->slug]) }}">{{ $cat->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <!--/ End Tab Nav -->
                            </div>

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
                                                                    style="width: 100%; height: 330px;" alt="#">
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
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <center>
                <a href="{{ route('more.product') }}"><button class="btn" style="border-radius: 5%;">Plus de
                        produit</button></a>
            </center>
        </div>
        <!-- End Product Area -->

        <!-- Start Most Popular -->
        <div class="product-area most-popular section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Produits Tendance</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            @foreach ($randomActiveProducts as $product)
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{ route('product.view', [$product->id]) }}">
                                            <img class="default-img" src="{{ Storage::url($product->image) }}"
                                                style="width: 100%; height: 330px;" alt="#">
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
                                                <a title="Plus de produit"
                                                    href="{{ route('add.cart', [$product->id]) }}">Ajouter au panier</a>
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
                            @endforeach
                            @foreach ($randomItemProducts as $product)
                                <!-- Start Single Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{ route('product.view', [$product->id]) }}">
                                            <img class="default-img" src="{{ Storage::url($product->image) }}"
                                                style="width: 100%; height: 330px;" alt="#">
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
                                                <a title="Plus de produit"
                                                    href="{{ route('add.cart', [$product->id]) }}">Ajouter au panier</a>
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
                            @endforeach
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Popular Area -->
    </body>

@endsection
