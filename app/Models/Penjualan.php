<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'barang_id',
        'pelanggan_id',
        'no_pelanggan',
        'faktur',
        'tanggal_penjualan',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
