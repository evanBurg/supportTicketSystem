@extends('partials.default.layouts')

@section('content')
    <div style="margin-left: auto;margin-right: auto;width: 50%;">
        <h1>Login</h1>
        <form action="/login/post" method="post">
            {{ csrf_field() }}
            <label>Username</label>
            <input type="text" class="form-control" name="username">
            <label>Password</label>
            <input type="text" class="form-control" name="password"><br>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    @if(isset($username) || isset($password))
        <div style="margin-left: auto;margin-right: auto;width: 50%;text-align: center">
        @if(isset($username))
            <h3>Username: {{ $username }}</h3>
        @endif
        @if(isset($password))
            <h3>Password: {{ $password }}</h3>
        @endif
        </div>
    @endif
@endsection