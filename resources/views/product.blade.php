@extends('master')
@section('content')

<h1>Hello I am products</h1>
<div class="container custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          @foreach($products as $product)

            <div class="carousel-item {{$product['id']==1?"active":""}}">
                <a href="detail/{{$product['id']}}">
                  <img class="d-block w-25" src="{{$product['gallery']}}" alt="First slide">
                  <div class="carousel-caption slider-text">
                      <h3>{{$product['name']}}</h3>
                      <p>{{$product['description']}}</p>
                  </div>
                </a>
            </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
</div>
@endsection