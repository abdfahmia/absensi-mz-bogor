@extends('layouts.app')
  
{{-- @section('title', 'Edit Data Kehadiran') --}}
  
@section('contents')
    <h1 class="mb-0">Edit Data Kehadiran</h1>
    <hr />
    <form action="{{ route('kehadiran.update', $kehadiran->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Aktivitas</label>
            <select name="activity_id" class="form-control">
                @foreach($activities as $activity)
                    <option value="{{ $activity->id }}" {{ $activity->id == $kehadiran->activity_id ? 'selected' : '' }}>
                        {{ $activity->aktivitas }} <p>|</p> {{ $activity->tanggal }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col mb-3">
            <label class="form-label">Data Jamaah</label>
            <select name="jamaah_id[]" class="form-control" multiple>
                @foreach($jamaahs as $jamaah)
                    <option value="{{ $jamaah->id }}" {{ in_array($jamaah->id, $kehadiran->jamaahs->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $jamaah->nama }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>

@endsection
