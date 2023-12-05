@extends('layouts.app')
  
@section('title', 'Edit Activity')
  
@section('contents')
    <h1 class="mb-0">Edit Activity</h1>
    <hr />
    <form action="{{ route('activity.update', $activity->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Aktivitas</label>
                <input type="text" name="aktivitas" class="form-control" placeholder="Aktivitas" value="{{ $activity->aktivitas }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $activity->tanggal }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection