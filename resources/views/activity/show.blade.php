@extends('layouts.app')
  
@section('title', 'Show Activity')
  
@section('contents')
    <h1 class="mb-0">Detail Activity</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Aktivitas</label>
            <input type="text" name="aktivitas" class="form-control" placeholder="Title" value="{{ $activity->aktivitas }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Price" value="{{ $activity->tanggal }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $activity->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $activity->updated_at }}" readonly>
        </div>
    </div>
@endsection