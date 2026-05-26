@extends('layouts.admin')

@section('title', 'MedPulse | Admin Dashboard')
@section('page-title', 'Dashboard Overview')

@section('content')
<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $totalMessages }}</h3>
        <p>Inbound Messages</p>
      </div>
      <div class="icon">
        <i class="fas fa-envelope"></i>
      </div>
      <a href="{{ route('admin.messages.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $totalServices }}</h3>
        <p>Medical Services</p>
      </div>
      <div class="icon">
        <i class="fas fa-notes-medical"></i>
      </div>
      <a href="{{ route('admin.services.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning text-white">
      <div class="inner">
        <h3 class="text-white">{{ $totalTeamMembers }}</h3>
        <p class="text-white">Leadership Team</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-md text-white-50"></i>
      </div>
      <a href="{{ route('admin.team.index') }}" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right text-white"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title"><i class="fas fa-mail-bulk mr-1 text-primary"></i> Recent Messages</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table m-0">
            <thead>
            <tr>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Health ID</th>
              <th>Routing Target</th>
              <th>Submitted At</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($recentMessages as $message)
              <tr>
                <td>#MSG-{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td><code>{{ $message->health_id ?? 'N/A' }}</code></td>
                <td>{{ $message->routing_target }}</td>
                <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                <td>
                  @if($message->status === 'unread')
                    <span class="badge badge-danger">Unread</span>
                  @elseif($message->status === 'read')
                    <span class="badge badge-info">Read</span>
                  @else
                    <span class="badge badge-success">Replied</span>
                  @endif
                </td>
                <td>
                  <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye mr-1"></i> View</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center py-4 text-muted">No messages received yet.</td>
              </tr>
            @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer class clearfix">
        <a href="{{ route('admin.messages.index') }}" class="btn btn-sm btn-secondary float-right">View All Messages</a>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
