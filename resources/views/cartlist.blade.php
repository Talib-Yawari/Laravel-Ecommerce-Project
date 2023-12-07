@extends('master')

@section("content")
<div class="custom-product" style="min-height: 200px; margin-bottom: 50px;">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Results for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a>
            <br><br>

            @forelse($products as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="{{$item->name}}">
                        </a>
                    </div>
                    <div class="col-sm-5">
                        <div>
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form action="/removecart/{{$item->cart_id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
                        </form>
                    </div>
                </div>
            @empty
                <p>No products in the cart.</p>
            @endforelse

            <a class="btn btn-success" href="ordernow">Order Now</a>
            <br><br>
        </div>
    </div>
</div>

@endsection

