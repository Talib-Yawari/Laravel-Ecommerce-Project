@extends('master')

@section("content")
<div class="custom-product p-4 border rounded">
    <div class="col-sm-10">
        <h3 class="mb-4">Order Summary</h3>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-4 p-3 border rounded bg-light">
            <h4 class="mb-3">Provide Your Address</h4>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter your address" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <h4>Select Payment Method</h4>
                    <div class="form-check">
                        <input type="radio" value="online" name="payment" class="form-check-input" id="onlinePayment">
                        <label for="onlinePayment" class="form-check-label">Online Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="emi" name="payment" class="form-check-input" id="emiPayment">
                        <label for="emiPayment" class="form-check-label">EMI Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" value="cod" name="payment" class="form-check-input" id="codPayment">
                        <label for="codPayment" class="form-check-label">Cash on Delivery</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Place Order</button>
            </form>
        </div>
    </div>
</div>
@endsection
