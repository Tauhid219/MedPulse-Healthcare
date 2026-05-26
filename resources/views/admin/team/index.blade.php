@extends('layouts.admin')

@section('title', 'MedPulse | Team Management')
@section('page-title', 'Team Management')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title">All Team Members / Medical Staff</h3>
        <div class="card-tools ml-auto">
          <a href="{{ route('admin.team.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-plus mr-1"></i> Add Team Member
          </a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover m-0">
            <thead>
            <tr>
              <th style="width: 80px">Order</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Role</th>
              <th>Department</th>
              <th>Bio</th>
              <th style="width: 200px">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($teamMembers as $member)
              <tr>
                <td class="text-center font-weight-bold">
                  <span class="badge badge-primary">{{ $member->order_index }}</span>
                </td>
                <td>
                  @if($member->image_url)
                    <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="img-circle elevation-1" style="width: 50px; height: 50px; object-fit: cover;">
                  @else
                    <div class="bg-secondary img-circle d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;">
                      <i class="fas fa-user-md fa-lg"></i>
                    </div>
                  @endif
                </td>
                <td><strong>{{ $member->name }}</strong></td>
                <td>{{ $member->role }}</td>
                <td><span class="badge badge-info">{{ $member->department ?? 'General' }}</span></td>
                <td>
                  <p class="text-muted text-xs mb-0 text-truncate" style="max-width: 250px;" title="{{ $member->bio }}">
                    {{ $member->bio ?? 'No bio provided.' }}
                  </p>
                </td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('admin.team.edit', $member->id) }}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <form method="POST" action="{{ route('admin.team.destroy', $member->id) }}" onsubmit="return confirm('Are you sure you want to remove this team member?');" style="display:inline">
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
                <td colspan="7" class="text-center py-5 text-muted">
                  <i class="fas fa-user-md fa-3x mb-3 text-gray-300"></i>
                  <p class="m-0">No team members found. Seed the database or add new team members.</p>
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
