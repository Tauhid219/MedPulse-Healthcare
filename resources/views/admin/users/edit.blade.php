@extends('layouts.admin')

@section('title', 'MedPulse | Edit Admin User')
@section('page-title', 'Modify Administrative Account')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Modify Credentials</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <h5><i class="icon fas fa-ban"></i> Validation Failed!</h5>
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter full name" value="{{ old('name', $user->name) }}" required>
            @error('name')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" value="{{ old('email', $user->email) }}" required>
            @error('email')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="bg-light p-3 border rounded mb-3">
            <h5 class="text-xs font-weight-bold text-muted mb-2"><i class="fas fa-lock mr-1"></i> CHANGE PASSWORD (OPTIONAL)</h5>
            <p class="text-xs text-muted mb-2">Leave password fields blank if you do not wish to change the password.</p>
            
            <div class="form-group">
              <label for="password">New Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Minimum 8 characters">
              @error('password')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group mb-0">
              <label for="password_confirmation">Confirm New Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password">
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info"><i class="fas fa-save mr-1"></i> Save Changes</button>
          <a href="{{ route('admin.users.index') }}" class="btn btn-default"><i class="fas fa-times mr-1"></i> Cancel</a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
