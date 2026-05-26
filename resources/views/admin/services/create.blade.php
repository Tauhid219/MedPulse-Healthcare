@extends('layouts.admin')

@section('title', 'MedPulse | Add Service')
@section('page-title', 'Add New Service')

@section('content')
<div class="row">
  <div class="col-md-8">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Service Details</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" action="{{ route('admin.services.store') }}">
        @csrf
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
            <label for="title">Service Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="e.g., General Consultation" value="{{ old('title') }}" required>
            @error('title')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="description">Service Description</label>
            <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Provide service details, features, and coverages..." required>{{ old('description') }}</textarea>
            @error('description')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="icon">FontAwesome Icon Class</label>
                <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" id="icon" placeholder="e.g., fa-solid fa-heartbeat" value="{{ old('icon', 'fa-solid fa-notes-medical') }}" required>
                <small class="text-muted">Use standard FontAwesome class names like <code>fa-solid fa-brain</code>, <code>fa-solid fa-eye</code>, <code>fa-solid fa-tooth</code>, etc.</small>
                @error('icon')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="e.g., Diagnostics, Telehealth, Clinical" value="{{ old('category') }}">
                @error('category')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="price_estimate">Price Estimate ($)</label>
                <input type="number" step="0.01" name="price_estimate" class="form-control @error('price_estimate') is-invalid @enderror" id="price_estimate" placeholder="e.g., 150.00" value="{{ old('price_estimate') }}" required>
                @error('price_estimate')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="co_pay_ratio">Patient Co-pay Ratio (%)</label>
                <input type="number" name="co_pay_ratio" class="form-control @error('co_pay_ratio') is-invalid @enderror" id="co_pay_ratio" placeholder="e.g., 20" value="{{ old('co_pay_ratio', 20) }}" required min="0" max="100">
                <small class="text-muted">Percentage paid by the patient (e.g. 20% co-pay, 80% plan coverage).</small>
                @error('co_pay_ratio')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="duration">Duration / SLA</label>
                <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" id="duration" placeholder="e.g., 30 mins, Instant Sync" value="{{ old('duration') }}">
                @error('duration')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-success"><i class="fas fa-save mr-1"></i> Save Service</button>
          <a href="{{ route('admin.services.index') }}" class="btn btn-default"><i class="fas fa-times mr-1"></i> Cancel</a>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
