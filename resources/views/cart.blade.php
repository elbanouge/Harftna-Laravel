@extends('layouts.app')

@section('content')

    {{-- <div class="container">
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">la qualité de produit doit être inférieur à 0</div>
            @endforeach

        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Qte</th>
                    <th scope="col">Retirer</th>

                </tr>
            </thead>
            <tbody>

                @if ($cart)
                    @php $i=1 @endphp

                    @foreach ($cart->items as $product)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>

                            <td><img src="{{ Storage::url($product['image']) }}" width="100"></td>
                            <td>{{ $product['name'] }}</td>
                            <td>${{ $product['price'] }}</td>
                            <td>
                                <form action="{{ route('cart.update', $product['id']) }}" method="post">@csrf
                                    <input type="text" name="qty" value="{{ $product['qty'] }}">
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fas fa-sync"></i>Mettre à jour
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('cart.remove', $product['id']) }}" method="post">@csrf

                                    <button class="btn btn-danger">Retirer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach



            </tbody>
        </table>
        <hr>
        <div class="card-footer">
            <a href="{{ url('/') }}"><button class="btn btn-primary">Continuer d'acheter</button></a>

            <form action="{{ route('cart.clean') }}" method="post">@csrf
                <button class="btn btn-secondary">Retirer tout du panier</button>
            </form>

            <span style="margin-left: 300px;">Prix total:${{ $cart->totalPrice }}</span>

            <a href="{{ route('cart.checkout', $cart->totalPrice) }}"><button
                    class="btn btn-info float-right">Caisse</button></a>
        </div>
    @else
<<<<<<< HEAD
        <td>Aucun produit dans le panier</td>
=======
        <td>Aucun article dans le panier</td>
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a
        @endif

    </div> --}}


    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ url('/') }}">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{ url('/cart') }}">Panier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shopping Cart -->
    <div class="shopping-cart section" style="padding: 233px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())

                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">la qualité de produit doit être inférieur à 0</div>
                        @endforeach

                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Supprimer</th>

                            </tr>
                        </thead>
                        <tbody>

                            @if ($cart)
                                @php $i=1 @endphp

                                @foreach ($cart->items as $product)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>

                                        <td><img src="{{ Storage::url($product['image']) }}" width="100"></td>
                                        <td>{{ $product['name'] }}</td>
                                        <td>{{ $product['price'] }} Dhs</td>
                                        <td>
                                            <form action="{{ route('cart.update', $product['id']) }}" method="post">@csrf
                                                <input type="text" name="qty" value="{{ $product['qty'] }}">
                                                <button class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-sync"></i>Modifier
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.remove', $product['id']) }}" method="post">@csrf

                                                <button class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="card-footer">
                        <a href="{{ url('/') }}"><button class="btn btn-primary">Continuer vos achats</button></a>

                        <form action="{{ route('cart.clean') }}" method="post">@csrf
                            <button class="btn btn-secondary" style="top: 18px;">Vider</button>
                        </form>

                        <span style="margin-left: 41%;font-size: 28px;font-weight: 700;color: #fd7e14;">Prix total : {{ $cart->totalPrice }} Dhs</span>

                        <a href="{{ route('cart.checkout', $cart->totalPrice) }}"><button
                                class="btn btn-info float-right" style="bottom: 31px;">Valider</button></a>
                    </div>
                @else
                    <td>Aucun article dans le panier</td>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--/ End Shopping Cart -->

@endsection
