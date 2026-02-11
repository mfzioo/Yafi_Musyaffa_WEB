@extends('layouts.app')
@section('content')

<h2>Data Penjualan</h2>
<a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-3">
    + Tambah pelanggan
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div
@endif

<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
        <th>No</th>
        <th>Barang</th>
        <th>Pelanggan</th>
        <th>No Pelanggan</th>
        <th>Faktur</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($penjualans as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->barang->nama_barang }}</td>
        <td>{{ $p->pelanggan->nama_pelanggan }}</td>
        <td>{{ $p->no_pelanggan }}</td>
        <td>{{ $p->faktur }}</td>
        <td>{{ $p->tanggal_penjualan }}</td>
        <td>
            
                <a href="{{ route('penjualan.edit', $p->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
               <form action="{{ route('penjualan.destroy', $p->id) }}" method="POST" style="display:inline">
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