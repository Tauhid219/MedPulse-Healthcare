@extends('layouts.admin')

@section('title', 'MedPulse | Edit Profile')
@section('page-title', 'My Profile Settings')

@section('content')
<div class="row">
  <div class="col-md-6">
    
    <!-- Profile Information Card -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-edit mr-2"></i> Update Profile Information</h3>
      </div>
      <!-- /.card-header -->
      <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        
        <div class="card-body">
          @if (session('status') === 'profile-updated')
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Success!</h5>
              Profile information updated successfully.
            </div>
          @endif

          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required autocomplete="name">
            @error('name')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
              <div class="mt-3 p-2 bg-warning rounded">
                <p class="mb-1 text-sm text-dark">
                  <i class="fas fa-exclamation-triangle mr-1"></i> Your email address is unverified.
                </p>
                <button form="send-verification" class="btn btn-xs btn-outline-dark">
                  Click here to re-send the verification email.
                </button>
                @if (session('status') === 'verification-link-sent')
                  <p class="mt-2 mb-0 text-success text-sm font-weight-bold">
                    A new verification link has been sent to your email address.
                  </p>
                @endif
              </div>
            @endif
          </div>
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Save Changes</button>
        </div>
      </form>
      
      <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
      </form>
    </div>
    <!-- /.card -->

  </div>

  <div class="col-md-6">
    
    <!-- Change Password Card -->
    <div class="card card-warning">
      <div class="card-header text-white" style="background-color: #ffc107;">
        <h3 class="card-title text-dark"><i class="fas fa-key mr-2"></i> Change Password</h3>
      </div>
      <!-- /.card-header -->
      <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')
        
        <div class="card-body">
          @if (session('status') === 'password-updated')
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Success!</h5>
              Password changed successfully.
            </div>
          @endif

          <div class="form-group">
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password" id="current_password" class="form-control {{ $errors->updatePassword->has('current_password') ? 'is-invalid' : '' }}" autocomplete="current-password" required>
            @if ($errors->updatePassword->has('current_password'))
              <span class="error invalid-feedback">{{ $errors->updatePassword->first('current_password') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" name="password" id="password" class="form-control {{ $errors->updatePassword->has('password') ? 'is-invalid' : '' }}" autocomplete="new-password" required>
            @if ($errors->updatePassword->has('password'))
              <span class="error invalid-feedback">{{ $errors->updatePassword->first('password') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->updatePassword->has('password_confirmation') ? 'is-invalid' : '' }}" autocomplete="new-password" required>
            @if ($errors->updatePassword->has('password_confirmation'))
              <span class="error invalid-feedback">{{ $errors->updatePassword->first('password_confirmation') }}</span>
            @endif
          </div>
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <button type="submit" class="btn btn-warning text-dark font-weight-bold"><i class="fas fa-lock mr-1"></i> Update Password</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

    <!-- Delete Account Card -->
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-trash-alt mr-2"></i> Danger Zone</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="alert alert-danger mb-3">
          <h5><i class="icon fas fa-exclamation-triangle"></i> Delete Account!</h5>
          Once your account is deleted, all of its resources and data will be permanently deleted.
        </div>
        <p class="text-sm text-muted">Before deleting your account, please download any data or information that you wish to retain.</p>
        
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-account-modal">
          <i class="fas fa-trash-alt mr-1"></i> Delete Account
        </button>
      </div>
    </div>
    <!-- /.card -->

  </div>
</div>

<!-- Delete Account Modal -->
<div class="modal fade" id="delete-account-modal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" action="{{ route('profile.destroy') }}" class="modal-content">
      @csrf
      @method('delete')
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="deleteAccountModalLabel">Are you sure you want to delete your account?</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-danger font-weight-bold">Warning: This action is permanent and cannot be undone.</p>
        <p>Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>
        <div class="form-group">
          <label for="delete_password">Password</label>
          <input type="password" name="password" id="delete_password" class="form-control {{ $errors->userDeletion->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
          @if ($errors->userDeletion->has('password'))
            <span class="error invalid-feedback">{{ $errors->userDeletion->first('password') }}</span>
          @endif
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete Account</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
@if ($errors->userDeletion->any())
<script>
  $(document).ready(function() {
    $('#delete-account-modal').modal('show');
  });
</script>
@endif
@endsection
