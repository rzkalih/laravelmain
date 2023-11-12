<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);
        $anggota = new anggota;
        $anggota->id = $request->id;
        $anggota->nama = $request->nama;
        $anggota->kode = $request->kode;
        $anggota->jk = $request->jk;
        $anggota->jurusan = $request->jurusan;
        $anggota->tlp = $request->tlp;
        $anggota->alamat = $request->alamat;
        $anggota->save();

        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggotum)
    {
        return view('anggota.show', compact('anggotum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggotum)
    {
        return view('anggota.edit', compact('anggotum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggotum)
    {
        $request->validate([
            'id' => 'required',
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
        ]);

        $anggotum->update($request->all());
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggotum)
    {
        $anggotum = Anggota::where('id', $anggotum->id)->delete();
        return redirect()->route('anggota.index');
    }
}
