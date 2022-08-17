@extends('layout')

@section('content')
<form action="/users" method="POST">
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">

          <div class="mb-md-5 mt-md-4 pb-5">

            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
            <p class="text-white-50 mb-5">Please enter your name, email, and password!</p>
            
            <div class="form-outline form-white mb-4">
              <label for="name" class="form-label">Name:</label>
              <input type="text" name="name" class="form-control form-control-lg" id="name" value={{old('name')}}>
            </div>
            <div class="form-outline form-white mb-4">
              <label for="email" class="form-label">Email:</label>
              <input type="email" name="email" class="form-control form-control-lg" id="email" value={{old('email')}}>
            </div>
            <div class="form-outline form-white mb-4">
              <label for="password" class="form-label">Password:</label>
              <input type="password" name="password" class="form-control form-control-lg" id="password" value={{old('password')}}>
            </div>
            <div class="form-outline form-white mb-4">
              <label for="confirmPassword" class="form-label">Confirm Password:</label>
              <input type="password" name="password_confirmation" class="form-control form-control-lg" id="confirmPassword" value={{old('password_confirmation')}}>
            </div>
            <div class="btn btn-outline-light btn-lg px-5">
              <button type="submit" class="btn btn-primary">Register</button>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
          <div>
            <p class="mb-0">Already Registered <a href="/login" class="text-white-50 fw-bold">Login</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</form>
@endsection