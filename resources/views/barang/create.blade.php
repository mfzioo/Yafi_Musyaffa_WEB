@extends('layouts.app')
@section('content')
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <strong>Form Tambah Barang</strong>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan kode barang">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" placeholder="Masukkan harga barang">
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div> </form>

        @endsection