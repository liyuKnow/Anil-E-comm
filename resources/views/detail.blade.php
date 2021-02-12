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
            <a href="" class="btn btn-success">Buy Now</a>
            <a href="" class="btn btn-warning">Add To Cart</a>
        </div>
    </div>
</div>
@endsection

