@extends('master')
@section('content')  
<div class="container m-5">
    
    <div class="col-lg-4">
        <a class="btn btn-secondary" href="">Filter Results</a>
    </div>
    <h1>searche Results</h1>
    @foreach ($results as $result)
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="{{$result['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a class="btn btn-info" href="/">Back</a>
            <h2>{{$result['name']}}</h2>
            <h3>price ${{$result['price']}}</h3>
            <p>{{$result['description']}}</p>
            <br><br>
            <a href="" class="btn btn-success">Buy Now</a>
            <a href="" class="btn btn-warning">Add To Cart</a>
        </div>
    </div>
    @endforeach 
</div>
@endsection

