<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rak = Rak::all();
        return view('rak.index', compact('rak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',


        ]);

        $rak = new rak;
        $rak->id = $request->id;
        $rak->nama_rak = $request->nama_rak;
        $rak->lokasi_rak = $request->lokasi_rak;
        $rak->save();

        return redirect()->route('rak.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $rak)
    {
        return view('rak.show', compact('rak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak)
    {
        return view('rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rak $rak)
    {
        $request->validate([
            'id' => 'required',
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
        ]);
        $rak->update($request->all());
        return redirect()->route('rak.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $rak)
    {
        $rak = Rak::where('id', $rak->id)->delete();
        return redirect()->route('rak.index');
    }
}
