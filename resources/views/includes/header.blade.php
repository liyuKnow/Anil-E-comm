<?php 
  use App\Http\Controllers\ProductController;
  $total = ProductController::CartItem();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">Orders</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart
            <span class="badge badge-pill badge-danger">{{$total}}</span>
            </a>
        </li>
        
        @if(session()->has('user'))
          <li class="nav-item">
            <a class="nav-link active" href="">
              Hello {{session()->get('user')['name']}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" href="/logout">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success" href="/register">Register</a>
          </li>
        @endif
        
      </ul>
      
      <form class="form-inline my-2 my-lg-0" action="/search" method="GET">    
        <input name="searchKey" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>