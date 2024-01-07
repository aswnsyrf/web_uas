<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::with('produkk')->orderBy('nama_customer', 'asc')->get();


        return view('transaksi.index', compact('transaksis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_produkk = Product::all();
        return view('transaksi.create', compact('data_produkk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'produk' => 'required',
            'durasi' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembalian' => 'required',
            'harga' => 'required',
        ]);

        $input = $request->all();

        Transaksi::create($input);

        return redirect()->route('transaksi.index')
            ->with('success', 'Transaksi berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $data_produkk = Product::all();
        return view('transaksi.edit', compact('transaksi', 'data_produkk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama_customer' => 'required',
            'produk' => 'required',
            'durasi' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembalian' => 'required',
            'harga' => 'required',
        ]);

        $input = $request->all();

        $transaksi->update($input);

        return redirect()->route('transaksi.index')
            ->with('success', 'Transaksi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')
            ->with('success', 'Transaksi berhasil dihapus');
    }
}
