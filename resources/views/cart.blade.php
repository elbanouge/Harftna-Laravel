@extends('layouts.app')

@section('content')

    <div class="container">
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">fffffffffff</div>
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
        <td>Aucun produit dans le panier</td>
        @endif

    </div>
@endsection
