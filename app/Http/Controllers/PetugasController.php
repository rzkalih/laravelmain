<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'tlp_petugas' => 'required',
            'alamat_petugas' => 'required',

        ]);

        $petugas = new petugas;
        $petugas->id = $request->id;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->jabatan_petugas = $request->jabatan_petugas;
        $petugas->tlp_petugas = $request->tlp_petugas;
        $petugas->alamat_petugas = $request->alamat_petugas;
        $petugas->save();

        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petuga)
    {
        return view('petugas.show', compact('petuga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petuga)
    {
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petuga)
    {
        $request->validate([
            'id' => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'tlp_petugas' => 'required',
            'alamat_petugas' => 'required',
        ]);
        $petuga->update($request->all());
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        $petuga = Petugas::where('id', $petuga->id)->delete();
        return redirect()->route('petugas.index');
    }
}
