@extends('layout')

@section('content')

<h1 class="text-center">Login Page</h1>

<form action="/authenticate" method="POST" class="row g-3">
  <div class="col-md-4">
    <label for="email" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" id="email" value={{old('email')}}>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="password" value={{old('password')}}>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </div>
  Don't have an account?
  <a href="/register">Register</a>
</form><br><br>
@endsection