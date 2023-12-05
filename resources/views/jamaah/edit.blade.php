@extends('layouts.app')
  
{{-- @section('title', 'Edit Activity') --}}
  
@section('contents')
    <h1 class="mb-0">Edit Data Jamaah</h1>
    <hr />
    <form action="{{ route('jamaah.update', $jamaah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Jamaah</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Jamaah" value="{{ $jamaah->nama }}" >
            </div>
            <div class="col" class="form-select form-select-lg mb-3" >
                <select name="kaji" id="kaji">
                @if($jamaah->kaji)
                <option   option value="{{ $jamaah->kaji }}" selected>{{ $jamaah->kaji }}</option>
                @endif
                    <option value="IZ" {{ $jamaah->kaji == 'IZ' ? 'selected' : '' }}>Ismu Zat (IZ)</option>
                    <option value="LT" {{ $jamaah->kaji == 'LT' ? 'selected' : '' }}>Latifah (LT)</option>
                    <option value="NI" {{ $jamaah->kaji == 'NI' ? 'selected' : '' }}>Nafi Isbat (NI)</option>
                    <option value="MI" {{ $jamaah->kaji == 'MI' ? 'selected' : '' }}>MI (MI)</option>
                    <option value="D1" {{ $jamaah->kaji == 'D1' ? 'selected' : '' }}>D1</option>
                    <option value="PTT" {{ $jamaah->kaji == 'PTT' ? 'selected' : '' }}>PTT</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$jamaah->alamat}}">
            </div>
            <div class="col">
                <label class="form-label">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp" value="{{$jamaah->no_hp}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection