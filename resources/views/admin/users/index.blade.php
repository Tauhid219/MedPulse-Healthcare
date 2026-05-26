@extends('layouts.admin')

@section('title', 'MedPulse | Admin Users')
@section('page-title', 'Admin Users Management')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title">Administrative Accounts</h3>
        <div class="card-tools ml-auto">
          <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-user-plus mr-1"></i> Add Admin User
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
              <th>Name</th>
              <th>Email</th>
              <th>Registered At</th>
              <th style="width: 200px">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
              <tr>
                <td>#USR-{{ $user->id }}</td>
                <td>
                  <strong>{{ $user->name }}</strong>
                  @if($user->id === auth()->id())
                    <span class="badge badge-success ml-1">You</span>
                  @endif
                </td>
                <td><code>{{ $user->email }}</code></td>
                <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-info">
                      <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    
                    @if($user->id !== auth()->id())
                      <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure you want to delete this administrative account?');" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                          <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                      </form>
                    @else
                      <button class="btn btn-sm btn-secondary disabled" title="You cannot delete your own account from the list.">
                        <i class="fas fa-ban mr-1"></i> Delete
                      </button>
                    @endif
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <div class="float-right">
          {{ $users->links() }}
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
