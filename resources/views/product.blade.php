@extends('master')

@section('content')
<div class="container-fluid d-flex flex-column min-vh-100">
    <div class="custom-product">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($products as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner text-center">
                @foreach ($products as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <a href="detail/{{$item['id']}}">
                            <img class="d-block mx-auto slider-img" src="{{ $item['gallery'] }}" alt="Image {{ $key + 1 }}">
                            <div class="carousel-caption d-none d-md-block text-dark bg-dark" style="opacity: 0.8;">
                                <h5 class="text-white">{{ $item['name'] }}</h5>
                                <p class="text-white">{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #343a40;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #343a40;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="main mt-4">
            <h3 class="text-center mb-4">Trending Products</h3>
            <div class="row justify-content-around">
                @foreach ($products as $item)
                    <div class="col-md-3 col-sm-4 col-6 mb-4">
                        <div class="card trending-item">
                            <a href="detail/{{$item['id']}}">
                                <img class="card-img-top" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}" style="height: 150px; object-fit: cover;">
                                <div class="card-body" style="height: 100px;">
                                    <h5 class="card-title">{{ $item['name'] }}</h5>
                                    <!-- <p class="card-text d-none d-sm-block">{{ $item['description'] }}</p>
                                    <p class="card-text">Price: ${{ $item['price'] }}</p> -->
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
