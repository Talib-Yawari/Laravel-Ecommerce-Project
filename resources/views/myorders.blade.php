@extends('master')

@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4 class="mb-4">My Orders</h4>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-divider border p-3 mb-3">
                <div class="col-md-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image img-fluid" src="{{$item->gallery}}" alt="{{$item->name}}">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                            <h2 class="mb-3">Name: {{$item->name}}</h2>
                            <h5>Delivery Status: {{$item->status}}</h5>
                            <h5>Address: {{$item->address}}</h5>
                            <h5>Payment Status: {{$item->payment_status}}</h5>
                            <h5>Payment Method: {{$item->payment_method}}</h5>
                        </div>
                        <!-- You can add additional content or actions here -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
