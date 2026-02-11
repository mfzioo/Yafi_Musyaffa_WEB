<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with(['barang', 'pelanggan'])->get();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        return view('penjualan.create', compact('barangs', 'pelanggans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'no_pelanggan' => 'required|string|max:50',
            'faktur' => 'required|string|max:50',
            'tanggal_penjualan' => 'required|date',
        ]);

        Penjualan::create([
            'barang_id' => $request->barang_id,
            'pelanggan_id' => $request->pelanggan_id,
            'no_pelanggan' => $request->no_pelanggan,
            'faktur' => $request->faktur,
            'tanggal_penjualan' => $request->tanggal_penjualan,
        ]);

        return redirect()->route('penjualan.index')
                         ->with('success', 'Penjualan berhasil ditambahkan');
    }

    public function edit(Penjualan $penjualan)
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        return view('penjualan.edit', compact('penjualan', 'barangs', 'pelanggans'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'no_pelanggan' => 'required|string|max:50',
            'faktur' => 'required|string|max:50',
            'tanggal_penjualan' => 'required|date',
        ]);

        $penjualan->update([
            'barang_id' => $request->barang_id,
            'pelanggan_id' => $request->pelanggan_id,
            'no_pelanggan' => $request->no_pelanggan,
            'faktur' => $request->faktur,
            'tanggal_penjualan' => $request->tanggal_penjualan,
        ]);

        return redirect()->route('penjualan.index')
                         ->with('success', 'Penjualan berhasil diupdate');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')
                         ->with('success', 'Penjualan berhasil dihapus');
    }
}
