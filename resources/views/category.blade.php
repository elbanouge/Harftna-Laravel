@extends('layouts.app')

@section('content')

    <div class="container">
<<<<<<< HEAD
        <h2>Produit</h2>

        <div class="row">
            <div class="col-md-2">
                <form action="{{ route('product.list', [$slug]) }}" method="GET">
                    <!--foreach subcategories-->
                    @foreach ($subcategories as $subcategory)
                        <p><input type="checkbox" name="subcategory[]" value="{{ $subcategory->id }}" @if (isset($filterSubCategories)) {{ in_array($subcategory->id, $filterSubCategories) ? 'checked ="checked" ' : '' }} @endif>{{ $subcategory->name }}</p>
                        <!--end foreach-->
                    @endforeach
                    <input type="submit" value="Filter" class="btn btn-secondary">
                </form>
                <hr>
                <h3>Filtrer par prix</h3>
=======
                <h2>Produits</h2>

                <div class="row">
                    <div class="col-md-2">
                        <form action="{{ route('product.list', [$slug]) }}" method="GET">
                            <!--foreach subcategories-->
                            @foreach ($subcategories as $subcategory)
                                <p><input type="checkbox" name="subcategory[]" value="{{ $subcategory->id }}" @if (isset($filterSubCategories)) {{ in_array($subcategory->id, $filterSubCategories) ? 'checked ="checked" ' : '' }} @endif>{{ $subcategory->name }}</p>
                                <!--end foreach-->
                            @endforeach
                            <input type="submit" value="Filter" class="btn btn-secondary">
                        </form>
                        <hr>
                        <h3>Filter avec prix</h3>
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a

                        <form action="{{ route('product.list', [$slug]) }}" method="GET">
                            <input type="text" name="min" class="form-control" placeholder="minimum price" required="">
                            <br>
                            <input type="text" name="max" class="form-control" placeholder="maximum price" required="">
                            <input type="hidden" name="categoryId" value="{{ $categoryId }}">

                            <br>
                            <br>
                            <input type="submit" value="Filter" class="btn btn-secondary">

<<<<<<< HEAD
                </form>
                <hr>
                <a href="{{ route('product.list', [$slug]) }}">Précédent</a>
=======
                        </form>
                        <hr>
                        <a href="{{ route('product.list', [$slug]) }}">Retour</a>
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a





<<<<<<< HEAD
            </div>
            <div class="col-md-10">
                <div class="row">
                    <!--foreach products-->
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ Storage::url($product->image) }}" height="200" style="width: 100%">
                                <div class="card-body">
                                    <p><b>{{ $product->name }} </b></p>
                                    <p class="card-text">
                                        {{ Str::limit($product->description, 120) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('product.view', [$product->id]) }}"> <button type="button"
                                                    class="btn btn-sm btn-outline-success">Voir</button>
                                            </a>
                                            <a href="{{ route('add.cart', [$product->id]) }}"> <button type="button"
                                                    class="btn btn-sm btn-outline-primary">Add to cart</button>
                                            </a>
=======
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <!--foreach products-->
                            @foreach ($products as $product)
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="{{ Storage::url($product->image) }}" style="width: 100%; height: 200px">
                                        <div class="card-body">
                                            <p><b>{{ $product->name }} </b></p>
                                            <p class="card-text">
                                                {{ Str::limit($product->description, 120) }}
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('product.view', [$product->id]) }}"> <button
                                                            type="button"
                                                            class="btn btn-sm btn-outline-success">Voir</button>
                                                    </a>
                                                    <a href="{{ route('add.cart', [$product->id]) }}"> <button
                                                            type="button" class="btn btn-sm btn-outline-primary">Ajouter</button>
                                                    </a>
                                                </div>
                                                <small class="text-muted">${{ $product->price }}</small>
                                            </div>
>>>>>>> dd713baa604fcaa1845864835194db4f8c09b78a
                                        </div>
                                    </div>
                                </div>
                                <!--endforeach-->
                            @endforeach
                        </div>
                    </div>
                </div>
    </div>
@endsection
