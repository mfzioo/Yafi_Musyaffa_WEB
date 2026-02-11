<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Penjualan</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tambah Penjualan</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf

                     
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <select name="barang_id" class="form-select" required>
                                <option value="">-- Pilih Barang --</option>
                                @foreach ($barangs as $b)
                                    <option value="{{ $b->id }}">
                                        {{ $b->nama_barang }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                       
                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <select name="pelanggan_id" class="form-select" required>
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach ($pelanggans as $p)
                                    <option value="{{ $p->id }}">
                                        {{ $p->nama_pelanggan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                       
                        <div class="mb-3">
                            <label class="form-label">No Pelanggan</label>
                            <input type="text" name="no_pelanggan" 
                                   class="form-control" 
                                   placeholder="Masukkan No Pelanggan" required>
                        </div>

                      
                        <div class="mb-3">
                            <label class="form-label">No Faktur</label>
                            <input type="text" name="faktur" 
                                   class="form-control" 
                                   placeholder="Contoh: 770" required>
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label">Tanggal Penjualan</label>
                            <input type="date" name="tanggal_penjualan" 
                                   class="form-control" required>
                        </div>

                       
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('penjualan.index') }}" 
                               class="btn btn-secondary me-2">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS Offline -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
