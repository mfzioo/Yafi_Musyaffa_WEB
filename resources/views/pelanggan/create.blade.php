@extends('layouts.app')
@section('content')
<form action="{{ route('pelanggan.store') }}" method="POST">
    @csrf
    
    <div class="card">
        <div class="card-header bg-primary text-white">
            <strong>Form Tambah Pelanggan</strong>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">Nomor Pelanggan</label>
                <input type="text" name="no_pelanggan" class="form-control" placeholder="Masukkan nomor pelanggan">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan nama pelanggan">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div> 
</form>

        @endsection