@extends('layouts.admin')

@section('title', 'MedPulse | Global Settings')
@section('page-title', 'Global Settings')

@section('content')
<div class="row">
  <div class="col-md-10">
    <form method="POST" action="{{ route('admin.settings.update') }}">
      @csrf

      <!-- Hero Section Settings Card -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-home mr-2"></i> Homepage Hero Section</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="hero_title">Hero Title (HTML Allowed)</label>
            <input type="text" name="hero_title" class="form-control" id="hero_title" value="{{ old('hero_title', $settings['hero_title'] ?? '') }}" required>
            <small class="text-muted">Use standard tags like <code>&lt;br&gt;</code> and classes like <code>&lt;span class="text-blue-600"&gt;text&lt;/span&gt;</code> to style the title.</small>
          </div>

          <div class="form-group">
            <label for="hero_subtitle">Hero Subtitle</label>
            <textarea name="hero_subtitle" rows="3" class="form-control" id="hero_subtitle" required>{{ old('hero_subtitle', $settings['hero_subtitle'] ?? '') }}</textarea>
          </div>

          <div class="form-group">
            <label for="doctors_online_text">Doctors Online Status Text</label>
            <input type="text" name="doctors_online_text" class="form-control" id="doctors_online_text" value="{{ old('doctors_online_text', $settings['doctors_online_text'] ?? '') }}" required>
          </div>
        </div>
      </div>

      <!-- Health Plan & Metrics Settings Card -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-heartbeat mr-2"></i> Patient Portal Health Metrics</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="health_plan_title">Health Plan Title</label>
                <input type="text" name="health_plan_title" class="form-control" id="health_plan_title" value="{{ old('health_plan_title', $settings['health_plan_title'] ?? '') }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="health_plan_id">Health Plan Portal ID</label>
                <input type="text" name="health_plan_id" class="form-control" id="health_plan_id" value="{{ old('health_plan_id', $settings['health_plan_id'] ?? '') }}" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="deductible_progress_text">Deductible Progress Text</label>
                <input type="text" name="deductible_progress_text" class="form-control" id="deductible_progress_text" value="{{ old('deductible_progress_text', $settings['deductible_progress_text'] ?? '') }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="deductible_progress_percentage">Deductible Progress Percentage (0-100)</label>
                <input type="number" min="0" max="100" name="deductible_progress_percentage" class="form-control" id="deductible_progress_percentage" value="{{ old('deductible_progress_percentage', $settings['deductible_progress_percentage'] ?? '') }}" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="next_refill_text">Next Rx Refill Timeline</label>
                <input type="text" name="next_refill_text" class="form-control" id="next_refill_text" value="{{ old('next_refill_text', $settings['next_refill_text'] ?? '') }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pending_claims_text">Active Claims Status Text</label>
                <input type="text" name="pending_claims_text" class="form-control" id="pending_claims_text" value="{{ old('pending_claims_text', $settings['pending_claims_text'] ?? '') }}" required>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- General Institutional & Support Routing Settings Card -->
      <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title"><i class="fas fa-phone mr-2"></i> Contact & Support Routing</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="hospital_phone">Institutional Hotline</label>
                <input type="text" name="hospital_phone" class="form-control" id="hospital_phone" value="{{ old('hospital_phone', $settings['hospital_phone'] ?? '') }}" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="hospital_email">Secure Intake Email</label>
                <input type="email" name="hospital_email" class="form-control" id="hospital_email" value="{{ old('hospital_email', $settings['hospital_email'] ?? '') }}" required>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-light mb-5">
        <div class="card-body">
          <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save mr-2"></i> Save All Settings</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
