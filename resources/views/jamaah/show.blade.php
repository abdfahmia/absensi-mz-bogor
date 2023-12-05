@extends('layouts.app')
  
  
@section('contents')
    <h1 class="mb-0">Detail Jamaah</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Title" value="{{ $jamaah->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kaji</label>
            <input type="text" name="tanggal" class="form-control" placeholder="Price" value="{{ $jamaah->kaji }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">alamat</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $jamaah->alamat }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor HP</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $jamaah->no_hp }}" readonly>
        </div>
    </div>
@endsection