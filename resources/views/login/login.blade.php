@extends('partials.default.layouts')

@section('content')
<div style="margin-left: auto;margin-right: auto;width: 50%;">
    <h1>Login</h1>
    <form>
        <label>Username</label>
        <input type="text" class="form-control">
        <label>Password</label>
        <input type="text" class="form-control">
    </form>
    <h2>JakesPP: {{ $jakesPP }}</h2>
</div>
@endsection