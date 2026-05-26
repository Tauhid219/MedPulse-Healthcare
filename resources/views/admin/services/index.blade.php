@extends('layouts.admin')

@section('title', 'MedPulse | Services Management')
@section('page-title', 'Services Management')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title">All Services</h3>
        <div class="card-tools ml-auto">
          <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-plus mr-1"></i> Add New Service
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover m-0">
            <thead>
            <tr>
              <th>ID</th>
              <th>Icon</th>
              <th>Title</th>
              <th>Category</th>
              <th>Price Estimate</th>
              <th>Co-pay Ratio</th>
              <th>Duration</th>
              <th style="width: 200px">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($services as $service)
              <tr>
                <td>#SRV-{{ $service->id }}</td>
                <td>
                  <span class="p-2 bg-light border rounded d-inline-block text-primary">
                    <i class="{{ $service->icon }} fa-fw"></i>
                  </span>
                  <small class="text-muted block text-xs mt-1">{{ $service->icon }}</small>
                </td>
                <td>
                  <strong>{{ $service->title }}</strong>
                  <p class="text-muted text-xs mb-0 mt-1 text-truncate" style="max-width: 300px;">
                    {{ $service->description }}
                  </p>
                </td>
                <td>
                  <span class="badge badge-secondary">{{ $service->category ?? 'General' }}</span>
                </td>
                <td>${{ number_format($service->price_estimate, 2) }}</td>
                <td>{{ $service->co_pay_ratio }}% / {{ 100 - $service->co_pay_ratio }}%</td>
                <td>{{ $service->duration ?? 'N/A' }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}" onsubmit="return confirm('Are you sure you want to delete this service?');" style="display:inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash mr-1"></i> Delete
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-center py-5 text-muted">
                  <i class="fas fa-notes-medical fa-3x mb-3 text-gray-300"></i>
                  <p class="m-0">No services found in database. Seed the database or add new services.</p>
                </td>
              </tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
