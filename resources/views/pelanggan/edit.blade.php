@extends('layouts.app')
@section('content')

<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card">
        <div class="card-header bg-primary text-light">
            <strong>Form Edit Pelanggan</strong>
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label">Nomor Pelanggan</label>
                <input type="text" name="no_pelanggan" class="form-control"
                       value="{{ $pelanggan->no_pelanggan }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control"
                       value="{{ $pelanggan->nama_pelanggan }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control"
                       value="{{ $pelanggan->alamat }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>
</form>
@endsection