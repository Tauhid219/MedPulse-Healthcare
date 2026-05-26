@extends('layouts.admin-auth')

@section('title', 'MedPulse | Log in')
@section('body-class', 'login-page')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>MedPulse</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

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

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      @if (Route::has('password.request'))
          <p class="mb-1 mt-3">
            <a href="{{ route('password.request') }}">I forgot my password</a>
          </p>
      @endif
      
      @if (Route::has('register'))
          <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
          </p>
      @endif
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection
