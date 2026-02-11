@extends('layouts.app')

@section('content')
<div class="container py-5">


    <div class="text-center mb-4">
        <h2 class="fw-bold">Dashboard Penjualan Barang</h2>
        <p class="text-muted">Selamat datang di dashboard</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">📚 Data Barang</h5>
                    <p class="card-text">
                        Kelola Data Barang
                    </p>
                    <a href="{{ route('barang.index') }}" class="btn btn-primary w-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">    
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">📚 Data Pelanggan</h5>
                    <p class="card-text">
                        Kelola Data Pelanggan
                    </p>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-primary w-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">    
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">📚 Data Penjualan</h5>
                    <p class="card-text">
                        Kelola Data Penjualan
                    </p>
                    <a href="{{ route('penjualan.index') }}" class="btn btn-primary w-100">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

