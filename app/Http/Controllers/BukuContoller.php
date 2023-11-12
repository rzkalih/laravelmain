<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Rak $rak)
    {
        $rak = $rak->all();
        return view('buku.create', compact('rak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku)
    {
        $request->validate([
            'id' => 'required',
            'kode' => 'required',
            'judul' => 'required',
            'rak_id' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
        ]);

        $buku::create([
            'id' => $request['id'],
            'kode' => $request['kode'],
            'judul' => $request['judul'],
            'rak_id' => $request['rak_id'],
            'penulis' => $request['penulis'],
            'penerbit' => $request['penerbit'],
            'tahun_terbit' => $request['tahun_terbit'],
            'stok' => $request['stok'],
        ]);

        return redirect()->route('buku.index');
    }



    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Buku $buku)
    {
       //
    }
}
