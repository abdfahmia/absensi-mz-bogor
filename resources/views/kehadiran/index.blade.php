@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Kehadiran</h1>
        <a href="{{ route('kehadiran.create') }}" class="btn btn-primary">Tambah Kehadiran</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Jumlah Jamaah</th>
                <th>Action</th>
            </tr>
        </thead>
<tbody>
    @foreach($activities as $act)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $act->aktivitas }}</td>
            <td>{{ $act->tanggal }}</td>
            <td class="text-center">
            @foreach($kehadiran->jamaahs as $jmh)
                {{ $jmh->count() }}
            </td>
            @endforeach
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('kehadiran.show', $act->id) }}" type="button" class="btn btn-secondary">Detail</a>
                    <a href="{{ route('kehadiran.edit', $act->id)}}" type="button" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kehadiran.destroy', $act->id) }}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>




                </table>
                @endsection