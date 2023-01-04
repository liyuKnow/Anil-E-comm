@extends('master')
@section('content')

<div class="container custom-login">
    <h2>Register</h2>
    <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center">
            <form action="/register_form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" id="" class="form-control"  placeholder="Enter Your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Adress</label>
                    <input name="email" type="email" id="" class="form-control"  placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="" class="form-control" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input name="confirmed_password" type="password" id="" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection