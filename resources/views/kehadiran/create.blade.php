@extends('layouts.app')
  
{{-- @section('title', 'Create Activity') --}}
  
@section('contents')
    <h1 class="mb-0">Tambah Aktivitas</h1>
    <hr />
    <form action="{{ route('kehadiran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="aktivitas" class="form-control" placeholder="Aktivitas">
            </div>
            <div class="col">
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
            <div class="col">
                <input type="dropdown" name="aktivitas" class="form-control" placeholder="Pentawajuh">
            </div>
        </div>
 
        <div class="row mb-3">
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection