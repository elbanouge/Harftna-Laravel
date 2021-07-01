@extends('layouts.app')

@section('content')

<<<<<<< HEAD
 <div class="container">
 	<form action="{{route('more.product')}}" method="GET">
 		<div class="form-row">
 			<div class="col-md-8">
 				<input type="text" name="search" class="form-control" placeholder="Rechercher...">
 			</div>
 			<div class="col">
 				<button type="submit" class="btn btn-secondary">recherche</button>
 			</div>
 		</div>

 	</form>
 	<br>
=======
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a

    <body>
        <!-- Start Product Area -->
        <div class="product-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Tous Les Produits</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-info">

<<<<<<< HEAD
 	     <div class="row">
      
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{Storage::url($product->image)}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class="card-text">
                  {{(Str::limit($product->description,120))}}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{route('product.view',[$product->id])}}"> <button type="button" class="btn btn-sm btn-outline-success">Voir</button>
                 </a>
                 <a href="{{route('add.cart',[$product->id])}}"> <button type="button" class="btn btn-sm btn-outline-primary">Ajouter au panier !</button></a>
=======
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
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a
                </div>
            </div>
        </div>
        <!-- End Product Area -->
    </body>
    {{-- <div class="container">

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
                                    <a href="{{ route('product.view', [$product->id]) }}"> <button type="button"
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
        {{ $products->links() }}

    </div> --}}
@endsection
