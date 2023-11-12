<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman = Peminjaman::all();
        $buku = Buku::select('id', 'judul')->get();
        $anggota = Anggota::select('id', 'nama')->get();
        $petugas = Petugas::select('id', 'nama_petugas')->get();
        return view('peminjaman.create', compact('peminjaman', 'buku', 'anggota', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Anggota $anggota, Petugas $petugas, Buku $buku)
    {
        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        $peminjaman = new Peminjaman();
        $peminjaman->buku_id = $request->buku_id;
        $peminjaman->anggota_id = $request->anggota_id;
        $peminjaman->petugas_id = $request->petugas_id;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
