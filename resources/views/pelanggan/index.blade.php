@extends('layouts.app')
@section('content')
<h2>Data Pelanggan</h2>
<a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">
    + Tambah pelanggan
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>No Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggans as $s)
        <tr>
            <td>{{ $s->no_pelanggan }}</td>
            <td>{{ $s->nama_pelanggan }}</td>
            <td>{{ $s->alamat }}</td>
            <td>
                <a href="{{ route('pelanggan.edit', $s->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                
                <form action="{{ route('pelanggan.destroy', $s->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('dashboard') }}" class="btn btn-secondary">
                Kembali
            </a>

        @endsection