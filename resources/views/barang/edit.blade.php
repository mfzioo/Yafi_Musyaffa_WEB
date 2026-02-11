@extends('layouts.app')
@section('content')
<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card">
        <div class="card-header bg-primary text-light">
            <strong>Form Edit Barang</strong>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control"
                       value="{{ $barang->kode_barang }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control"
                       value="{{ $barang->nama_barang }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control"
                       value="{{ $barang->harga_barang }}">
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>
</form>
@endsection