<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Foto;
use Illuminate\Http\Request;

class KategoriFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori_Foto::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        Kategori_Foto::create($request->all());
        return redirect()->route('kategori_foto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori_Foto::findOrFail($id);
        return view('kategori.edit', compact('kategori'));$kategori = Kategori_Foto::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $kategori = Kategori_Foto::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori_foto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori_Foto::destroy($id);
        return redirect()->route('kategori_foto.index');

    }
}
