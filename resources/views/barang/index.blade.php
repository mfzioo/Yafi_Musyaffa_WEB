@extends('layouts.app')
@section('content')
<h2>Data Barang</h2>
<a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">
    + Tambah barang
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $s)
        <tr>
            <td>{{ $s->kode_barang }}</td>
            <td>{{ $s->nama_barang }}</td>
            <td>{{ $s->harga_barang }}</td>
            <td>
                <a href="{{ route('barang.edit', $s->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                
                <form action="{{ route('barang.destroy', $s->id) }}" method="POST" style="display:inline">
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