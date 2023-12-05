@extends('layouts.app')
  
{{-- @section('title', 'Create Activity') --}}
  
@section('contents')
    <h1 class="mb-0">Tambah Jamaah</h1>
    <hr />
    <form action="{{ route('jamaah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Jamaah">
            </div>
            <div class="col" class="form-select form-select-lg mb-3" >
                <select name="kaji" id="kaji">
                    <option value="null" selected>Pilih kaji</option>
                    <option value="IZ">Ismu Zat (IZ)</option>
                    <option value="LT">Latifah (LT)</option>
                    <option value="NI">Nafi Isbat (NI)</option>
                    <option value="MI">MI (MI)</option>
                    <option value="D1">D1</option>
                    <option value="PTT">PTT</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection