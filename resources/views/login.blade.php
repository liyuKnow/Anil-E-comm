@extends('master')
@section('loginSection')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email Adress</label>
                    <input name="email" type="email" id="" class="form-control"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection