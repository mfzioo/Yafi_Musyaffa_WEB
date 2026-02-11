@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Edit Penjualan</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <select name="barang_id" class="form-select" required>
                                @foreach ($barangs as $b)
                                    <option value="{{ $b->id }}"
                                        {{ $b->id == $penjualan->barang_id ? 'selected' : '' }}>
                                        {{ $b->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                
                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <select name="pelanggan_id" class="form-select" required>
                                @foreach ($pelanggans as $p)
                                    <option value="{{ $p->id }}"
                                        {{ $p->id == $penjualan->pelanggan_id ? 'selected' : '' }}>
                                        {{ $p->nama_pelanggan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">No Pelanggan</label>
                            <input type="text" name="no_pelanggan"
                                   class="form-control"
                                   value="{{ $penjualan->no_pelanggan }}" required>
                        </div>

                
                        <div class="mb-3">
                            <label class="form-label">Faktur</label>
                            <input type="text" name="faktur"
                                   class="form-control"
                                   value="{{ $penjualan->faktur }}" required>
                        </div>

                  
                        <div class="mb-3">
                            <label class="form-label">Tanggal Penjualan</label>
                            <input type="date" name="tanggal_penjualan"
                                   class="form-control"
                                   value="{{ $penjualan->tanggal_penjualan }}" required>
                        </div>

                    
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('penjualan.index') }}"
                               class="btn btn-secondary me-2">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
