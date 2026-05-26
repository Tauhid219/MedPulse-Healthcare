@extends('layouts.admin')

@section('title', 'MedPulse | Edit Team Member')
@section('page-title', 'Edit Team Member')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Modify Profile Details</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" action="{{ route('admin.team.update', $team->id) }}">
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

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="e.g., Dr. Sarah Jenkins" value="{{ old('name', $team->name) }}" required>
                @error('name')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="role">Role / Designation</label>
                <input type="text" name="role" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="e.g., Chief Medical Officer" value="{{ old('role', $team->role) }}" required>
                @error('role')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" class="form-control @error('department') is-invalid @enderror" id="department" placeholder="e.g., Cardiology, Surgery" value="{{ old('department', $team->department) }}">
                @error('department')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="order_index">Sort Order Index</label>
                <input type="number" name="order_index" class="form-control @error('order_index') is-invalid @enderror" id="order_index" placeholder="e.g., 0, 1, 2" value="{{ old('order_index', $team->order_index) }}" required min="0">
                <small class="text-muted">Determines display order on the about page (smaller numbers first).</small>
                @error('order_index')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="url" name="image_url" class="form-control @error('image_url') is-invalid @enderror" id="image_url" placeholder="e.g., https://images.unsplash.com/... or /images/dr-jenkins.jpg" value="{{ old('image_url', $team->image_url) }}">
            <small class="text-muted">Provide a full Unsplash image URL or reference an existing local public asset path.</small>
            @error('image_url')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="bio">Bio / Professional Summary</label>
            <textarea name="bio" rows="4" class="form-control @error('bio') is-invalid @enderror" id="bio" placeholder="Describe their experience, credentials, and achievements...">{{ old('bio', $team->bio) }}</textarea>
            @error('bio')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-info"><i class="fas fa-save mr-1"></i> Update Profile</button>
          <a href="{{ route('admin.team.index') }}" class="btn btn-default"><i class="fas fa-times mr-1"></i> Cancel</a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
