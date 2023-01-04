@extends('master')
@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <td>Total Price</td>
                <td>{{$price}}</td>
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
                <td>Total</td>
                <td>$ {{$price+10+0}}</td>
            </tr>
        </table>
        <form action="/placeorder" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Enter Your Adress"></textarea>
            </div>
            <div class="form-group">
                <label for="payment">Payment Method</label>
                <input type="radio" name="payment" id="" value="cash">
                <input type="radio" name="payment" id="" value="cash">
                <input type="radio" name="payment" id="" value="cash">
            </div>
            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
@endsection