@extends('layouts.admin-auth')

@section('title', 'MedPulse | Forgot Password')
@section('body-class', 'login-page')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>MedPulse</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <!-- Session Status -->
      @if (session('status'))
          <div class="alert alert-success mb-3 text-sm">
              {{ session('status') }}
          </div>
      @endif

      <!-- Validation Errors -->
      @if ($errors->any())
          <div class="alert alert-danger mb-3 text-sm">
              <ul class="mb-0 pl-3">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{ route('password.email') }}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('login') }}">Login</a>
      </p>
      @if (Route::has('register'))
          <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
          </p>
      @endif
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection
