@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid detail-img" src="{{ $product['gallery'] }}" alt="{{ $product['name'] }}">
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <a href="/" class="btn btn-outline-secondary mb-3"><i class="fas fa-arrow-left me-2"></i> Go Back</a>
                    <h2 class="card-title">{{ $product['name'] }}</h2>
                    <h3 class="card-text">Price: ${{ $product['price'] }}</h3>
                    <p class="card-text">{{ $product['description'] }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Category:</strong> {{ $product['category'] }}</li>
                        <li class="list-group-item"><strong>Brand:</strong> {{ $product['brand'] }}</li>
                        <li class="list-group-item"><strong>Color:</strong> {{ $product['color'] }}</li>
                        <li class="list-group-item"><strong>Material:</strong> {{ $product['material'] }}</li>
                        <!-- Add more details as needed -->
                    </ul>

                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <button type="submit" class="btn btn-primary mt-3">Add to Cart</button>
                    </form>

                    <a href="/ordernow" class="btn btn-success mt-2">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

