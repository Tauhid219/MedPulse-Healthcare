@extends('layouts.admin')

@section('title', 'MedPulse | View Message')
@section('page-title', 'Read Message')

@section('content')
<div class="row">
  <div class="col-md-3">
    <a href="{{ route('admin.messages.index') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Message Metadata</h3>
      </div>
      <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <span class="nav-link">
              <i class="fas fa-user text-primary mr-2"></i> Patient: 
              <span class="float-right text-muted font-weight-bold">{{ $message->name }}</span>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <i class="fas fa-id-card text-success mr-2"></i> Health ID: 
              <span class="float-right text-muted font-weight-bold"><code>{{ $message->health_id ?? 'N/A' }}</code></span>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <i class="fas fa-route text-warning mr-2"></i> Route target: 
              <span class="float-right text-muted text-xs font-weight-bold">{{ $message->routing_target }}</span>
            </span>
          </li>
          <li class="nav-item">
            <span class="nav-link">
              <i class="far fa-clock text-info mr-2"></i> Sent time: 
              <span class="float-right text-muted text-xs font-weight-bold">{{ $message->created_at->format('Y-m-d H:i') }}</span>
            </span>
          </li>
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  <div class="col-md-9">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Read Triage Message</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="mailbox-read-info">
          <h5>Subject Route: <strong>{{ $message->routing_target }}</strong></h5>
          <h6>From: <strong>{{ $message->name }}</strong>
            <span class="mailbox-read-time float-right">{{ $message->created_at->format('d M. Y h:i A') }}</span>
          </h6>
        </div>
        <!-- /.mailbox-read-info -->
        <div class="mailbox-controls class text-center border-top border-bottom py-2 bg-light">
          <div class="btn-group">
            <form method="POST" action="{{ route('admin.messages.destroy', $message->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-default btn-sm" data-container="body" title="Delete">
                <i class="far fa-trash-alt text-red mr-1"></i> Delete Message
              </button>
            </form>
          </div>
        </div>
        <!-- /.mailbox-controls -->
        <div class="mailbox-read-message p-4">
          <p class="font-weight-bold text-muted mb-2">Message Payload Content:</p>
          <div class="bg-light p-3 rounded border" style="white-space: pre-wrap; font-family: inherit;">{{ $message->message }}</div>
        </div>
        <!-- /.mailbox-read-message -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer bg-light">
        <a href="{{ route('admin.messages.index') }}" class="btn btn-default"><i class="fas fa-arrow-left mr-1"></i> Back</a>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@endsection
