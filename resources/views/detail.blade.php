@extends('master')
@section('content')  
<div class="container m-5">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-info" href="/">Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>price ${{$product['price']}}</h3>
            <p>{{$product['description']}}</p>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="text" name="product_id" value="{{$product['id']}}" hidden>
                <button type="submit" class="btn btn-success">Add To Cart</button>
            </form>
            {{-- <a href="" class="btn btn-warning"></a> --}}
        </div>
    </div>
</div>
@endsection

