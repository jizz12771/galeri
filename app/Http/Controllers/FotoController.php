<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Fotografer;
use Illuminate\Http\Request;
use App\Models\Kategori_Foto;
use Illuminate\Routing\Controller;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foto = Foto::with(['kategori', 'fotografer'])->get();
    return view('foto.index', compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori_Foto::all();
        $fotografer = Fotografer::all();
        return view('foto.create', compact('kategori', 'fotografer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file_path' => 'required|image|max:2048',
            'kategori_id' => 'required',
            'fotografer_id' => 'required',
        ]);

        $path = $request->file('file_path')->store('foto', 'public');

        Foto::create([
            'judul' => $request->judul,
            'file_path' => $path,
            'kategori_id' => $request->kategori_id,
            'fotografer_id' => $request->fotografer_id,
        ]);

        return redirect()->route('foto.index')->with('success', 'Foto berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $foto = Foto::with(['kategori','fotografer'])->findOrFail($id);
    return view('foto.show', compact('foto'));
    
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $foto = Foto::findOrFail($id);
        $kategori = Kategori_Foto::all();
        $fotografer = Fotografer::all();
        return view('foto.create', compact('foto', 'kategori', 'fotografer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto = Foto::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'fotografer_id' => 'required',
        ]);$foto = Foto::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'kategori_id' => 'required',
            'fotografer_id' => 'required',
        ]);

        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('foto', 'public');
            $foto->file_path = $path;
        }
            $foto->judul = $request->judul;
            $foto->kategori_id = $request->kategori_id;
            $foto->fotografer_id = $request->fotografer_id;
            $foto->save();

        return redirect()->route('foto.index');

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $foto = Foto::findOrFail($id);
        $foto->delete();
        return redirect()->route('foto.index');
    }
}
