@extends('master')
@section('content')
    <div class="container">
        <h1 class="m-2">My Orders</h1>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Product Id</th>
                <th>User id</th>
                <th>Status</th>
                <th>Payment method</th>
                <th>Payment Status</th>
                <th>Adress</th>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <th>{{$order->id}}</th>                  
                    <th>{{$order->product_id}}</th>                  
                    <th>{{$order->user_id}}</th>                  
                    <th>{{$order->status}}</th>                  
                    <th>{{$order->payment_method}}</th>                  
                    <th>{{$order->payment_status}}</th>                  
                    <th>{{$order->adress}}</th>                  
                </tr>
            @endforeach 
        </table>
           
    </div>    
@endsection