@extends('layouts.admin')

@section('title', 'MedPulse | Message Inbox')
@section('page-title', 'Message Inbox')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Inbound Triage Messages</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover m-0">
            <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Health ID</th>
              <th>Routing Target</th>
              <th>Status</th>
              <th>Date</th>
              <th style="width: 220px">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($messages as $message)
              <tr class="{{ $message->status === 'unread' ? 'font-weight-bold bg-light' : '' }}">
                <td>#MSG-{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td><code>{{ $message->health_id ?? 'N/A' }}</code></td>
                <td>{{ $message->routing_target }}</td>
                <td>
                  @if($message->status === 'unread')
                    <span class="badge badge-danger">Unread</span>
                  @elseif($message->status === 'read')
                    <span class="badge badge-info">Read</span>
                  @else
                    <span class="badge badge-success">Replied</span>
                  @endif
                </td>
                <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-eye mr-1"></i> View
                    </a>
                    
                    @if($message->status === 'unread')
                      <form method="POST" action="{{ route('admin.messages.markAsRead', $message->id) }}" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success">
                          <i class="fas fa-check mr-1"></i> Mark Read
                        </button>
                      </form>
                    @endif

                    <form method="POST" action="{{ route('admin.messages.destroy', $message->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');" style="display:inline">
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
                  <i class="far fa-envelope-open fa-3x mb-3 text-gray-300"></i>
                  <p class="m-0">No triage messages received yet.</p>
                </td>
              </tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <div class="float-right">
          {{ $messages->links() }}
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
