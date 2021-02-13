@extends('master')
@section('content')
<div class="container">
    <button class="btn btn-secondary m-5">Filter</button>
    <table class="table mb-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
        @foreach ($cartItems as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a class="btn btn-success" href="">Buy Now</a>
                    <a class="btn btn-warning" href="/remove_from_cart/{{$item->cart_id}}">Remove from Cart</a>
                </td>
            </tr>            
        @endforeach
    </table>
</div>
@endsection
