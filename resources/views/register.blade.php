@extends('layout')

@section('content')

<h1 class="text-center">Registration Page</h1>

<form action="/users" method="POST" class="row g-3">
  <div class="col-md-4">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="name" class="form-control" id="name" value={{old('name')}}>
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" id="email" value={{old('email')}}>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="password" value={{old('password')}}>
  </div>
  <div class="col-md-6">
    <label for="confirmPassword" class="form-label">Confirm Password:</label>
    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" value={{old('password_confirmation')}}>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
  </div>
  <a href="/login">Already Registered</a>
</form><br><br>
@endsection